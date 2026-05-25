<?php
declare(strict_types=1);

function gy_contact_mail_config(): array
{
    static $config = null;
    if ($config !== null) {
        return $config;
    }

    $defaults = require __DIR__ . '/contact-mail-config.php';
    $local = __DIR__ . '/contact-mail.local.php';
    if (is_file($local)) {
        $overrides = require $local;
        if (is_array($overrides)) {
            $defaults = array_replace_recursive($defaults, $overrides);
        }
    }

    $config = $defaults;
    return $config;
}

function gy_contact_storage_dir(): string
{
    return dirname(__DIR__) . '/storage/contact-messages';
}

function gy_contact_save_to_storage(
    string $firstName,
    string $lastName,
    string $email,
    string $phone,
    string $subject,
    string $description
): void {
    $dir = gy_contact_storage_dir();
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $file = $dir . '/' . date('Y-m-d_His') . '_' . bin2hex(random_bytes(4)) . '.txt';
    $body = "Goodyear contact form submission\n\n"
        . "First name: {$firstName}\n"
        . "Last name: {$lastName}\n"
        . "Email: {$email}\n"
        . "Phone: {$phone}\n"
        . "Subject: {$subject}\n\n"
        . "Message:\n{$description}\n";

    file_put_contents($file, $body);
}

function gy_contact_smtp_ready(array $config): bool
{
    $smtp = $config['smtp'] ?? [];
    if (empty($smtp['enabled'])) {
        return false;
    }

    $user = trim((string)($smtp['username'] ?? ''));
    $pass = (string)($smtp['password'] ?? '');

    return $user !== '' && $pass !== '';
}

/** True when SMTP is on and real credentials (not placeholders) are set. */
function gy_contact_form_enabled(): bool
{
    $config = gy_contact_mail_config();
    if (!gy_contact_smtp_ready($config)) {
        return false;
    }

    $from = trim((string)($config['from_email'] ?? ''));
    $user = trim((string)($config['smtp']['username'] ?? ''));
    if (!filter_var($from, FILTER_VALIDATE_EMAIL) || !filter_var($user, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $placeholders = '/your\.email|your-gmail|example\.com|changeme|xxx/i';
    if (preg_match($placeholders, $from) || preg_match($placeholders, $user)) {
        return false;
    }

    return true;
}

function gy_contact_encode_address(string $name, string $email): string
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!is_string($email) || $email === '') {
        return 'noreply@localhost';
    }
    $name = str_replace(['"', "\r", "\n"], '', $name);
    if ($name === '') {
        return $email;
    }
    return '"' . $name . '" <' . $email . '>';
}

function gy_contact_send_smtp(
    array $config,
    string $to,
    string $fromEmail,
    string $fromName,
    string $subject,
    string $body,
    string $replyName,
    string $replyEmail
): array {
    $smtp = $config['smtp'] ?? [];
    $autoload = dirname(__DIR__) . '/vendor/autoload.php';
    if (!is_file($autoload)) {
        return ['ok' => false, 'message' => 'PHPMailer is not installed. Run: composer install in goodyear_offline/'];
    }

    require_once $autoload;

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = (string)($smtp['host'] ?? 'smtp.gmail.com');
        $mail->Port = (int)($smtp['port'] ?? 587);
        $mail->SMTPAuth = true;
        $mail->Username = (string)$smtp['username'];
        $mail->Password = (string)$smtp['password'];
        $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;

        $encryption = strtolower((string)($smtp['encryption'] ?? 'tls'));
        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'tls') {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure = '';
            $mail->SMTPAutoTLS = false;
        }

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);
        $mail->addReplyTo($replyEmail, $replyName);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);
        $mail->send();

        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
    } catch (PHPMailer\PHPMailer\Exception $e) {
        return [
            'ok' => false,
            'message' => 'Could not send email (SMTP). Check includes/contact-mail.local.php — ' . $mail->ErrorInfo,
        ];
    }
}

function gy_contact_send_php_mail(
    string $to,
    string $fromEmail,
    string $fromName,
    string $subject,
    string $body,
    string $replyName,
    string $replyEmail
): array {
    if ($fromEmail === '' || !filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
        $fromEmail = 'noreply@localhost';
    }

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
        'From: ' . gy_contact_encode_address($fromName, $fromEmail),
        'Reply-To: ' . gy_contact_encode_address($replyName, $replyEmail),
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    $headerString = implode("\r\n", $headers);
    $body = str_replace(["\r\n", "\r"], "\n", $body);

    $envelopeFrom = filter_var($fromEmail, FILTER_VALIDATE_EMAIL);
    $params = is_string($envelopeFrom) ? ('-f' . $envelopeFrom) : '';

    $ok = $params !== ''
        ? mail($to, $subject, $body, $headerString, $params)
        : mail($to, $subject, $body, $headerString);

    if ($ok) {
        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
    }

    return [
        'ok' => false,
        'message' => 'Could not send email. Configure SMTP in includes/contact-mail.local.php or enable storage fallback.',
    ];
}

function gy_contact_send_mail(
    string $firstName,
    string $lastName,
    string $email,
    string $phone,
    string $subject,
    string $description
): array {
    $config = gy_contact_mail_config();
    $to = (string)($config['recipient'] ?? '');
    $fromEmail = (string)($config['from_email'] ?? '');
    $fromName = (string)($config['from_name'] ?? 'Goodyear Contact Form');

    $safeName = trim($firstName . ' ' . $lastName);
    $safeEmail = trim($email);
    $safeSubject = str_replace(["\r", "\n"], '', trim($subject));
    $safeMessage = trim($description);

    $mailSubject = 'Contact: ' . $safeSubject;
    $body = "Goodyear contact form submission\n\n"
        . "Name: {$safeName}\n"
        . "Email: {$safeEmail}\n"
        . "Phone: {$phone}\n"
        . "Subject: {$safeSubject}\n\n"
        . "Message:\n{$safeMessage}\n";

    $saved = false;
    if (!empty($config['save_to_storage'])) {
        gy_contact_save_to_storage($firstName, $lastName, $email, $phone, $safeSubject, $safeMessage);
        $saved = true;
    }

    if (gy_contact_smtp_ready($config)) {
        $smtpResult = gy_contact_send_smtp(
            $config,
            $to,
            $fromEmail,
            $fromName,
            $mailSubject,
            $body,
            $safeName,
            $safeEmail
        );
        if ($smtpResult['ok']) {
            return $smtpResult;
        }
        if (!$saved && empty($config['fallback_mail'])) {
            return $smtpResult;
        }
    }

    if (!empty($config['fallback_mail'])) {
        $mailResult = gy_contact_send_php_mail($to, $fromEmail, $fromName, $mailSubject, $body, $safeName, $safeEmail);
        if ($mailResult['ok']) {
            return $mailResult;
        }
        if ($saved) {
            return [
                'ok' => true,
                'message' => 'Thank you. Your message was saved locally (email could not be sent). Check storage/contact-messages/.',
            ];
        }
        return $mailResult;
    }

    if ($saved) {
        return [
            'ok' => true,
            'message' => 'Thank you. Your message was received and saved.',
        ];
    }

    return ['ok' => false, 'message' => 'The contact form is temporarily unavailable.'];
}

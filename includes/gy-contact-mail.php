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
    string $username,
    string $email,
    string $subject,
    string $message
): void {
    $dir = gy_contact_storage_dir();
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $file = $dir . '/' . date('Y-m-d_His') . '_' . bin2hex(random_bytes(4)) . '.txt';
    $body = "Goodyear contact form submission\n\n"
        . "Name: {$username}\n"
        . "Email: {$email}\n"
        . "Subject: {$subject}\n\n"
        . "Message:\n{$message}\n";

    file_put_contents($file, $body);
}

function gy_contact_is_placeholder_email(string $email): bool
{
    $email = trim($email);
    if ($email === '') {
        return true;
    }

    return (bool)preg_match('/your\.email|example\.com|changeme|xxx@/i', $email);
}

function gy_contact_form_enabled(): bool
{
    $config = gy_contact_mail_config();
    $recipient = trim((string)($config['recipient'] ?? ''));
    $from = trim((string)($config['from_email'] ?? ''));

    return filter_var($recipient, FILTER_VALIDATE_EMAIL)
        && filter_var($from, FILTER_VALIDATE_EMAIL)
        && !gy_contact_is_placeholder_email($recipient)
        && !gy_contact_is_placeholder_email($from);
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

function gy_contact_send_mail(
    string $username,
    string $email,
    string $subject,
    string $message
): array {
    $config = gy_contact_mail_config();
    $to = trim((string)($config['recipient'] ?? ''));
    $fromEmail = trim((string)($config['from_email'] ?? ''));
    $fromName = trim((string)($config['from_name'] ?? 'Goodyear Contact Form'));

    $safeName = trim($username);
    $safeEmail = trim($email);
    $safeSubject = str_replace(["\r", "\n"], '', trim($subject));
    $safeMessage = trim($message);

    $mailSubject = 'Contact: ' . $safeSubject;
    $body = "Goodyear contact form submission\n\n"
        . "Name: {$safeName}\n"
        . "Email: {$safeEmail}\n"
        . "Subject: {$safeSubject}\n\n"
        . "Message:\n{$safeMessage}\n";

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
        'From: ' . gy_contact_encode_address($fromName, $fromEmail),
        'Reply-To: ' . gy_contact_encode_address($safeName, $safeEmail),
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    $headerString = implode("\r\n", $headers);
    $body = str_replace(["\r\n", "\r"], "\n", $body);

    $ok = @mail($to, $mailSubject, $body, $headerString, '-f' . $fromEmail);

    if ($ok) {
        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
    }

    if (!empty($config['save_to_storage'])) {
        gy_contact_save_to_storage($safeName, $safeEmail, $safeSubject, $safeMessage);

        return [
            'ok' => true,
            'message' => 'Thank you. Your message was received.',
        ];
    }

    return [
        'ok' => false,
        'message' => 'Could not send email. In cPanel, create the from_email mailbox (e.g. noreply@yourdomain.com).',
    ];
}

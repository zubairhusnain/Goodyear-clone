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
): string {
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

    return $file;
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

/**
 * @return array{ok:bool, mailed:bool, saved:bool, message:string, storage_file?:string}
 */
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

    $mailed = false;
    if (function_exists('mail')) {
        $mailed = @mail($to, $mailSubject, $body, $headerString, '-f' . $fromEmail);
    }

    if ($mailed) {
        return [
            'ok' => true,
            'mailed' => true,
            'saved' => false,
            'message' => 'Thank you. Your message has been sent.',
        ];
    }

    $storageFile = null;
    if (!empty($config['save_to_storage'])) {
        $storageFile = gy_contact_save_to_storage($safeName, $safeEmail, $safeSubject, $safeMessage);
    }

    if ($storageFile !== null) {
        return [
            'ok' => true,
            'mailed' => false,
            'saved' => true,
            'storage_file' => $storageFile,
            'message' => 'Thank you. Your message was received. (Email could not be sent from the server — we saved a copy.)',
        ];
    }

    return [
        'ok' => false,
        'mailed' => false,
        'saved' => false,
        'message' => 'Could not send email. Create mailbox ' . $fromEmail . ' in cPanel → Email Accounts, then try again.',
    ];
}

/** Send a test message; for check-contact-mail.php / CLI only. */
function gy_contact_send_test_mail(): array
{
    if (!gy_contact_form_enabled()) {
        return [
            'ok' => false,
            'mailed' => false,
            'saved' => false,
            'message' => 'Mail is not configured (check recipient and from_email).',
        ];
    }

    return gy_contact_send_mail(
        'Mail Test',
        'mail-test@goodyear.com.pk',
        'Server test',
        'This is an automatic test from gy_contact_send_test_mail() at ' . date('c')
    );
}

function gy_contact_mail_diagnostics(): array
{
    $config = gy_contact_mail_config();
    $storageDir = gy_contact_storage_dir();
    $files = glob($storageDir . '/*.txt') ?: [];

    return [
        'php_mail_function' => function_exists('mail'),
        'sendmail_path' => ini_get('sendmail_path') ?: null,
        'form_enabled' => gy_contact_form_enabled(),
        'recipient' => $config['recipient'] ?? null,
        'from_email' => $config['from_email'] ?? null,
        'local_config' => is_file(__DIR__ . '/contact-mail.local.php'),
        'storage_writable' => is_writable($storageDir) || is_writable(dirname($storageDir)),
        'saved_message_count' => count($files),
        'last_saved_file' => $files !== [] ? basename((string)end($files)) : null,
    ];
}

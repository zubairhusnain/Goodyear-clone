<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/gy-contact-mail.php';

header('Content-Type: application/json; charset=utf-8');

$config = gy_contact_mail_config();

echo json_encode([
    'form_enabled' => gy_contact_form_enabled(),
    'mail_method' => 'php mail()',
    'recipient' => $config['recipient'] ?? null,
    'from_email' => $config['from_email'] ?? null,
    'local_config_exists' => is_file(__DIR__ . '/includes/contact-mail.local.php'),
    'save_to_storage' => !empty($config['save_to_storage']),
    'hint' => !gy_contact_form_enabled()
        ? 'Set recipient and from_email in includes/contact-mail.local.php. from_email must be a real cPanel mailbox on your domain.'
        : 'Submit a test on the contact page, then delete this file.',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

<?php
declare(strict_types=1);

/**
 * Goodyear contact form email settings.
 * Override secrets in contact-mail.local.php (not committed).
 */
return [
    'recipient' => 'zubairhusnain58@gmail.com',
    'from_email' => 'your.email@gmail.com',
    'from_name' => 'Goodyear Contact Form',

    'smtp' => [
        'enabled' => true,
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'encryption' => 'tls',
        'username' => 'your.email@gmail.com',
        'password' => '',
    ],

    // Optional: save a copy when email send fails (form still requires SMTP above).
    'fallback_mail' => false,
    'save_to_storage' => true,
];

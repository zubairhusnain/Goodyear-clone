<?php
declare(strict_types=1);

/**
 * Contact form — PHP mail() only (no Composer).
 * Override in includes/contact-mail.local.php on the server.
 */
return [
    // Where form submissions are delivered
    'recipient' => 'zubairhusnain58@gmail.com',

    // Must exist in cPanel → Email Accounts (same domain as your site)
    'from_email' => 'noreply@goodyear.com.pk',
    'from_name' => 'Goodyear Contact Form',

    // If mail() fails, still accept the message and save a copy on disk
    'save_to_storage' => true,
];

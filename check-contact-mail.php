<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/gy-contact-mail.php';

header('Content-Type: application/json; charset=utf-8');

$runTest = isset($_GET['send_test']) && $_GET['send_test'] === '1';
$out = gy_contact_mail_diagnostics();
$out['mail_method'] = 'php mail()';

if ($runTest) {
    $test = gy_contact_send_test_mail();
    $out['test_send'] = $test;
    $out['interpretation'] = $test['mailed']
        ? 'Email was accepted by the server mail() function. Check the recipient inbox and spam folder.'
        : ($test['saved']
            ? 'mail() failed but the message was saved under storage/contact-messages/. Fix cPanel email (from_email mailbox).'
            : 'mail() failed and nothing was saved. Configure from_email as a real cPanel mailbox.');
} else {
    $out['hint'] = 'Add ?send_test=1 to this URL to send a test email. Delete this file when done.';
}

echo json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

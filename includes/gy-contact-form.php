<?php
declare(strict_types=1);

require_once __DIR__ . '/gy-contact-mail.php';

function gy_contact_form_handle(array $post): array
{
    if (!gy_contact_form_enabled()) {
        return [
            'ok' => false,
            'message' => 'The contact form is temporarily unavailable. Please check back soon.',
            'values' => [],
            'disabled' => true,
        ];
    }

    $values = [
        'username' => trim((string)($post['username'] ?? '')),
        'email' => trim((string)($post['email'] ?? '')),
        'subject' => trim((string)($post['subject'] ?? '')),
        'message' => trim((string)($post['message'] ?? '')),
    ];

    if ($values['username'] === '') {
        return ['ok' => false, 'message' => 'Please enter your name.', 'values' => $values];
    }
    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'Please enter a valid email address.', 'values' => $values];
    }
    if ($values['subject'] === '') {
        return ['ok' => false, 'message' => 'Please enter a subject.', 'values' => $values];
    }
    if ($values['message'] === '') {
        return ['ok' => false, 'message' => 'Please enter your message.', 'values' => $values];
    }
    if (strlen($values['message']) > 3000) {
        return ['ok' => false, 'message' => 'Message is too long (max 3,000 characters).', 'values' => $values];
    }

    if (trim((string)($post['website'] ?? '')) !== '') {
        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.', 'values' => []];
    }

    $result = gy_contact_send_mail(
        $values['username'],
        $values['email'],
        $values['subject'],
        $values['message']
    );

    if ($result['ok']) {
        return ['ok' => true, 'message' => $result['message'], 'values' => []];
    }

    return ['ok' => false, 'message' => $result['message'], 'values' => $values];
}

function gy_contact_h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function gy_contact_form_render(array $state): string
{
    $v = $state['values'] ?? [];
    $ok = !empty($state['ok']);
    $msg = gy_contact_h((string)($state['message'] ?? ''));
    $enabled = gy_contact_form_enabled();
    $disabled = !$enabled;
    $disabledAttr = $disabled ? ' disabled' : '';

    $disabledNotice = $enabled
        ? ''
        : '<div class="gy-contact-alert gy-contact-alert--info" role="status">'
        . 'Form is not configured. Add <code>includes/contact-mail.local.php</code> with recipient and from_email.'
        . '</div>';

    $alert = '';
    if ($msg !== '' && ($enabled || !empty($state['disabled']))) {
        $class = $ok ? 'gy-contact-alert gy-contact-alert--success' : 'gy-contact-alert gy-contact-alert--error';
        $alert = '<div class="' . $class . '" role="status">' . $msg . '</div>';
    }

    $u = gy_contact_h((string)($v['username'] ?? ''));
    $em = gy_contact_h((string)($v['email'] ?? ''));
    $sub = gy_contact_h((string)($v['subject'] ?? ''));
    $mes = gy_contact_h((string)($v['message'] ?? ''));

    $ariaDisabled = $disabled ? 'true' : 'false';

    return <<<HTML
<div class="gy-contact-page">
  <div class="gy-contact-card">
    <header class="gy-contact-card__header">
      <h1 class="gy-contact-card__title">Contact Us</h1>
      <p class="gy-contact-card__lead">Send us a message and we will respond as soon as we can.</p>
    </header>
    {$disabledNotice}
    {$alert}
    <form id="contact-us-email" name="contact-us-email" class="gy-contact-form" method="post" action="" novalidate>
      <fieldset class="gy-contact-fieldset"{$disabledAttr}>
        <div class="gy-contact-field">
          <label for="gy-username">Name</label>
          <input id="gy-username" name="username" type="text" required maxlength="120" autocomplete="name" value="{$u}" placeholder="Your name"{$disabledAttr}>
        </div>
        <div class="gy-contact-field">
          <label for="gy-email">Email</label>
          <input id="gy-email" name="email" type="email" required maxlength="254" autocomplete="email" value="{$em}" placeholder="you@example.com"{$disabledAttr}>
        </div>
        <div class="gy-contact-field">
          <label for="gy-subject">Subject</label>
          <input id="gy-subject" name="subject" type="text" required maxlength="200" value="{$sub}" placeholder="Subject"{$disabledAttr}>
        </div>
        <div class="gy-contact-field">
          <label for="gy-message">Message</label>
          <textarea id="gy-message" name="message" rows="5" maxlength="3000" required placeholder="Your message"{$disabledAttr}>{$mes}</textarea>
          <span class="gy-contact-count" id="gy-message-count" aria-live="polite"></span>
        </div>
        <div class="gy-contact-hp" aria-hidden="true">
          <label for="gy-website">Website</label>
          <input type="text" id="gy-website" name="website" tabindex="-1" autocomplete="off"{$disabledAttr}>
        </div>
        <button type="submit" class="gy-contact-submit" aria-disabled="{$ariaDisabled}"{$disabledAttr}>Send message</button>
      </fieldset>
    </form>
  </div>
</div>
<script>
(function () {
  var ta = document.getElementById('gy-message');
  var count = document.getElementById('gy-message-count');
  if (!ta || !count) return;
  function update() { count.textContent = ta.value.length + '/3000'; }
  ta.addEventListener('input', update);
  update();
})();
</script>
HTML;
}

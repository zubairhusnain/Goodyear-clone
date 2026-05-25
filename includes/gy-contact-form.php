<?php
declare(strict_types=1);

require_once __DIR__ . '/gy-contact-mail.php';

const GY_CONTACT_SUBJECTS = [
    '' => 'Select a subject',
    'Online order' => 'Online order',
    'Tire warranty' => 'Tire warranty',
    'Product information' => 'Product information',
    'Dealer or installer' => 'Dealer or installer',
    'Goodyear credit card' => 'Goodyear credit card',
    'Website or technical issue' => 'Website or technical issue',
    'Other' => 'Other',
];

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
        'firstName' => trim((string)($post['firstName'] ?? '')),
        'lastName' => trim((string)($post['lastName'] ?? '')),
        'email' => trim((string)($post['email'] ?? '')),
        'phone' => trim((string)($post['phone'] ?? '')),
        'subject' => trim((string)($post['subject'] ?? '')),
        'description' => trim((string)($post['description'] ?? '')),
    ];

    if ($values['firstName'] === '') {
        return ['ok' => false, 'message' => 'Please enter your first name.', 'values' => $values];
    }
    if ($values['lastName'] === '') {
        return ['ok' => false, 'message' => 'Please enter your last name.', 'values' => $values];
    }
    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'Please enter a valid email address.', 'values' => $values];
    }
    if ($values['subject'] === '' || !isset(GY_CONTACT_SUBJECTS[$values['subject']])) {
        return ['ok' => false, 'message' => 'Please select a subject.', 'values' => $values];
    }
    if ($values['description'] === '') {
        return ['ok' => false, 'message' => 'Please enter your questions or comments.', 'values' => $values];
    }
    if (strlen($values['description']) > 3000) {
        return ['ok' => false, 'message' => 'Message is too long (max 3,000 characters).', 'values' => $values];
    }

    if (trim((string)($post['website'] ?? '')) !== '') {
        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.', 'values' => []];
    }

    $result = gy_contact_send_mail(
        $values['firstName'],
        $values['lastName'],
        $values['email'],
        $values['phone'],
        $values['subject'],
        $values['description']
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
        . 'Form submissions are temporarily unavailable. Please check back soon.'
        . '</div>';

    $alert = '';
    if ($msg !== '' && ($enabled || !empty($state['disabled']))) {
        $class = $ok ? 'gy-contact-alert gy-contact-alert--success' : 'gy-contact-alert gy-contact-alert--error';
        $alert = '<div class="' . $class . '" role="status">' . $msg . '</div>';
    }

    $subjectOptions = '';
    foreach (GY_CONTACT_SUBJECTS as $value => $label) {
        if ($value === '') {
            continue;
        }
        $selected = (($v['subject'] ?? '') === $value) ? ' selected' : '';
        $subjectOptions .= '<option value="' . gy_contact_h($value) . '"' . $selected . '>'
            . gy_contact_h($label) . '</option>';
    }

    $fn = gy_contact_h((string)($v['firstName'] ?? ''));
    $ln = gy_contact_h((string)($v['lastName'] ?? ''));
    $em = gy_contact_h((string)($v['email'] ?? ''));
    $ph = gy_contact_h((string)($v['phone'] ?? ''));
    $desc = gy_contact_h((string)($v['description'] ?? ''));

    $inputClass = 'w-full paragraph-lg px-2 h-[40px] flex items-center rounded-none text-ui-100 border-b-2 !placeholder:text-type-lighter border-b-ui-100 pb-1.5 !normal-case';

    $ariaDisabled = $disabled ? 'true' : 'false';
    $submitBtnClass = 'w-full sm:w-fit inline-flex justify-center items-center rounded-[calc(var(--border-radius-btn)*1px)] py-spacing-btn-padding-y px-spacing-btn-padding-x gap-2 button-md border-none focus:ring-[3px] focus:ring-inset focus:ring-border-focus';
    if ($disabled) {
        $submitBtnClass .= ' bg-action-disabled-btn !bg-action-disabled-btn pointer-events-none text-action-disabled-disabled cursor-not-allowed';
    } else {
        $submitBtnClass .= ' cursor-pointer text-action-text-btn-primary bg-action-color-primary';
    }

    return <<<HTML
<div class="max-w-screen-xxl m-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 py-8 md:py-12">
  <div class="max-w-[var(--breakpoint-container-max-width)] mx-auto w-full">
    <div class="mb-8">
      <h1 class="heading-lg text-action-color-secondary normal-case">Contact Us</h1>
      <p class="paragraph-md text-action-color-secondary mt-4">Email us using the form below. Please allow 48 hours for a response.</p>
      <p class="paragraph-md text-action-color-secondary mt-2">* Required</p>
    </div>
    {$disabledNotice}
    {$alert}
    <form id="contact-us-email" name="contact-us-email" class="gy-contact-form flex flex-col gap-4" method="post" action="" novalidate>
      <fieldset class="border-0 m-0 p-0 min-w-0"{$disabledAttr}>
        <legend class="subtitle-lg text-action-color-secondary mb-8">Contact Information</legend>
        <div class="grid grid-cols-12 w-full gap-8">
          <div class="col-span-12 sm:col-span-6 gy-contact-field">
            <label class="eyebrow-sm text-ui-standard" for="gy-firstName">First Name *</label>
            <input id="gy-firstName" name="firstName" type="text" class="{$inputClass}" placeholder="First Name" required maxlength="35" value="{$fn}" autocomplete="given-name"{$disabledAttr}>
          </div>
          <div class="col-span-12 sm:col-span-6 gy-contact-field">
            <label class="eyebrow-sm text-ui-standard" for="gy-lastName">Last Name *</label>
            <input id="gy-lastName" name="lastName" type="text" class="{$inputClass}" placeholder="Last Name" required maxlength="35" value="{$ln}" autocomplete="family-name"{$disabledAttr}>
          </div>
          <div class="col-span-12 sm:col-span-6 gy-contact-field">
            <label class="eyebrow-sm text-ui-standard" for="gy-email">Email *</label>
            <input id="gy-email" name="email" type="email" class="{$inputClass}" placeholder="Email" required maxlength="70" value="{$em}" autocomplete="email"{$disabledAttr}>
          </div>
          <div class="col-span-12 sm:col-span-6 gy-contact-field">
            <label class="eyebrow-sm text-ui-standard" for="gy-phone">Phone Number</label>
            <input id="gy-phone" name="phone" type="tel" class="{$inputClass}" placeholder="XXX-XXX-XXXX" maxlength="12" value="{$ph}" autocomplete="tel"{$disabledAttr}>
          </div>
        </div>
        <p class="paragraph-md text-action-color-secondary mt-6 mb-8">
          Goodyear may use your number to contact you about your inquiry. See our
          <a href="../../terms/global-privacy-policy/index.html" class="text-action-text-link-primary link-md">privacy policy</a>.
        </p>
        <legend class="subtitle-lg text-action-color-secondary mb-8 mt-4">Tell us why you are contacting us</legend>
        <div class="grid grid-cols-12 w-full gap-8">
          <div class="col-span-12 gy-contact-field">
            <label class="eyebrow-sm text-ui-standard" for="gy-subject">Subject *</label>
            <select id="gy-subject" name="subject" required class="w-full paragraph-lg px-2 h-[40px] border-b-2 border-b-ui-100 bg-transparent text-ui-100 !normal-case"{$disabledAttr}>
              <option value="">Subject</option>
              {$subjectOptions}
            </select>
          </div>
          <div class="col-span-12 gy-contact-field">
            <label class="paragraph-lg text-ui-standard" for="gy-description">Questions or comments *</label>
            <textarea id="gy-description" name="description" rows="10" maxlength="3000" required
              class="w-full ring-2 p-6 rounded-2xl paragraph-md box-border !normal-case ring-border-medium resize-y min-h-[160px]"
              placeholder="Questions or comments"{$disabledAttr}>{$desc}</textarea>
            <div class="flex justify-end mt-1">
              <span class="subtitle-xs text-action-color-secondary" id="gy-description-count" aria-live="polite"></span>
            </div>
          </div>
        </div>
        <div class="gy-contact-hp" aria-hidden="true">
          <label for="gy-website">Website</label>
          <input type="text" id="gy-website" name="website" tabindex="-1" autocomplete="off"{$disabledAttr}>
        </div>
        <div class="mt-8">
          <button type="submit" class="{$submitBtnClass}" aria-disabled="{$ariaDisabled}"{$disabledAttr}>
            <span class="button__text">SUBMIT</span>
          </button>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<script>
(function () {
  var ta = document.getElementById('gy-description');
  var count = document.getElementById('gy-description-count');
  if (!ta || !count) return;
  function update() {
    count.textContent = ta.value.length + '/3000';
  }
  ta.addEventListener('input', update);
  update();
})();
</script>
HTML;
}

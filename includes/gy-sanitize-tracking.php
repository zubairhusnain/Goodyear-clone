<?php
declare(strict_types=1);

/**
 * Strip marketing / analytics markup from HTML output (safety net after static cleanup).
 */
function gy_strip_tracking_html(string $html): string
{
    $html = preg_replace_callback(
        '~<script>\(self\.__next_s[\s\S]*?</script>\s*~i',
        static function (array $m): string {
            return preg_match(
                '~cookielaw|optimizely|onetrust|Optanon|googletagmanager|google-analytics|crazyegg|signifyd|yottaa|adobedtm|evergage|evgnet~i',
                $m[0]
            ) ? '' : $m[0];
        },
        $html
    ) ?? $html;

    $patterns = [
        '~<link\s[^>]*rel=["\']preload["\'][^>]*(?:cookielaw|optimizely|googletagmanager|crazyegg|signifyd|yottaa|adobedtm|evergage)[^>]*>\s*~i',
        '~<script\b[^>]*(?:googletagmanager|google-analytics|adobedtm|crazyegg|signifyd|yottaa|cloudflareinsights|evergage|evgnet|goodyearmvp)[^>]*>[\s\S]*?</script>\s*~i',
        '~<noscript>\s*<iframe[^>]*googletagmanager[^>]*>[\s\S]*?</iframe>\s*</noscript>\s*~i',
        '~<iframe\b[^>]*\b(?:tmx_tags_iframe|embeddedMessaging)[^>]*>[\s\S]*?</iframe>\s*~i',
    ];

    foreach ($patterns as $pattern) {
        $html = preg_replace($pattern, '', $html) ?? $html;
    }

    return $html;
}

function gy_send_security_headers(): void
{
    if (headers_sent()) {
        return;
    }

    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header(
        'Content-Security-Policy: ' .
        "default-src 'self'; " .
        "script-src 'self' 'unsafe-inline'; " .
        "style-src 'self' 'unsafe-inline' https://use.typekit.net https://p.typekit.net; " .
        "img-src 'self' https: data: blob:; " .
        "font-src 'self' https://use.typekit.net https://p.typekit.net data:; " .
        "connect-src 'self'; " .
        "frame-src 'none'; " .
        "object-src 'none'; " .
        "base-uri 'self'; " .
        "form-action 'self'"
    );
}

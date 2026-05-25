<?php
declare(strict_types=1);

require_once __DIR__ . '/base-url.php';

header('Content-Type: application/json; charset=utf-8');

$sampleScene7 = __DIR__ . '/assets/s7d1.scene7.com/is/image/GoodyearSitesProd';
$knownSamples = [
    'Vehicles-Directory-Image',
    'Homepage-Hero-Image',
    'Wrangler-hero-image',
];
$sampleFile = null;
$scene7ImageCount = 0;

if (is_dir($sampleScene7)) {
    foreach (scandir($sampleScene7) ?: [] as $name) {
        if ($name === '.' || $name === '..' || str_starts_with($name, '.')) {
            continue;
        }
        if (!is_file($sampleScene7 . '/' . $name)) {
            continue;
        }
        $scene7ImageCount++;
        if ($sampleFile === null) {
            $sampleFile = $name;
        }
    }
    foreach ($knownSamples as $known) {
        if (is_file($sampleScene7 . '/' . $known)) {
            $sampleFile = $known;
            break;
        }
    }
}

$assetOk = $sampleFile !== null
    && is_file($sampleScene7 . '/' . $sampleFile)
    && $scene7ImageCount >= 10;
$assetUrl = $sampleFile !== null
    ? GY_BASE_URL . '/assets/s7d1.scene7.com/is/image/GoodyearSitesProd/' . rawurlencode($sampleFile)
    : null;

$basePath = gy_install_base_path();
$wrongBase = $basePath !== '' && gy_install_dir_matches_document_root();

echo json_encode([
    'ok' => $assetOk && !$wrongBase && $scene7ImageCount >= 10,
    'gy_base_url' => GY_BASE_URL,
    'gy_base_path' => $basePath,
    'gy_base_path_should_be' => gy_install_dir_matches_document_root() ? '' : '(subdir — set in gy-config.local.php)',
    'wrong_base_path_for_root_install' => $wrongBase,
    'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? null,
    'install_dir' => __DIR__,
    'install_matches_document_root' => gy_install_dir_matches_document_root(),
    'script_name' => $_SERVER['SCRIPT_NAME'] ?? null,
    'https' => gy_request_is_https(),
    'scene7_image_count' => $scene7ImageCount,
    'scene7_images_ok' => $scene7ImageCount >= 10,
    'sample_scene7_file' => $sampleFile,
    'sample_asset_url' => $assetUrl,
    'sample_asset_exists_on_disk' => $sampleFile !== null && is_file($sampleScene7 . '/' . (string)$sampleFile),
    'upload_layout_ok' => is_file(__DIR__ . '/index.php') && is_dir(__DIR__ . '/assets/s7d1.scene7.com'),
    'test_urls' => [
        'known_hero' => GY_BASE_URL . '/assets/s7d1.scene7.com/is/image/GoodyearSitesProd/Vehicles-Directory-Image',
    ],
    'hint' => $scene7ImageCount < 10
        ? 'Only ' . $scene7ImageCount . ' Scene7 file(s) found (need ~284). Re-upload assets/s7d1.scene7.com/is/image/GoodyearSitesProd/ (~178MB).'
        : ($wrongBase
            ? 'Base path is wrong for public_html root. Set define(\'GY_BASE_PATH\', \'\'); in includes/gy-config.local.php and re-upload.'
            : 'Paths OK. Open test_urls.known_hero in the browser — if it shows a photo, hard-refresh the site (Ctrl+F5).'),
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

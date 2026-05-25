<?php
declare(strict_types=1);

require_once __DIR__ . '/base-url.php';

header('Content-Type: application/json; charset=utf-8');

$sampleScene7 = __DIR__ . '/assets/s7d1.scene7.com/is/image/GoodyearSitesProd';
$sampleFile = null;
if (is_dir($sampleScene7)) {
    foreach (scandir($sampleScene7) ?: [] as $name) {
        if ($name === '.' || $name === '..') {
            continue;
        }
        $sampleFile = $name;
        break;
    }
}

$assetOk = $sampleFile !== null && is_file($sampleScene7 . '/' . $sampleFile);
$assetUrl = $sampleFile !== null
    ? GY_BASE_URL . '/assets/s7d1.scene7.com/is/image/GoodyearSitesProd/' . rawurlencode($sampleFile)
    : null;

echo json_encode([
    'ok' => $assetOk,
    'gy_base_url' => GY_BASE_URL,
    'gy_base_path' => gy_install_base_path(),
    'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? null,
    'script_name' => $_SERVER['SCRIPT_NAME'] ?? null,
    'https' => gy_request_is_https(),
    'sample_scene7_file' => $sampleFile,
    'sample_asset_url' => $assetUrl,
    'sample_asset_exists_on_disk' => $assetOk,
    'hint' => $assetOk
        ? 'Open sample_asset_url in the browser. If it 404s, fix GY_BASE_PATH in includes/gy-config.local.php or .htaccess SetEnv.'
        : 'Upload the full assets/ folder (~195MB), especially assets/s7d1.scene7.com/.',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

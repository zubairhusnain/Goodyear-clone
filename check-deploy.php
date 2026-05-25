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

$basePath = gy_install_base_path();
$wrongBase = $basePath !== '' && gy_install_dir_matches_document_root();

echo json_encode([
    'ok' => $assetOk && !$wrongBase,
    'gy_base_url' => GY_BASE_URL,
    'gy_base_path' => $basePath,
    'gy_base_path_should_be' => gy_install_dir_matches_document_root() ? '' : '(subdir — set in gy-config.local.php)',
    'wrong_base_path_for_root_install' => $wrongBase,
    'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? null,
    'install_dir' => __DIR__,
    'install_matches_document_root' => gy_install_dir_matches_document_root(),
    'script_name' => $_SERVER['SCRIPT_NAME'] ?? null,
    'https' => gy_request_is_https(),
    'sample_scene7_file' => $sampleFile,
    'sample_asset_url' => $assetUrl,
    'sample_asset_exists_on_disk' => $assetOk,
    'upload_layout_ok' => is_file(__DIR__ . '/index.php') && is_dir(__DIR__ . '/assets/s7d1.scene7.com'),
    'hint' => !$assetOk
        ? 'Missing assets on server. Upload the full assets/ folder (~195MB), especially assets/s7d1.scene7.com/.'
        : ($wrongBase
            ? 'Base path is wrong for public_html root. Set define(\'GY_BASE_PATH\', \'\'); in includes/gy-config.local.php and re-upload.'
            : 'Open sample_asset_url. If it loads but the homepage does not, hard-refresh (Ctrl+F5) and check View Source <base href>.'),
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

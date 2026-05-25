# Deploying on cPanel

## Upload

1. Upload the **entire** `goodyear_offline` folder (or its contents into the domain document root).
2. You **must** include the **`assets/`** tree (~195MB). Most tire photos live under:
   `assets/s7d1.scene7.com/is/image/GoodyearSitesProd/`
3. Run `composer install --no-dev` on the server (or upload `vendor/` from a local install).

## Document root (pick one)

| Setup | URL | `GY_BASE_PATH` |
|--------|-----|----------------|
| Domain root points at `goodyear_offline/` | `https://example.com/` | `''` (empty) |
| Site in `public_html/goodyear_offline/` | `https://example.com/goodyear_offline/` | `/goodyear_offline` |

Wrong base path is the most common reason **images work on localhost but not on cPanel**.

## Fix base path

1. Open `https://your-domain/check-deploy.php` — check `gy_base_url` and `sample_asset_url`.
2. If `sample_asset_url` 404s but the file exists on disk, copy `includes/gy-config.local.php.example` to `includes/gy-config.local.php` and set:

```php
define('GY_BASE_PATH', '/your-subfolder');  // or '' for domain root
```

Or in `.htaccess` (inside `goodyear_offline`):

```apache
SetEnv GY_BASE_PATH /your-subfolder
```

3. If the site is in a subdirectory, uncomment **`RewriteBase`** in `.htaccess` to the same path.

## Verify images

- View page source: `<base href="https://your-domain/.../">` must match where the site is hosted.
- Open one image URL directly, e.g.  
  `https://your-domain/assets/s7d1.scene7.com/is/image/GoodyearSitesProd/Vehicles-Directory-Image`
- Delete `check-deploy.php` after debugging.

## Permissions

Folders `755`, files `644`. Ensure `assets/` uploaded completely (FTP/cPanel sometimes skip large folders).

# Deploying on cPanel

## Upload (public_html root — most common)

Your `public_html` folder should look like this (files **directly** inside, not inside another folder):

```
public_html/
  index.php
  router.php
  .htaccess
  assets/
  images/
  pages/
  includes/
```

**Wrong** (images break if you open `https://example.com/`):

```
public_html/
  goodyear_offline/    ← extra folder
    index.php
    assets/
```

If you already uploaded the `goodyear_offline` folder, either move everything up one level into `public_html`, or use the site at `https://example.com/goodyear_offline/` and set `GY_BASE_PATH` to `/goodyear_offline`.

1. Upload the **entire** site including **`assets/`** (~195MB). Most photos are in:
   `assets/s7d1.scene7.com/is/image/GoodyearSitesProd/`
2. Upload `includes/gy-config.local.php` with `define('GY_BASE_PATH', '');` for root installs.
3. Run `composer install --no-dev` on the server (or upload `vendor/`).

## Document root (pick one)

| Setup | URL | `GY_BASE_PATH` |
|--------|-----|----------------|
| Files in `public_html/` (root) | `https://example.com/` | `''` (empty) |
| Files in `public_html/goodyear_offline/` | `https://example.com/goodyear_offline/` | `/goodyear_offline` |

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

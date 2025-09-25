# Padhal Sneakers (WordPress)

Environment: local WordPress running under XAMPP (Apache + MySQL).

This repository contains the WordPress core + the custom theme `padhal-sneakers-theme` and bespoke code (AJAX stock manager, etc.).

## Prerequisites
- XAMPP for Windows (Apache + MySQL/MariaDB + PHP)
- Git
- A database dump of the project (SQL) — will be shared in this repo as a separate push or via release/attachment

## Folder structure
- `wp-content/themes/padhal-sneakers-theme/` — custom theme code (PHP, JS, CSS)
- `wp-content/uploads/` — user uploads (ignored by Git)
- `wp-config.php` — local credentials (ignored by Git). Use `wp-config-sample.php` as a base.

## Getting started (contributor)
1) Clone into your XAMPP web root

```
cd C:\xampp\htdocs
# choose where to clone; the current structure is htdocs\padhal-sneakers\Padhal-sneakers
mkdir padhal-sneakers
cd padhal-sneakers
git clone https://github.com/Projectsul22/Padhal-sneakers-frontend.git Padhal-sneakers
```

The site will be available at:
```
http://localhost/padhal-sneakers/Padhal-sneakers/
```

2) Create database and import dump
- Start XAMPP (Apache + MySQL)
- Create a database (e.g. `padhal_sneakers`)
- Import the SQL dump provided by the repository owner (via repo or attachment)

3) Create your local `wp-config.php`
- Copy `wp-config-sample.php` to `wp-config.php`
- Edit DB credentials to match your local XAMPP:
  - DB_NAME: `padhal_sneakers`
  - DB_USER: `root`
  - DB_PASSWORD: `` (empty by default on XAMPP) or your local password
  - DB_HOST: `localhost`
- Make sure `WP_HOME` and `WP_SITEURL` point to `http://localhost/padhal-sneakers/Padhal-sneakers/` or set them in the DB (table `wp_options`, `siteurl` and `home`).

4) Start the site
- Visit `http://localhost/padhal-sneakers/Padhal-sneakers/`
- Log in at `http://localhost/padhal-sneakers/Padhal-sneakers/wp-admin/`

## Development notes
- The custom “Stock” endpoint appears under My Account > Stock, with AJAX handlers:
  - `ps_stock_query` and `ps_stock_update`
- Only users with roles/capabilities `manage_woocommerce`, `edit_products`, or custom `vendor` can access it.
- Enqueue to `wp-content/themes/padhal-sneakers-theme/assets/js/ps-stock.js`

## First-time setup (repo owner)
If this folder has not been committed yet, run these once from `C:\xampp\htdocs\padhal-sneakers\Padhal-sneakers`:

```
# Initialize and set main branch
git init
git add .
# If you want to avoid committing uploads and secrets, ensure .gitignore is in place before the add
# Then continue
git commit -m "chore: initial commit (WordPress + custom theme)"
git branch -M main

# Add remote and push
git remote add origin https://github.com/Projectsul22/Padhal-sneakers-frontend.git
git push -u origin main
```

## What is ignored (important)
- `wp-content/uploads/` (media)
- `wp-content/cache/`, `wp-content/upgrade/`
- `wp-config.php` (local secrets)
- OS/editor artifacts (`.DS_Store`, `Thumbs.db`, etc.)

If you need to share specific media/libraries, include them explicitly (e.g., in a separate folder) or provide download instructions.

# Rental Portal Web MVP

This repository now includes a Laravel-ready folder structure plus the static web dashboard wireframe.

## Current runnable MVP

The current UI is static and can be served from `public/`:

```bash
php -S 127.0.0.1:8000 -t public
```

Open `http://127.0.0.1:8000` to view the rental portal dashboard.

## Laravel-ready structure

The expected Laravel folders are present:

- `app/` for controllers and future application logic
- `bootstrap/` for framework bootstrapping
- `config/` for configuration
- `database/` for migrations and seeders
- `public/` for the web entry point and compiled/static assets
- `resources/` for Blade views and future frontend source files
- `routes/` for web/API routes
- `storage/` for generated files, logs, cache, and uploads
- `tests/` for feature and unit tests

`vendor/` is intentionally not committed. It should be generated with Composer in a real Laravel install.

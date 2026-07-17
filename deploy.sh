#!/usr/bin/env bash
set -euo pipefail

php -l public/index.php
php -S 127.0.0.1:8000 -t public

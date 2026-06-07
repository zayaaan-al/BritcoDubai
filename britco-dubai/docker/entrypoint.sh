@'
#!/bin/bash

# Create .env from environment variables
cp /var/www/.env.example /var/www/.env

# Inject env vars into .env
php artisan key:generate --force
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
php-fpm -D
nginx -g "daemon off;"
'@ | Set-Content docker/entrypoint.sh -NoNewline
#!/bin/sh

# Run database migrations
php artisan migrate --force

# Cache Laravel files
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM
php-fpm -D

# Start Nginx in foreground
nginx -g "daemon off;"
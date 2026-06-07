#!/bin/sh

php artisan config:clear
php artisan cache:clear

php artisan migrate --force

php artisan config:cache

php-fpm -D
nginx -g "daemon off;"
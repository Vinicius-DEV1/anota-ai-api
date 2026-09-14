#!/bin/sh
set -e

#Run database migrations for production 
php artisan migrate --force

# Cache routes and configuration for production perfomance 
php artisan config:cache
php artisan route:cache

# Start Nginx and PHP-FPM managed by supervisord
exec /usr/bin/supervisord -n -c /etc/supervisord.conf 
#!/bin/bash
set -e

echo ">>> Running database migrations..."
php artisan migrate --force || echo "Migration failed or already up to date"

echo ">>> Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ">>> Creating storage link..."
if [ ! -d "public/storage" ]; then
    php artisan storage:link || true
else
    echo "Storage link already exists. Skipping..."
fi

# Railway sets a dynamic PORT environment variable
# Apache must listen on this port instead of the default 80
if [ ! -z "$PORT" ]; then
    echo ">>> Configuring Apache to listen on port $PORT..."
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf
fi

echo ">>> Enforcing single Apache MPM (prefork)..."
rm -f /etc/apache2/mods-enabled/mpm_*.load
rm -f /etc/apache2/mods-enabled/mpm_*.conf
a2enmod mpm_prefork

echo ">>> Fixing storage permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

echo ">>> Verifying Apache modules..."
apachectl -M || true

echo ">>> Starting Apache..."
apache2-foreground

#!/bin/bash
echo Fixing permissions...
chown -R www-data:www-data /var/www/html/wp-content/
chmod 777 -R /var/www/html/wp-content/
docker-entrypoint.sh apache2-foreground
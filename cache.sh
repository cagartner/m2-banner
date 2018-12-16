#!/usr/bin/env bash
docker-compose exec --user www-data magento /var/www/html/bin/magento cache:$@
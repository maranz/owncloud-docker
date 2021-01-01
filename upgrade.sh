#!/bin/bash

docker-compose exec owncloud occ maintenance:mode --on

docker-compose exec db backup

docker-compose down

sed -i "s/^OWNCLOUD_VERSION=.*$/OWNCLOUD_VERSION=$1/" .env

cat .env

docker-compose up -d
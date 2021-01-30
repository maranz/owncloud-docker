#!/bin/bash
echo "Starting backup owncloud"

docker-compose stop

sudo rsync -r /media/hd2/docker.container/owncloud/document/files/ /media/hd1/owncloud/document/
sudo rsync -r /media/hd2/docker.container/owncloud/mysql/ /media/hd1/owncloud/mysql/

docker-compose start

echo "done!"
# owncloud-docker

## Documentation
[Official Site](https://doc.owncloud.com/server/admin_manual/instllation/docker/)

## Upgrading

* Set maintenance owncloud
```
docker-compose exec owncloud occ maintenance:mode --on
```

* Backup database
```
docker-compose exec db backup
```

* Shutdown 
```
docker-compose down
```

* Set new version
```
sed -i 's/^OWNCLOUD_VERSION=.*$/OWNCLOUD_VERSION=<newVersion>/' /compose/*/.env
```

* check file .env
```
cat .env
```

* Start
```
docker-compose up -d
```

* check start
```
docker-compose logs --timestamp owncloud
```

## NGINX

## OCC
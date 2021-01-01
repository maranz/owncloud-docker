**Set maintenance owncloud**
```
docker-compose exec owncloud occ maintenance:mode --on
```

**Backup database**
```
docker-compose exec db backup
```

**Shutdown** 
```
docker-compose down
```

**Set new version**
```
sed -i 's/^OWNCLOUD_VERSION=.*$/OWNCLOUD_VERSION=<newVersion>/' .env
```

**check file .env**
```
cat .env
```

**Start**
```
docker-compose up -d
```

**check start**
```
docker-compose logs --timestamp owncloud
```
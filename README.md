# owncloud-docker

## Documentation
[Official Site](https://doc.owncloud.com/server/admin_manual/instllation/docker/)

## Upgrading

Script

```
./upgrade.sh <Versione>
```

Example

```
./upgrade.sh 10.6
```

Manual mode 

[documentation](documentation/upgrade.md)



## NGINX

/etc/nginx/sites-available/default

```
location /owncloud/ {
    proxy_set_header        X-Forwarded-Proto $scheme;
    proxy_set_header        Host              $http_host;
    proxy_set_header        X-Real-IP         $remote_addr;
    proxy_set_header        X-Forwarded-For   $proxy_add_x_forwarded_for;
    add_header		        Front-End-Https   on;
    proxy_set_header        X-Frame-Options   SAMEORIGIN;
    
    proxy_pass		http://192.168.178.8:9260/;
}
```

## OCC
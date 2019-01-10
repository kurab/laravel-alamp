# Laravel with LAMP

## Description

- AmazonLinux
- Apach 2.4
- PHP 7.2
- MySQL 5.7
- Laravle: 5.7

## Installation

change database, user, password on docker-compose.yml at first.
.env as well

```
$ docker-compose build
$ docker-compose up -d
```

### on local machine

```
$ chmod -R 777 ./storage
$ chmod -R 777 ./bootstrap/cache
```
### on webserver container

```
# chmod 777 /var/log
# cd /var/cache/httpd && mkdir data && chmod 777 data
# chmod 777 /var/log/httpd

# cd /var/www/html
# php artisan migrate
```

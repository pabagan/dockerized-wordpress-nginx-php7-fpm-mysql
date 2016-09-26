# WordPress with nginx, php7-fpm, MySQL and PhpMyAdmin
Built using Oficial images:
* [Nginx](https://hub.docker.com/_/nginx/).
* [PHP](https://hub.docker.com/_/mysql/) altered to install `docker-php-ext-install pdo pdo_mysql mysqli` (check `/php` folder).
* [MySQL](https://hub.docker.com/_/php/).
* [PHPMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/).

## Build steps
* Change `.env-demo` to `.env` and set values.
```bash
#
# ENVIROMENT_VARIABLES

# nginx
CONTAINER_NGINX=nginx

# php
CONTAINER_PHP=php7-fpm

# app data 
CONTAINER_APP_DATA=data-volume

# mysql
CONTAINER_MYSQL=mysql
CONTAINER_MYSQL=mysql-data

MYSQL_ROOT_PASSWORD=secret
MYSQL_DATABASE=db
MYSQL_USER=user
MYSQL_PASSWORD=pwd
```

* Run `docker-compose up` (needs [Docker Compose](https://docs.docker.com/compose/) installed).

## Once running
* Go to your [http://localhost/](http://localhost/) and start configurate WordPress.
* PhpMyAdmin at [http://localhost:8080/](http://localhost:8080/).

## Requirements
* [Docker Engine](https://docs.docker.com/installation/).
* [Docker Compose](https://docs.docker.com/compose/).
* [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only).

## Credit
Tried to deal with persistent as [osteel's blog](http://tech.osteel.me/posts/2015/12/18/from-vagrant-to-docker-how-to-use-docker-for-local-web-development.html) friends tells to test benefits (looking forward to hear any opinions related).
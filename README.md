# WordPress with nginx, php7-fpm, MySQL and PhpMyAdmin
Built using Oficial images:
* [Nginx](https://hub.docker.com/_/nginx/).
* [PHP](https://hub.docker.com/_/php/) altered to install `docker-php-ext-install pdo pdo_mysql mysqli` (check `/php` folder).
* [MySQL](https://hub.docker.com/_/mysql/).
* [PHPMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/).

## Environment variables
* Rename `.env-demo` to `.env` and set environment variables.

```bash
# APP Name
APP=appname

# Set persistent directories for 
# the database and WordPress.
PERSISTENT_APP=./wordpress
PERSISTENT_DB=./db/mysql

# mysql
MYSQL_HOST=mysql
MYSQL_ROOT_PASSWORD=pwd
MYSQL_DATABASE=db
MYSQL_USER=user
MYSQL_PASSWORD=secret
```

## Get WordPress
Download [WordPress](https://wordpress.org/download/) into the main folder. Can change name and update `PERSISTENT_APP` value.

## Run Docker
* Run `docker-compose up` (needs [Docker Compose](https://docs.docker.com/compose/) installed).

## Once running
* Go to your [http://0.0.0.0/](http://0.0.0.0/) and start configurate WordPress.
* PhpMyAdmin at [http://0.0.0.0:8080/](http://0.0.0.0:8080/).

## Requirements
* [Docker Engine](https://docs.docker.com/installation/).
* [Docker Compose](https://docs.docker.com/compose/).
* [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only).

## Credit
Tried to deal with persistent as [osteel's blog](http://tech.osteel.me/posts/2015/12/18/from-vagrant-to-docker-how-to-use-docker-for-local-web-development.html) friends tells to test benefits (looking forward to hear any opinions related).
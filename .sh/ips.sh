echo "Nginx: "
docker inspect nginx | grep IPAddress
echo "php7-fpm: "
docker inspect php7-fpm | grep IPAddress
echo "mysql: "
docker inspect mysql | grep IPAddress
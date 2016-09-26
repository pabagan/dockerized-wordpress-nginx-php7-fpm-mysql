# Show docker container IPs
echo "Nginx: "
docker inspect nginx
echo "php7-fpm: "
docker inspect php7-fpm
echo "mysql: "
docker inspect mysql
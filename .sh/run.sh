# Start and log into container
sudo service docker restart 
sudo docker-compose up -d
sudo docker exec -i -t nginx bash

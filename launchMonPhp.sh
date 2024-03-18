source Dockerfiles/.env

docker build -t mon_php --build-arg userName=$userName --build-arg userEmail=$userEmail -f Dockerfiles/php_debian.docker Dockerfiles/

docker run -d --rm -v ${PWD}:/app -p 8888:52080 mon_php  php -S 0.0.0.0:52080

echo "URL : http://localhost:8888"
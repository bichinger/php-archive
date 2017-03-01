#!/usr/bin/env bash

# cleanup old containers
docker rm -f php-archive-tests &> /dev/null
# start test containers
docker run -d --name php-archive-tests -p8888:80 -v ${PWD}:/var/www/app/html  yappabe/apache-php:5.2
# execute t+phpunit tests
docker exec -it php-archive-tests /var/www/app/html/tests/run_phpunit.sh
# kill test container
docker rm -f php-archive-tests &> /dev/null
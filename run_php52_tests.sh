#!/usr/bin/env bash

# check if vendor files exists
if [ ! -d $"{PWD}/vendor" ]; then
    composer install
fi


# cleanup old containers
echo ""
echo "> Cleanup old testcontainer..."
docker rm -f php-archive-tests &> /dev/null
# start test containers
echo ""
echo "> Starting testcontainer..."
docker run -d --name php-archive-tests -p8888:80 -v ${PWD}:/var/www/app/html  yappabe/apache-php:5.2
# execute t+phpunit tests
echo ""
echo "> Excuting tests... "
docker exec -it php-archive-tests /var/www/app/html/tests/run_phpunit.sh
# kill test container
echo ""
echo "> Remove testcontainer..."
docker rm -f php-archive-tests &> /dev/null

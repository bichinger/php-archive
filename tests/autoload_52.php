<?php

    function addIncludePath($path){
        set_include_path(get_include_path() . PATH_SEPARATOR . $path);
    }
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/php-file-iterator');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/php-code-coverage');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/php-timer');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/php-text-template');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/php-token-stream');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/phpunit-mock-objects-php52');
    addIncludePath(dirname(__FILE__).'/../vendor/phpunit/phpunit-php52');

    require(dirname(__FILE__)."/../vendor/phpunit/phpunit-php52/PHPUnit/Autoload.php");
    require(dirname(__FILE__)."/../src/Archive.php");
    require(dirname(__FILE__)."/../src/FileInfo.php");
    require(dirname(__FILE__)."/../src/Tar.php");
    require(dirname(__FILE__)."/../src/Zip.php");

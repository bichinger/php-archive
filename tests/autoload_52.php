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
    require(dirname(__FILE__)."/../src/SplitbrainArchive.php");
    require(dirname(__FILE__)."/../src/SplitbrainFileInfo.php");
    require(dirname(__FILE__)."/../src/SplitbrainTar.php");
    require(dirname(__FILE__)."/../src/SplitbrainZip.php");

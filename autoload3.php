<?php

use MyClasses\EmailValidator;

function __autoload( $className ) {
    $filename = realpath(__DIR__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require_once("$filename");
}


$mailValidator= new EmailValidator();
echo $mailValidator->WhoAmI() . "\n";

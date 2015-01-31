<?php

function __autoload( $className ) {
    require_once(__DIR__ . DIRECTORY_SEPARATOR . 'MyClasses' . DIRECTORY_SEPARATOR . $className . '.php');
}

$urlValidator= new UrlValidator();
echo $urlValidator->WhoAmI() . "\n";
<?php
use MyClasses\EmailValidator;

require_once(__DIR__ . DIRECTORY_SEPARATOR .'MyClasses/EmailValidator.php');

$mailValidator = new EmailValidator();
echo $mailValidator->WhoAmI() . "\n";
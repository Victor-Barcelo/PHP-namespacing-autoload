<?php
use App\Lib2;

require_once('lib1.php');
require_once('lib2.php');

//header('Content-type: text/plain');
echo Lib2\MYCONST . "\n";
echo Lib2\MyFunction() . "\n";
echo Lib2\MyClass::WhoAmI() . "\n";
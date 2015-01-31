<?php
namespace App\Lib1;

require_once('lib1.php');
require_once('lib2.php');

echo MYCONST . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
?>
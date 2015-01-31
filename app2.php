<?php
namespace App\Namespace1;

require_once('namespacing-1.php');
require_once('namespacing-2.php');


echo CONSTANT . "\n";
echo \App\Namespace2\CONSTANT . "\n";

echo NS1Function() . "\n";
echo \App\Namespace2\NS2Function() . "\n";

echo NS1Class::NS1ClassMethod() . "\n";
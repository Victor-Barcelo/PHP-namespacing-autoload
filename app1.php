<?php
require_once('namespacing-1.php');
require_once('namespacing-2.php');

echo \App\Namespace1\CONSTANT . "\n";
echo \App\Namespace2\CONSTANT . "\n";

echo \App\Namespace1\NS1Function() . "\n";
echo \App\Namespace2\NS2Function() . "\n";

echo \App\Namespace1\NS1Class::NS1ClassMethod() . "\n";
echo \App\Namespace2\NS2Class::NS2appClassMethod() . "\n";

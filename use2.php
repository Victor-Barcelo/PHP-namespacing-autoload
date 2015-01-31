<?php

use App\Namespace1 as ns1;
use App\Namespace2\NS2Class as Ns2cls;

require_once('namespacing-1.php');
require_once('namespacing-2.php');

echo ns1\CONSTANT . "\n";

echo Ns2cls::NS2ClassMethod() . "\n";
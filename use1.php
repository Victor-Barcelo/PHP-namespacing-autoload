<?php
namespace App\Namespace3;
use App\Namespace1;

require_once('namespacing-1.php');

const CONSTANT = 'App\Namespace3';

function NS3Function() {
    return __FUNCTION__;
}

echo Namespace1\CONSTANT . "\n";
echo CONSTANT . "\n";
echo Namespace1\NS1Function() . "\n";
echo NS3Function() . "\n";
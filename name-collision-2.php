<?php

require_once('name-collision-1.php');

$var = 'Variable declared in name-collision-2.php';

function foo(){
    echo 'Function declared in name-collision-2.php'  . "\n";
};

echo $var . "\n";
foo();
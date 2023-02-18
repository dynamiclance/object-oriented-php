<?php

require 'first.php';
require 'test.php';

function show() {
    echo 'i am index function';
}


// $obj1 = new test\product;
$obj2 = new first\product;

first\show();
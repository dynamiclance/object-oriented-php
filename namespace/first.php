<?php 

namespace first;

class product {
    public function __construct() {
        // echo 'this is product class' . '<br>';

        $test = new \test\product;
    }
}

function show() {
    echo 'i am namespace first function';
}

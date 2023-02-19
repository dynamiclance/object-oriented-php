<?php 

class abc {
    public function first() {
        echo 'this is first function';
        return $this;
    }

    public function second() {
        echo 'this is second function';
        return $this;
    }

    public function third() {
        echo 'this is third function';
        return $this;
    }
}


$test = new abc();
$test->first()->second()->third();
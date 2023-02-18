<?php

class base {
    protected static $name = "Dynamic Lance";

    public function show() {
        echo static::$name;
    }
}

class derived extends base {
    protected static $name = "JS developer";
}


$test = new derived('dfghdfhd');
$test->show();

?>
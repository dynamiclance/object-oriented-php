<?php 

class base{
    public static $name = "sajib Khan";

    function __construct($n) {
        self::$name = $n;
    }

    public static function show() {
        return self::$name;
    }

}

// echo base::show();

$test = new base('sjsffghsd');
$test->show()


?>
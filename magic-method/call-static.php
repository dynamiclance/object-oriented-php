<?php 

class student {

    private static function hello() {
        echo "this is static hello function";
    }

    public static function __callStatic($method, $arguments)
    {
        if(method_exists(__class__, $method)) {
            call_user_func_array([__class__, $method], $arguments);
        } else {
            echo "method does not exist: $method";
        }
    }
}

student::hello();
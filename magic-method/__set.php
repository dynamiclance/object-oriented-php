<?php 

class student {
    private $name;

    public function show() {
        echo $this->name;
    }

    public function __get($property) {
        echo "You are trying to access non existing : ($property)";
    }

    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "property doesn't exist: $property";
        }
    }
}


$test = new student();
$test->name = "Dynamic Lance";
$test->show();
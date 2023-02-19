<?php 

class abc {
    private $data = ['name' => "dynamic Lnace", 'course' => "javascript"];

    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            echo "The array key ($key) is not defined";
        }
    }
}

$test = new abc();
echo $test->name;
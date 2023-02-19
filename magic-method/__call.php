<?php 

class person {
    private $first_name;
    private $last_name;

    private function setName($fname, $lname) {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args) {
        if(method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo "method does not exist : $method";
        }
    }
}


$test = new person();
$test->setName('dynamic','lance');

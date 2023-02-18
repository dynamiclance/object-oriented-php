<?php 


abstract class parentClass{

    abstract protected function cal($a, $b);
}

class childClass extends parentClass {

    public function cal($a, $b) {
        return $a + $b;
    }
}

$test = new childClass();
echo $test->cal(10, 20);
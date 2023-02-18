<?php 

interface parent1 {
    function sum($a, $b);
}

interface parent2 {
    function sub($c, $d);
}

class childClass implements parent1,parent2 {

    public function sum($a,$b) {
        echo 'Summation is ' . $a + $b . '<br>';
    }

    public function sub($a,$b) {
        echo 'Subtraction is ' . $a - $b . '<br>';
    }


}


$test = new childClass();

$test->sum(10, 15);
$test->sub(10, 16);

?>
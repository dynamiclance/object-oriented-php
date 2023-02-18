<?php

class person {
    public $name;
    public $age;
    
    function __construct($name = 'sk', $age = '24')
    {
        $this->name = $name;
        $this->age = $age;
    }
    

    function fullName() {
        return $this->name . ' is ' . $this->age . ' years old ';
    }
 
}

$person1 = new person('sajib khan', 25);
$person2 = new person('nayeem parvez', 25);

echo $person1->fullName() . '<br>';
echo $person2->fullName();


?>
<?php

class Employee {
    public $name;
    public $designation;
    public $salary;

    function __construct($n, $d, $s)
    {
        $this->name = $n;
        $this->designation = $d;
        $this->salary = $s;
    }


    function info() {
       echo 'Employee Profile' . '<br>';
       echo 'Employee Name: ' . $this->name  . '<br>';
       echo 'Employee Designation: ' . $this->designation  . '<br>';
       echo 'Employee Salary: ' . $this->salary  . '<br>';
    }
}


class manager extends Employee {

    public $tc = 1000;
    public $oc = 2000;
    public $totalSalary;
    

    function info() {
        $this->totalSalary = $this->salary + $this->tc + $this->oc;

        echo 'Manager Profile' . '<br>';
        echo 'Manger Name: ' . $this->name  . '<br>';
        echo 'Manager Designation: ' . $this->designation  . '<br>';
        echo 'Manger Salary: ' . $this->totalSalary  . '<br>';
     }
}

$manager1 = new manager('sajib khan', 'project manager', 14000);
$employee1 = new Employee('Diego', 'software developer', 1200 );
echo $manager1->info() . "<br>";
echo $employee1->info();

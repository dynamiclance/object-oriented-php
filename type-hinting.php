<?php 


class school {
    public function getNames($names) {
        foreach($names->names() as $name) {
            echo $name . '<br>';
        }
    }
}

class student {
    public function names() {
        return ['sk', 'nk', 'dk'];
    }
}


$stu = new student();
$sch = new school();


$sch->getNames($stu);
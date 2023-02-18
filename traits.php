<?php 

trait hello {
    public function sayHello() {
        echo 'Hello from sajib' . '<br>';
    }

    public function sayHi() {
        echo 'Hi from Dynamic Lance' . '<br>';
    }
}


trait bye {
    public function sayBye() {
        echo 'Please say good bye ' . '<br>';
    }
}

class base {
    use hello, bye;
}

class base2 {
    use hello,bye;
}

$test = new base();
$test2 = new base2();

$test ->sayHello();
$test ->sayHi();
$test ->sayBye();

$test2 ->sayHello();
$test2 ->sayBye();




?>
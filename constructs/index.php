<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\06\\";
require_once $basePath . "functions.php";

class Person {

    public $name;

    public function __construct($name) {
        $this->$name;
    }

    private function password() {
        return 'hello world';
    }
}

$method = new \ReflectionMethod(Person::class, 'password');
$method->setAccessible(true);

$person = new Person('Bob');

dd($method->invoke($person));

<?php 

require 'functions.php';

// require 'router.php';

//connect to our MySQL database

class Person {
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . ' ' . 'is breathing!';
    }
}

$person = new Person();


$person->name = 'Jack Boer';
$person->age = 30;

$person->breathe();
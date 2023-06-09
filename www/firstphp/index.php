<?php

$heading = "Home";

//dump and die function
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// die();

// This function work similarly as the above dump code

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

echo $_SERVER['REQUEST_URI'];

require 'views/index.view.php';

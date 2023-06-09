<?php

$heading = "Home";

//dump and die
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

dd($_SERVER);

require 'views/index.view.php';

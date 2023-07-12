<?php

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

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status= Response::FORBIDDEN) {
    if (! $condition){
        abort($status);
    }
}
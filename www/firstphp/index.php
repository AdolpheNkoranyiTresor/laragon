<?php 

require 'functions.php';

// require 'router.php';

//connect to our MySQL database

// Created a prepared statement to fetch the data in test that has an id of 1. Then, experimented with calling fetch() instead of fetchAll()

$dsn = "mysql:host=localhost;port=3306;user=root;dbname=firstphp;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * From test WHERE id = 1");
$statement->execute();

$test = $statement->fetch(PDO::FETCH_ASSOC);

    echo "<li>" . $test['user_name'] . " " . $test['email'] . "</li>";
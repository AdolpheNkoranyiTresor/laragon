<?php 

require 'functions.php';

// require 'router.php';

//connect to our MySQL database

$dsn = "mysql:host=localhost;port=3306;user=root;dbname=firstphp;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * From test;");
$statement->execute();

$test = $statement->fetchAll(PDO::FETCH_ASSOC );

foreach ($test as $result){
    echo "<li>" . $result['user_name'] . " " . $result['email'] . "</li>";
}
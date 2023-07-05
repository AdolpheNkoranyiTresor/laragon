<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

$config = include('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

//The commented code is the otherway to declare this query below using a key
//$query = "SELECT * From test WHERE id = :id";
// $test = $db->query($query, [':id' => $id'])->fetch();

$query = "SELECT * From test WHERE id = ?";

$test = $db->query($query, [$id])->fetch();

dd($test);

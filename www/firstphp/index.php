<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

$config = include('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

//There are two ways to wrap up the user query string, you can either use the ? or a :id... 

$query = "SELECT * From test WHERE id = ?";

$test = $db->query($query, [$id])->fetch();

dd($test);

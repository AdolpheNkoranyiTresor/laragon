<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

$config = include('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * From test WHERE id = {$id}";

$test = $db->query($query)->fetch();

dd($test);

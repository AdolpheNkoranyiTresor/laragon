<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

$config = include('config.php');

$db = new Database($config['database']);
$test = $db->query("SELECT * From test;")->fetchALL();

dd($test);

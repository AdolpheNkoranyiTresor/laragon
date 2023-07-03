<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

$db = new Database();
$test = $db->query("SELECT * From test;")->fetchALL(PDO::FETCH_ASSOC);

dd($test);

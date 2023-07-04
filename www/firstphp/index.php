<?php 

require 'functions.php';

// require 'router.php';

include 'Database.php';

 $config = [
                'host' => 'localhost',
                'port' => '3306',
                'dbname' => 'firstphp',
                'charset' => 'utf8mb4'
            ];

$db = new Database($config);
$test = $db->query("SELECT * From test;")->fetchALL();

dd($test);

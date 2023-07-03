<?php 

require 'functions.php';

// require 'router.php';

//connect to the database, execute a query.

class Database {
    public function query()
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=firstphp;charset=utf8mb4";
        $pdo = new PDO($dsn);

        $statement = $pdo->prepare("SELECT * From test;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC );
    }
}

$db = new Database();
$test = $db->query();


foreach ($test as $result){
    echo "<li>" . $result['user_name'] . " " . $result['email'] . "</li>";
}
<?php 

require 'functions.php';

// require 'router.php';

//connect to the database, execute a query.

class Database {
    public function query($query)
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=firstphp;charset=utf8mb4";
        $pdo = new PDO($dsn);

        $statement = $pdo->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC );
    }
}

$db = new Database();
$test = $db->query("SELECT * From test;");


foreach ($test as $result){
    echo "<li>" . $result['user_name'] . " " . $result['email'] . "</li>";
}
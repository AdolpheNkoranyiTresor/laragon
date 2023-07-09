<?php


$config = include('config.php');

$db = new Database($config['database']);

$heading = "Note";

$note = $db->query("SELECT * From notes where user_id = :user and id = :id",[
    'user' => 1,
    'id' => $_GET['id']
    ])->fetch();

require 'views/note.view.php';
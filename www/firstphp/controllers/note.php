<?php


$config = include('config.php');

$db = new Database($config['database']);

$heading = "Note";

$note = $db->query("SELECT * From notes where id = :id",['id' => $_GET['id']])->fetch();

require 'views/note.view.php';
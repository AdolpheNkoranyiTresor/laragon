<?php


$config = include('config.php');

$db = new Database($config['database']);

$heading = "Note";

$note = $db->query("SELECT * From notes where id = :id", [
    'id' => $_GET['id']
])->fetch();

if (! $note){
    abort();
}

$currentUserId = 1;

$forbidden = 403;

if ($note['user_id'] !== $currentUserId) {
    abort(403);
}

require 'views/note.view.php';
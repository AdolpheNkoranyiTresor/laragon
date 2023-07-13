<?php

$heading = "My Notes";

$config = include('config.php');

$db = new Database($config['database']);

$notes = $db->query("SELECT * From notes where user_id = 1;")->get();

require 'views/notes/index.view.php';
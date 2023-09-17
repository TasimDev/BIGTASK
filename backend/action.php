<?php

require_once 'db.php';

$db = new Database;

//Handle Add New User Ajax Request

if (isset($_POST['add'])) {
    print_r($_POST);
}


?>
<?php

$dsn = "mysql:host=localhost; dbname=cis4290";
$username = "root";
$password = "vt1828FF";

try {
    $db = new PDO ($dsn, $username, $password);
} catch (Exception $ex) {
    echo 'Error connecting to database';
    exit();
}


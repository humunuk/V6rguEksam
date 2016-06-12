<?php

$dsn = "mysql:dbname=test;host=127.0.0.1";
$user = "test";
$pass = "t3st3r123";

try {
    $connection = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
    echo "Connection failed: ".$e->getMessage();
}


//Actual stuff
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Debugging
    file_put_contents("test.txt", json_encode($_POST), FILE_APPEND);

    echo "All well all good!";
}
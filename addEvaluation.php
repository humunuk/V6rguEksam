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
//    file_put_contents("test.txt", json_encode($_POST), FILE_APPEND);
    
    try {
        $data = $_POST;

        $query = $connection->prepare("INSERT INTO skallari_lk_hinnangud (lehekylg, hinnang, session_id) VALUES (:lk, :hinnang, :session_id)");
        $query->execute(['lk' => $data['page_name'], 'hinnang' => $data['rating'], 'session_id' => $data['session_id']]);

//        $query = $connection->prepare("SELECT count(*) FROM skallari_lk_hinnangud WHERE session_id = :session_id");
//        $query->execute(['session_id' => $data['session_id']]);

        echo "Täname hinnangu eest";
    } catch (Exception $e) {
        echo "Midagi läks valesti andmebaasi sisestamisega!";
    }
}
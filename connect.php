<?php

try {
    $db = new PDO("mysql:host=fooddb.c1ay6ksyw9rj.us-east-1.rds.amazonaws.com;port=3306;dbname=fooddb;charset=utf8mb4","admin","food1234");
    echo "Connected!";
} catch (PDOException $e) {
    echo "Failed: ".$e->getMessage();
}
?>

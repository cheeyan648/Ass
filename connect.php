<?php
// Set PHP default timezone globally
date_default_timezone_set('Asia/Kuala_Lumpur');

try {
    $_db = new PDO(
        "mysql:host=fooddb.c1ay6ksyw9rj.us-east-1.rds.amazonaws.com;port=3306;dbname=fooddb;charset=utf8mb4",
        "admin",
        "food1234",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,      // throw exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,   // fetch as objects
            PDO::ATTR_EMULATE_PREPARES => false               // use real prepared statements
        ]
    );
} catch (PDOException $e) {
    // Avoid displaying sensitive info in production
    die("Database connection failed.");
}

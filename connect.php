<?php
$host = "food-db.c1ay6ksyw9rj.us-east-1.rds.amazonaws.com";        // or RDS endpoint
$dbname = "food-db";        // your database name
$username = "admin";         // DB username
$password = "food1234";             // DB password

try {
    $_db = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    // Enable error reporting
    $_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

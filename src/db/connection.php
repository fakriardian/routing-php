<?php

// $servername = '127.0.0.1:3306';
// $username = 'root';
// $password = 'root';
// $dbname = 'test';

try {
    // $db = new PDO('mysql:host=mysql;port=3306;dbname=testapp', 'root', 'secret');
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=test', 'root', 'root');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// $servername = "127.0.0.1:3306";
// $username = "root";
// $password = "root";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

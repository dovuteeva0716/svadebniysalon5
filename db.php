<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "salon_svadb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
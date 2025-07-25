<?php
$host = 'db';
$user = 'root';
$password = 'root';
$database = 'ismart';
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die('Nepavyko prisijungti: ' . $conn->connect_error);
}
?>
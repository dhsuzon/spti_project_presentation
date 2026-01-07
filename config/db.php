<?php
require_once __DIR__ . '/../.env';

$host = $_ENV["db_host"] ?? "localhost";
$user = $_ENV["db_user"] ?? "root";
$pass = $_ENV["db_pass"] ?? "";
$name = $_ENV["db_name"] ?? "spti_db";


$conn = new mysqli($host, $user, $pass, $name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

?>
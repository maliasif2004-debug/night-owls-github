<?php
$conn = new mysqli(
    "localhost",
    "YOUR_DB_USERNAME",
    "YOUR_DB_PASSWORD",
    "YOUR_DATABASE_NAME"
);

if ($conn->connect_error) {
    die("Connection failed");
}
?>
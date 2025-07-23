<?php
$mysqli = new mysqli("db", "root", "rootpassword", "mydb");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected to MySQL successfully!";
?>

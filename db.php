<?php
$conn = new mysqli("localhost", "root", "");
$conn->query("CREATE DATABASE IF NOT EXISTS vulndb");
$conn->select_db("vulndb");
$conn->query("CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, username TEXT, password TEXT)");
$conn->query("INSERT INTO users (username, password) VALUES ('admin','admin123')");
echo "DB initialized.";
?>

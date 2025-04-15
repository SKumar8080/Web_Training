<?php
$conn = new mysqli("localhost", "root", "", "vulndb");
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Welcome, " . $username;
} else {
    echo "Login failed!";
}
?>

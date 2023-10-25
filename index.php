<?php
$servername = "127.0.0.1";
$username = "QuizDB";
$password = "1234";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
}
echo "Connected successfully";



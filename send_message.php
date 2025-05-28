<?php
$host = "localhost";
$db = "your_database";
$user = "your_username";
$pass = "your_password";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed");
}

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (sender, receiver, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $sender, $receiver, $message);
$stmt->execute();

echo "Message sent";
$stmt->close();
$conn->close();
?>

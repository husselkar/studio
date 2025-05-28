<?php
$host = "localhost";
$db = "your_database";
$user = "your_username";
$pass = "your_password";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed");
}

$sender = $_GET['sender'];
$receiver = $_GET['receiver'];

$sql = "SELECT * FROM messages WHERE 
        (sender = ? AND receiver = ?) OR 
        (sender = ? AND receiver = ?) 
        ORDER BY timestamp ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $sender, $receiver, $receiver, $sender);
$stmt->execute();
$result = $stmt->get_result();

$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);
$stmt->close();
$conn->close();
?>

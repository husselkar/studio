<?php
include_once('../dbconnection.php');
if (isset($_POST['freelancer_name']) && isset($_POST['freelancer_email']) && isset($_POST['freelancer_username']) && isset($_POST['freelancer_password'])) {
    $freelancer_name = $_POST['freelancer_name'];
    $freelancer_email = $_POST['freelancer_email'];
    $freelancer_username = $_POST['freelancer_username'];
    $freelancer_password = $_POST['freelancer_password'];

    $sql = "INSERT INTO freelancer_table (freelancer_name, freelancer_email, freelancer_username, freelancer_password) 
            VALUES ('$freelancer_name', '$freelancer_email', '$freelancer_username', '$freelancer_password')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode("OK");
    } else {
        echo json_encode("FAILED");
    }
}
?>

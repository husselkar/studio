<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

// Check for duplicate email
// if(isset($_POST['checkemail']) && isset($_POST['freelancer_email'])){
//     $email = $_POST['freelancer_email']; 
//     $sql = "SELECT freelancer_email FROM freelancer_table WHERE freelancer_email = '$email'";
//     $result = $conn->query($sql);
//     echo $result ? $result->num_rows : "Error executing query";
// }

// Insert new freelancer
if(isset($_POST['freelancer_register']) && isset($_POST['freelancer_name']) && isset($_POST['freelancer_email']) && isset($_POST['freelancer_username']) && isset($_POST['freelancer_password'])){
    $name = $_POST['freelancer_name'];
    $email = $_POST['freelancer_email'];
    $username = $_POST['freelancer_username'];
    $password = $_POST['freelancer_password'];

    $sql = "INSERT INTO freelancer_table (freelancer_name, freelancer_email, freelancer_username, freelancer_password)
            VALUES ('$name', '$email', '$username', '$password')";

        if ($conn->query($sql)== TRUE){
            echo json_encode("OK");
        }else{
            echo json_encode("FAILED");
        }
    

}
?>

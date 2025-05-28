<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');


if(isset($_POST['checkemail']) && isset($_POST['freelancer_email'])){
    $email = $_POST['freelancer_email']; 
    $sql = "SELECT freelancer_email FROM freelancer_table WHERE freelancer_email = '$email'";
    $result = $conn->query($sql);
    echo $result ? $result->num_rows : "Error executing query";
}

// Insert new freelancer
if(isset($_POST['freelancer_register']) && isset($_POST['freelancer_name']) && isset($_POST['freelancer_email']) && isset($_POST['freelancer_username']) && isset($_POST['freelancer_password'])){
    $freelancer_name = $_POST['freelancer_name'];
    $freelancer_email= $_POST['freelancer_email'];
    $freelancer_username = $_POST['freelancer_username'];
    $freelancer_password = $_POST['freelancer_password'];

    $sql = "INSERT INTO freelancer_table (freelancer_name, freelancer_email, freelancer_username, freelancer_password)
            VALUES ('$freelancer_name', '$freelancer_email', '$freelancer_username', '$freelancer_password')";

    if ($conn->query($sql)== TRUE){
        echo json_encode("OK");
    } else {
        echo json_encode("FAILED");
    }
}


//applicant login
if(!isset($_SESSION['is_login'])){
   
    if(isset($_POST['checkapplogemail']) && isset($_POST['freelancer_email']) && isset($_POST['freelancer_password'])){ 
        $freelancer_email = $_POST['freelancer_email'];
        $freelancer_password = $_POST['freelancer_password'];
        $sql = "SELECT freelancer_email,freelancer_password FROM freelancer_table WHERE freelancer_email = '".$freelancer_email."'  AND  freelancer_password= '".$freelancer_password."'" ;
        $result = $conn -> query($sql);
        $row = $result -> num_rows;
        if($row == 1){
            echo json_encode ($row);
            $_SESSION['is_login'] = true;
            $_SESSION['freelancer_email'] =$freelancer_email;

        }else if($row == 0){
            echo json_encode($row); 
        }
    }
} 

?>

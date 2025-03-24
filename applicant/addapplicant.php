<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

if(isset($_POST['register']) && isset($_POST['name']) && isset($_POST['appuseremail']) && isset($_POST['appusername']) && isset($_POST['password'])){
    
    $name= $_POST['appname'];
    $appemail= $_POST['appemail'];
    $appusername= $_POST['appusername'];
    $appPassword= $_POST['apppassword'];
    $sql=" INSERT INTO applicant_table (appusername,appname,app_email,app_pass) VALUES 
    ('$appusername','$name','$appuseremail','$appPassword')";

    if ($conn->query($sql)== TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("FAILED");
    }
}


















?>
<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

//checking already existing applicant email 

if(isset($_POST['checkemail'])  && isset($_POST['appemail'])){
    $appemail= $_POST['appemail']; 
    $sql = "SELECT app_email FROM applicant_table WHERE app_email= '".$appemail."' ";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->num_rows;
        echo ($row); 
    } else {
        echo "Error executing query";
    }
    
}
//insert applicant

if(isset($_POST['appregister']) && isset($_POST['appname']) && isset($_POST['appemail']) && isset($_POST['appusername']) && isset($_POST['password'])){
    $appusername= $_POST['appusername'];
    $appname= $_POST['appname'];
    $appemail= $_POST['appemail'];
    $password= $_POST['password'];
    $sql=" INSERT INTO applicant_table (appusername,appname,app_email,app_pass) 
    VALUES ('$appusername','$appname','$appemail','$password')";

    if ($conn->query($sql)== TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("FAILED");
    }
}
?>
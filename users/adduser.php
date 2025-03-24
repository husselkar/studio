<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

//checking already existing email 

if(isset($_POST['checkemail'])  && isset($_POST['useremail'])){
    $useremail= $_POST['useremail']; 
    $sql = "SELECT user_email FROM user_table WHERE user_email= '".$useremail."' ";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->num_rows;
        echo ($row); 
    } else {
        echo "Error executing query";
    }
    
}


//insert user

if(isset($_POST['register']) && isset($_POST['name']) && isset($_POST['useremail']) && isset($_POST['username']) && isset($_POST['password'])){
    
    $name= $_POST['name'];
    $useremail= $_POST['useremail'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql=" INSERT INTO user_table (username,name,user_email,user_pass) VALUES 
    ('$username','$name','$useremail','$password')";

    if ($conn->query($sql)== TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("FAILED");
    }
}

    //loginuser

if(!isset($_SESSION['is_login'])){

    if(isset($_POST['checkLogemail']) && isset($_POST['userlogemail']) && isset($_POST['userlogpass'])){
        $userlogemail = $_POST['userlogemail'];
        $userlogpass = $_POST['userlogpass'];
        $sql = "SELECT user_email,user_pass FROM user_table WHERE user_email = '".$userlogemail."'  AND user_pass= '".$userlogpass."'" ;
        $result = $conn -> query($sql);
        $row = $result -> num_rows;

        if($row == 1){
            echo json_encode ($row);
            $_SESSION['is_login'] = true;
            $_SESSION['userlogemail'] =$userlogemail;
            
        }else if($row == 0){
            echo json_encode($row); 
        }
    }
} 
?>
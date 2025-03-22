$(document).ready(function(){
//     //ajax call from existing email verification
$("#useremail").on("keypress blur",function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var useremail = $("#useremail").val();
        $.ajax({
            url:"users/adduser.php",
            method:"POST",
            data:{
                "checkemail" : true,
                useremail : useremail, 
            },
            success: function(data){
                if(data!=0){
                    $("#msg2").html('<span >Email already taken !</span>'); 
                    
                    $("#registerbtn").attr("disabled",true);
                }else if(data == 0 && reg.test(useremail)){
                    $("#msg2").html('<span style="color:green;">Email ID is Available!</span>');
                    $("#registerbtn").attr("disabled",false);
                }else if(!reg.test(useremail)){
                    $("#msg2").html('<span style="color:red;" >Please Enter  a valid Email Eg. abd@xyz.com !</span>'); 
                    $("#registerbtn").attr("disabled",true);
                }
                if(useremail==""){
                    $("#msg2").html('<span style="color:red;" >Please Enter Email !</span>'); 
                    $("#registerbtn").attr("disabled",true);
                }
            },   
        });
    });
 });
 

//----------------------------------------------------------------------------------

function adduser(){
    console.log('1click');
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name= $("#name").val();
    var useremail=$('#useremail').val();
    var username=$('#username').val();
    var password=$('#password').val();
    var confpassword=$('#confpassword').val();

    //checking form fields on form submission
    if(name.trim() == "" ){
        $("#msg1").html('<small>Please Enter Name ! </small>'); 
        $("#name").focus();
        return false;  
    }else if(useremail.trim()==""){
        $("#msg2").html('<span>Please Enter Email !</span>'); 
        $("#useremail").focus();
        return false;  
    }else if (useremail.trim() !== "" && !reg.test(useremail)){
        $("#msg2").html('<span>Please Enter  a valid Email Eg. abd@xyz.com !</span>'); 
        $("#useremail").focus();
        return false;
    }else if(username.trim()==""){
        $("#msg3").html('<span>Please Enter username !</span>'); 
        $("#username").focus();
        return false;  
    }else if(password.trim()==""){
        $("#msg4").html('<span>Please Enter Password !</span>'); 
        $("#password").focus();
        return false;  
    } else if(confpassword.trim() == ""){
        $("#msg5").html('<span>Please Confirm Password!</span>'); 
        $("#confpassword").focus();
        return false;  
    } else if(password !== confpassword){
        $("#msg5").html('<span>Passwords do not match!</span>'); 
        $("#confpassword").focus();
        return false;  
    } else{
        $.ajax({
            url:'users/adduser.php',
            method:'POST',  
            dataType:"json",
            data:{
                register: "register",
                name : name,
                useremail : useremail,
                username : username,
                password : password,
            },
            success:function(data){1

                if(data == "OK"){
                    $("#successMsg").html( '<span class="alert alert-success">Registration Successfull !</span>');
                    clearRegfield();
                }else if(data == "FAILED"){
                    $("#successMsg").html( '<span class="alert alert-danger">Registration failed !</span>');
                }
            }
    
        })
        
    }
} 
function clearRegfield(){  // Line 65
    $("#userRegForm").trigger("reset");  
    $("#msg1, #msg2, #msg3, #msg4, #msg5").html(""); // FIXED LINE  
}


//Ajax call for user login verification 
function checkuserlogin(){
    var userlogemail=$("#userlogemail").val();
    var userlogpass=$("#userlogpass").val();
    $.ajax({
        url:'users/adduser.php',
        method:'POST',
        data:{
            checkLogemail:"checklogemail",
            userlogemail : userlogemail,
            userlogpass : userlogpass,
        },
        success:function(data){
            if(data ==0){
                $("#loginstat").html('<small class=" alert alert-danger">Invalid Email or Password !</small>');
            }else if(data == 1){
                $("#loginstat").html( '<div class="spinner-border text-success" role="status"></div> ');   
                setTimeout(()=>{
                    window.location.href="index.php";
                },1000);
            }
        }
    })

}





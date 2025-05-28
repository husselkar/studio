$(document).ready(function(){
//     //ajax call from existing email verification
$("#useremail").on("blur",function(){
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
                console.log(data);
                if(data !=0){
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
// Ajax call for user registration verification
emailjs.init("E9UM_UOz2XuWd_bg3"); 

function adduser() {
    console.log('1click');
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $("#name").val();
    var useremail = $('#useremail').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var confpassword = $('#confpassword').val();

    //checking form fields on form submission
    if(name.trim() == "" ){
        $("#msg1").html('<small>Please Enter Name ! </small>'); 
        $("#name").focus();
        return false;  
    } else if(useremail.trim()==""){
        $("#msg2").html('<span>Please Enter Email !</span>'); 
        $("#useremail").focus();
        return false;  
    } else if (useremail.trim() !== "" && !reg.test(useremail)){
        $("#msg2").html('<span>Please Enter a valid Email Eg. abd@xyz.com !</span>'); 
        $("#useremail").focus();
        return false;
    } else if(username.trim()==""){
        $("#msg3").html('<span>Please Enter username !</span>'); 
        $("#username").focus();
        return false;  
    } else if(password.trim()==""){
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
    } else {
        $.ajax({
            url: 'users/adduser.php',
            method: 'POST',  
            dataType: "json",
            data: {
                register: "register",
                name: name,
                useremail: useremail,
                username: username,
                password: password,
            },
            success: function(data) {
                console.log(data);
                if(data == "OK") {
                    $("#successMsg").html('<span class="alert alert-success">Registration Successful!</span>');
                    clearRegfield();
                    
                    // Send email after successful registration
                    emailjs.send("service_7g7nrqi", "template_n0bpnlt", {
                        user_name: name,
                        user_email: useremail
                    })
                    .then(function(response) {
                        console.log("Email sent successfully", response.status, response.text);
                    }, function(error) {
                        console.error("Email sending failed:", error);
                    });

                } else if(data == "FAILED") {
                    $("#successMsg").html('<span class="alert alert-danger">Registration failed!</span>');
                }
            }
        });
    }
}


function clearRegfield(){  
    $("#userRegForm").trigger("reset");  
    $("#msg1, #msg2, #msg3, #msg4, #msg5").html(""); 
}


function checkuserlogin(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var userlogemail = $("#userlogemail").val();
    var userlogpass = $("#userlogpass").val();

    if(userlogemail.trim() == ""){
        $("#msg1").html('<span class="text-danger">Please Enter Email !</span>'); 
        $("#loginbtn").attr("disable", true);
    } else if(userlogemail.trim() !== "" && !reg.test(userlogemail)){
        $("#msg1").html('<span class="text-danger">Please Enter a valid Email Eg. abd@xyz.com !</span>'); 
        $("#userlogemail").focus();
    } else if(userlogpass.trim() == ""){
        $("#msg2").html('<span>Please Enter Password !</span>'); 
        $("#userlogpass").focus();
    } else {
        $.ajax({
            url: 'users/adduser.php',
            method: 'POST',
            dataType: "json",
            data: {
                checkLogemail: "checklogemail",
                userlogemail: userlogemail,
                userlogpass: userlogpass,
            },
            success: function(data) {
                if(data == 0){
                    $("#loginstat").html('<small class="alert alert-danger">Invalid Email or Password !</small>');
                } else if(data == 1){
                    // Successful login
                    $("#loginstat").html('<div class="spinner-border text-success" role="status"></div> <p>Redirecting....</p>');   

                    // Send a success email after login
                    emailjs.send("service_7g7nrqi", "template_v11ioes", {
                         
                        user_email: userlogemail,
                        login_time: new Date().toLocaleString()  // Optionally, you can include the login time
                    })
                    .then(function(response) {
                        console.log("Email sent successfully", response.status, response.text);
                    }, function(error) {
                        console.error("Email sending failed:", error);
                    });

                    // Redirect to home page after 1 second
                    setTimeout(() => {
                        window.location.href = "index.php";
                    }, 4000);
                }
            }
        });
    }
}





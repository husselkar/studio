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
            url:'applicant/addapplicant.php',
            method:'POST',  
            dataType:"json",
            data:{
                register: "register",
                name : name,
                useremail : useremail,
                username : username,
                password : password,
            },
            success: function(data){
                console.log(data);
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
function clearRegfield(){  
    $("#userRegForm").trigger("reset");  
    $("#msg1, #msg2, #msg3, #msg4, #msg5").html(""); 
}
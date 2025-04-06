
$("#appemail").on("blur",function(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var appemail = $("#appemail").val();
        console.log("email click");
        $.ajax({
            
            url:"applicant/addapplicant.php",
            method:"POST",
            data:{
                "checkemail" : true,
                appemail : appemail, 
            },
            success: function(data){
                console.log(data);
                if(data !=0){
                    $("#msg2").html('<span >Email already taken !</span>'); 
                    $("#registerbtn").attr("disabled",true);
                }else if(data == 0 && reg.test(appemail)){
                    $("#msg2").html('<span style="color:green;">Email ID is Available!</span>');
                    $("#registerbtn").attr("disabled",false);
                }else if(!reg.test(appemail)){
                    $("#msg2").html('<span style="color:red;" >Please Enter  a valid Email Eg. abd@xyz.com !</span>'); 
                    $("#registerbtn").attr("disabled",true);
                }
                if(appemail==""){
                    $("#msg2").html('<span style="color:red;" >Please Enter Email !</span>'); 
                    $("#registerbtn").attr("disabled",true);
                }
            },   
        });
    });


// This file contains the AJAX request for the applicant registration form
function addapplicant(){
    console.log('1click');
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var appname= $("#appname").val();
    var appemail=$('#appemail').val();
    var appusername=$('#appusername').val();
    var password=$('#password').val();
    var confpassword=$('#confpassword').val();

    //checking form fields on form submission
    if(appname.trim() == "" ){
        $("#msg1").html('<small>Please Enter Name ! </small>'); 
        $("#appname").focus();
        return false;  
    }else if(appemail.trim()==""){
        $("#msg2").html('<span>Please Enter Email !</span>'); 
        $("#appemail").focus();
        return false;  
    }else if (appemail.trim() !== "" && !reg.test(appemail)){
        $("#msg2").html('<span>Please Enter  a valid Email Eg. abd@xyz.com !</span>'); 
        $("#appemail").focus();
        return false;
    }else if(appusername.trim()==""){
        $("#msg3").html('<span>Please Enter appusername !</span>'); 
        $("#appusername").focus();
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
        console.log('ajaxclick');
        $.ajax({
            url:'applicant/addapplicant.php',
            method:'POST',  
            dataType:"json",
            data:{
                appregister: "appregister",
                appname : appname,
                appemail : appemail,
                appusername : appusername,
                password : password,
            },
            success: function(data){
                
                if(data=="OK"){                    
                    $("#successMsg").html( '<span class="alert alert-success">Registration Successfull !</span>');
                    clearRegfield();}
                else if(data == "FAILED"){
                    $("#successMsg").html( '<span class="alert alert-danger">Registration failed !</span>');
                }
            }
    
        })
        
    }
} 
function clearRegfield(){  
    $("#appRegForm").trigger("reset");  
    $("#msg1, #msg2, #msg3, #msg4, #msg5").html(""); 
}
function freelancerRegister() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var freelancer_name = $("#freelancer_name").val().trim();
    var freelancer_email = $('#freelancer_email').val().trim();
    var freelancer_username = $('#freelancer_username').val().trim();
    var freelancer_password = $('#freelancer_password').val().trim();
    var freelancer_confpassword = $('#freelancer_confpassword').val().trim();

    if (freelancer_name === "") {
        $("#msg1").html('<small>Please Enter Name!</small>');
        $("#freelancer_name").focus();
        return false;
    } else if (freelancer_email === "") {
        $("#msg2").html('<small>Please Enter Email!</small>');
        $("#freelancer_email").focus();
        return false;
    } else if (!reg.test(freelancer_email)) {
        $("#msg2").html('<small>Please Enter a valid Email (eg. abd@xyz.com)!</small>');
        $("#freelancer_email").focus();
        return false;
    } else if (freelancer_username === "") {
        $("#msg3").html('<small>Please Enter Username!</small>');
        $("#freelancer_username").focus();
        return false;
    } else if (freelancer_password === "") {
        $("#msg4").html('<small>Please Enter Password!</small>');
        $("#freelancer_password").focus();
        return false;
    } else if (freelancer_confpassword !== freelancer_password) {
        $("#msg5").html('<small>Passwords do not match!</small>');
        $("#freelancer_confpassword").focus();
        return false;
    } else {
        console.log('click');
        $.ajax({
            
            url: 'applicant/addapplicant.php',  // backend script to handle freelancer registration
            method: 'POST',
            dataType: 'json',
            data: {
                freelancer_register: "freelancer_register",
                freelancer_name: freelancer_name,
                freelancer_email: freelancer_email,
                freelancer_username: freelancer_username,
                freelancer_password: freelancer_password,
            },
            success: function(data) {
                console.log('click2');  
                if (data === "OK") {
                    $("#successMsg").html('<span class="alert alert-success">Registration Successful!</span>');
                    $("#freelancerRegForm").trigger("reset");
                } else if( data=="FAILED") {
                    console.log("FAILED");     
                } else {
                    $("#successMsg").html('<span class="alert alert-danger">Registration Failed!</span>');
                }
            }
        });
    }
}

function checkapplicantlogin() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var freelancer_email = $("#freelancer_email").val();
    var freelancer_password = $("#freelancer_password").val();

    if (!freelancer_email || freelancer_email.trim() === "") {
        $("#msg1").html('<span class="text-danger">Please Enter Email!</span>');
        $("#loginbtn").attr("disabled", true);
        return;
    }

    if (!reg.test(freelancer_email.trim())) {
        $("#msg1").html('<span class="text-danger">Please Enter a valid Email (e.g., abd@xyz.com)!</span>');
        $("#freelancer_email").focus();
        return;
    }

    if (!freelancer_password || freelancer_password.trim() === "") {
        $("#msg2").html('<span class="text-danger">Please Enter Password!</span>');
        $("#freelancer_password").focus();
        return;
    }

    console.log('loginclick');
    $.ajax({
        url: 'applicant/addapplicant.php',
        method: 'POST',
        dataType: "json",
        data: {
            checkapplogemail: "checkapplogemail",
            freelancer_email: freelancer_email,
            freelancer_password: freelancer_password
        },
        
        success: function (data) {
            if (data == 0) {
                $("#applicantloginstat").html('<small class="alert alert-danger">Invalid Email or Password!</small>');
            } else if (data == 1) {
                $("#applicantloginstat").html('<div class="spinner-border text-success" role="status"></div><p>redirecting....</p>');
                setTimeout(() => {
                    window.location.href = "applicantdash.php";
                }, 1000);
            }
        }
    });
}

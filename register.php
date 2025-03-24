<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/ajaxreq.js" ></script>
    <!-- Bootstrap 5 & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>

    <!-- Navbar -->
    <nav class="nav_head">
      <ul class="nav__links nav__left">
        <li><a class="text-decoration-none logo" href="index.php">BOLD VIEW</a></li>
        <li><a class="text-decoration-none" href="#about">About Us</a></li>
        <li><a class="text-decoration-none" href="#">Contact Us</a></li>
        <li><a class="text-decoration-none" href="#">Help Us</a></li>
      </ul>
    </nav>

    <!-- Register Form -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
      <div class="row w-100 justify-content-center">
        <div class="col-md-4">
          <div class="card shadow p-4">
            <div class="card-body">
              <h5 class="text-center mb-4">REGISTER</h5>
              <form id="userRegForm" method="" action="#">

                <div class="mb-3">
                  <small id="msg1" class="d-block text-danger"></small>
                  <div class="input-group">
                    <span class="input-group-text" ><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Your Name" id="name" required/>
                  </div>
                </div>

                <div class="mb-3">
                <small id="msg2" class="d-block"></small>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Your Email" id="useremail" required />
                  </div>
                </div>
                

                <div class="mb-3">
                <small id="msg3" class="d-block text-danger"></small>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-users"></i></span>
                    <input type="text" class="form-control" placeholder="Username" id="username" />
                  </div>
                </div>

                <div class="mb-3">
                <small id="msg4" class="d-block text-danger"></small>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" id="password" />
                  </div>
                </div>

                <div class="mb-3">
                <small id="msg5" class="d-block text-danger"></small>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" id="confpassword" required />
                  </div>
                </div>

                <button type="button" class="btn btn-primary btn-sm btn-block w-100" id="registerbtn"  onclick=adduser()>REGISTER</button>
                <span id="successMsg" class=" d-block mt-3"></span>
                <div class="text-center mt-3">
                  <a href="login.php">Already have an account? Login</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </body>
  
 

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/loginstyles.css" />
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

    <!-- Login Form -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
      <div class="row w-100 justify-content-center">
        <div class="col-md-4">
          <div class="card shadow p-4">
            <div class="card-body">
              <h5 class="text-center mb-4">LOGIN</h5>
              <form role="form">
                  <div class="mb-3">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="userlogemail" placeholder="Enter your Email"/>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" id="userlogpass" placeholder="Enter your Password" />
                  </div>
                </div>
                <small  class=" d-block mt-4 mb-4" id="loginstat"></small>
                <button type="button" class="btn btn-primary w-100" onclick=checkuserlogin()>LOGIN</button>
                
                <div class="text-center mt-3">
                  <a href="register.php">Don't have an account? Sign up</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <script type="text/javascript" src="js/ajaxreq.js" ></script>
</html>

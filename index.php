<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <title>BOLD VIEWS STUDIO</title>
  </head>
  <body>
    
      <nav class="nav_head">
        <ul class="nav__links nav__left">
          <li><a class="logo " href="index.php" >BOLD VIEW</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a  href="#hire">Hire</a></li>
          <li><a  href="#">Contact Us</a></li>
        </ul>
        <ul class="nav__links nav__right">
          <?php
          session_start();
          if(isset($_SESSION['is_login'])){
            echo'<li><span><a  href="logout.php">Logout</a></span></li>
                <li><a  href="#">profile</a></li>';
          }else{
            echo '<li><a class="text-decoration-none" href="login.php" >Login/Register</a></li>';
          } 
          ?>
        </ul>
      </nav>
    
    <div class="container">
      
      <img src="icons/logo-png-removebg.png" alt="header" class="logo" />
      <h4 class="text__left" style="background: none">BOLD</h4>
      <h4 class="text__right" style="background: none">VIEWS</h4>
      <h3 class="subtext">
        Ready to elevate your brand? Step inside to see how Bold Views Studio
        brings your vision to life.
      </h3>
      <button class="btn explore">EXPLORE MORE</button>
      <h5 class="feature-1">Reels</h5>
      <h5 class="feature-2">Photoshoot</h5>
      <h5 class="feature-3">Video Editing</h5>
      <h5 class="feature-4">Videography</h5>
    </div>
    <!-- About us -->
    <section class="about-us" id="about">
      <div class="about-image">
        <img src="images/about.jpg" alt="About Us" />
      </div>
      <div class="about-content">
        <h2>About Us</h2>
        <p>
          "BoldView Studios is dedicated to crafting meaningful and memorable
          visual content. We specialize in video and photo shoot services for
          cafes, hotels, and retail shops. 
        </p>
        <p>
          Our talented team of managers,
          creators, and editors bring a fresh perspective to each project,
          amplifying your brands essence."
        </p>
      </div>
    </section>
    <div class="album py-5 bg-none">
      <div class="container">
        <h2 id="hire" class="text-center ">FOR HIRE: </h2>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
              <div class="card-body">
                <p class="card-text">Person Details</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary border">View</button>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
              <div class="card-body">
                <p class="card-text">Person Details</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary border">View</button>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Person Details</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary border">View</button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>
<section>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Sign In here</h1>
        <p class="col-lg-10 fs-4"> Subtext here</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        
          <button class="btn btn-primary btn-sm" type="submit">Sign up</button>
          
          <br>
        </form>
      </div>
    </div>
  </div>
</section>
<!--Footer-->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 px-5 border-top">
  <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

  <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
  </a>

  <ul class="nav col-md-4 justify-content-end">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
  </ul>
</footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- user ajax call javascript -->
     
  </body>
</html>

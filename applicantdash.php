<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Title -->
  <title>Simple Page</title>
</head>
<body>
<nav class="nav_head">
        <ul class="nav__links nav__left">
          <li><a class="logo " href="index.php" >BOLD VIEW</a></li>
          
          <li><a  href="#">Contact Us</a></li>
        </ul>
        <ul class="nav__links nav__right">
          <?php
          if(isset($_SESSION['is_login'])){
            echo'<li><span><a  href="logout.php">Logout</a></span></li>
                <li><a  href="#">profile</a></li>';
          }else{
            echo '<li><a class="text-decoration-none" href="login.php" >Login/Register</a></li>';
          } 
          ?>
        </ul>
</nav>
    <h1 class="text-center">Add Profile</h1>
<div class="container" >
    <form class="container mt-5">
    <!-- Name -->
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingName" placeholder="John Doe" required>
    <label for="floatingName">Full Name</label>
    </div>

    <!-- Role -->
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingRole" placeholder="Photographer" required>
    <label for="floatingRole">Role</label>
    </div>

    <!-- Experience -->
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingExperience" placeholder="5 years" required>
    <label for="floatingExperience">Experience</label>
    </div>

    <!-- Specialty -->
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingSpecialty" placeholder="Wedding, Fashion" required>
    <label for="floatingSpecialty">Specialty</label>
    </div>

    <!-- Email -->
    <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
    <label for="floatingEmail">Email address</label>
    </div>

    <!-- Image -->
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01">Upload Image</label>
    <input type="file" class="form-control" id="inputGroupFile01">
    </div>

    <!-- Optional: Description or About -->
    <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Write something..." id="floatingAbout" style="height: 100px"></textarea>
    <label for="floatingAbout">About</label>
    </div>

    <!-- Submit Button -->
    <div class="text-center mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</body>

</html>
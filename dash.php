<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer & Videographer Album</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<nav class="nav_head">
      <ul class="nav__links nav__left">
        <li><a class="text-decoration-none logo" href="index.php">BOLD VIEW</a></li>
        <li><a class="text-decoration-none" href="#about">About Us</a></li>
        <li><a class="text-decoration-none" href="#">Contact Us</a></li>
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
        <h1>Photographer & Videographer Album</h1>
        <div class="album-grid">
            <!-- Profiles will be inserted dynamically here -->
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

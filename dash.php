<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer & Videographer Album</title>

    <!-- Session start to ensure currentUser is correctly set -->
    <?php session_start(); ?>
    <script>
    const currentUser = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>";
    </script>

    <!-- Linking to CSS and JS -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
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
            if (isset($_SESSION['is_login'])) {
                echo '<li><span><a href="logout.php">Logout</a></span></li>
                      <li><a href="#">Profile</a></li>';
            } else {
                echo '<li><a class="text-decoration-none" href="login.php">Login/Register</a></li>';
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

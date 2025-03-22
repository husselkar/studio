<?php
session_start(); 
session_destroy(); 

// Proper way to redirect after logout
echo "<script>window.location.href='index.php';</script>";
exit(); // Ensure script execution stops
?>

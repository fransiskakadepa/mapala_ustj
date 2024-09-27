<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}

include ('koneksi.php'); 


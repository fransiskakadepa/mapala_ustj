<?php
include 'koneksi.php';
session_start();
 
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = hash('MD5', $_POST['password']); 
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: beranda.html");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapala Ustj</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <p style="font-size: 2rem; font-weight: 800;">Login</p>
            <div>
                <input type="username" placeholder="Username" name="username" required>
            </div>
            <div>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div>
                <button name="submit" type="submit">Login</button>
            </div>
            <p>Anda belum punya akun? <a href="add.php">Register</a></p>
        </form>
    </div>
</body>
</html>
<?php
session_start();
include "include_admin/db.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="admin_images/icon_anekajaya.ico">
    <script src="https://kit.fontawesome.com/7d288b9368.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- container Starts -->
        <form class="form-login" action="" method="POST">
            <h2 class="form-login-heading">Admin Login</h2>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <input type="password" class="form-control" name="pass" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                Log in
            </button>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username ='" . $username . "' AND password = '" . MD5($pass) . "'");
    if (mysqli_num_rows($cek) > 0) {
        $d = mysqli_fetch_object($cek);
        $_SESSION['status_login'] = true;
        $_SESSION['a_global'] = $d;
        $_SESSION['id'] = $d->admin_id;
        echo '<script>window.location="dashboard.php"</script>';
    } else {
        echo '<script>alert("Username atau password anda salah")</script>';
    }
}
?>
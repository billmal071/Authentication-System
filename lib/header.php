<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SNG : Hospital</title>

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<div>
        <h5><a href="index.php">StartNG Hospital</a></h5>
        <nav>
            <a href="index.php">Home</a>
            <?php if (!isset($_SESSION['loggedIn'])) {?>

                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
                <!-- <a class="p-2 text-dark" href="forgot.php">Forgot Password</a> -->
            <?php } else {?>

                <a href="dashboard.php">Dashboard</a>
                <a href="reset.php">Reset Password</a>
                <a href="logout.php">Logout</a>
            <?php }?>

        </nav>

    </div>
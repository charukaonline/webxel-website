<?php

    @include '../config.php';

    session_start();

    if(!isset($_SESSION['user_name'])) {
        header('location:login_form.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <link rel="stylesheet" href="/assets/css/register_and_login.css">

</head>
<body>

    <?php include('../Admin_Panel/includes/sidebar.php'); ?>

    <div class="container">

        <div class="content">
            <h3>Hi, <span>user</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>this is user page</p>
            <a href="/login_user_and_admin_page/login_form.php" class="btn">Login</a>
            <a href="register_form.php" class="btn">Register</a>
            <a href="/login_user_and_admin_page/logout.php" class="btn">Logout</a>
        </div>

    </div>

</body>
</html>
<?php

    @include 'config.php';

    session_start();

    if(!isset($_SESSION['admin_name'])) {
        header('location: /Login User and Admin page/login_form.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <div class="content">
            <h3>Hi, <span>admin</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is admin page</p>
            <a href="/Login User and Admin page/login_form.php" class="btn">Login</a>
            <a href="/Login User and Admin page/register_form.php" class="btn">Register</a>
            <a href="/Login User and Admin page/logout.php" class="btn">Logout</a>
        </div>

    </div>

</body>
</html>
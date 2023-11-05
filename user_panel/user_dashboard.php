<?php

@include('../config.php');

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location: ../Login_User_and_Admin_page/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WEBXEL - User</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assets/css/admin_and_user.css">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include('../user_panel/includes/sidebar.php'); ?>

    <!-- CONTENT -->
    <section id="content">

        <?php include('../user_panel/includes/navbar.php'); ?>

        <main>

        <section class="profile" id="profile">

        </section>

        <section class="notification" id="notification">
            
        </section>

            <?php include('../user_panel/includes/footer.php'); ?>

        </main>
        <!-- MAIN -->

    </section>
    <!-- CONTENT -->
</body>

</html>
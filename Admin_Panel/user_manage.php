<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location: /login_user_and_admin_page/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WEBXEL - User Management</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link id="stylesheet" href="../assets/css/admin.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="admin-page-clone">

        <?php include('./includes/sidebar.php'); ?>

        <!-- CONTENT -->
        <section id="content">

            <?php include('./includes/navbar.php'); ?>

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>User Management</h1>
                    </div>
                </div>

                <?php include('./includes/footer.php'); ?>

            </main>

        </section>

    </section>

    <script src="../assets/js/admin.js"></script>

</body>

</html>
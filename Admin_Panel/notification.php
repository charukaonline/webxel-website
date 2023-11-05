<?php

@include '../config.php';

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
    <title>WEBXEL - Admin Notification</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link id="stylesheet" href="../assets/css/admin_and_user.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="admin-notification">

        <?php include('./includes/sidebar.php'); ?>

        <!-- CONTENT -->
        <section id="content">

            <?php include('./includes/navbar.php'); ?>

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Notification</h1>
                    </div>
                </div>

                <section class="message" id="message">
                    <h1>Message</h1>

                    <div class="message-card">

                    </div>
                </section>

                <section class="orders" id="orders">
                    <h1>Orders</h1>

                    <div class="order-card">
                        <table class="order">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Service Type</th>
                                    <th>Service Description</th>
                                    <th>Contact Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                function getAll($table)
                                {
                                    global $conn;
                                    $query = "SELECT * FROM $table";
                                    return mysqli_query($conn, $query);
                                }

                                $orders = getAll("orders");

                                if ($orders) {
                                    if (mysqli_num_rows($orders) > 0) {
                                        while ($record = mysqli_fetch_assoc($orders)) {
                                ?>
                                            <tr>
                                                <td><?= $record['order_id'] ?></td>
                                                <td><?= $record['name'] ?></td>
                                                <td><?= $record['email'] ?></td>
                                                <td><?= $record['service_type'] ?></td>
                                                <td><?= $record['description'] ?></td>
                                                <td><?= $record['number'] ?></td>
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "No records found";
                                    }
                                } else {
                                    echo "Error in retrieving records: " . mysqli_error($conn); // Display any potential errors
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <?php include('./includes/footer.php'); ?>

            </main>

        </section>

    </section>

    <script src="../assets/js/admin.js"></script>

</body>

</html>
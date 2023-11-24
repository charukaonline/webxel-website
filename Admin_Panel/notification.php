<?php

@include '../config.php';

session_start();

function alert($message)
{
    $_SESSION['message'] = $message;
    exit();
}

if (!isset($_SESSION['admin_name'])) {
    header('location: /login_user_and_admin_page/login_form.php');
}

if (isset($_POST['delete-order'])) {
    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);

    $delete_order = "DELETE FROM orders WHERE order_id = '$order_id'";
    $delete_order_run = mysqli_query($conn, $delete_order);

    if ($delete_order_run) {
        header('location: ./notification.php');
        alert("Order deleted.");
    } else {
        header('location: ./notification.php');
        alert("Something went wrong.");
    }
}

if (isset($_POST['accept-order'])) {
    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $admin_email = $_SESSION['admin_email'];

    $move_order_query = "INSERT INTO confirmed_orders (confirmed_order_id, admin_email, name, email, service_type, description, number)
                        SELECT order_id, ?, name, email, service_type, description, number FROM orders WHERE order_id = ? ";

    $update_order_status_query = "UPDATE orders SET order_status = 'Accepted!' WHERE order_id = ?";
    $stmt_update_status = mysqli_prepare($conn, $update_order_status_query);
    mysqli_stmt_bind_param($stmt_update_status, 'i', $order_id);
    mysqli_stmt_execute($stmt_update_status);

    $stmt = mysqli_prepare($conn, $move_order_query);

    mysqli_stmt_bind_param($stmt, 'si', $admin_email, $order_id);

    $move_order_result = mysqli_stmt_execute($stmt);

    if ($move_order_result) {

        header('location: ./notification.php');
        alert("Order accepted!");
    } else {
        header('location: ./notification.php');
        alert("Something went wrong.");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />

    <link id="stylesheet" href="../assets/css/admin_and_user.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>WEBXEL - Admin Notification</title>
    <link rel="icon" type="image/png" href="../assets/images/logo2.jpg">
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

                <section class="orders" id="orders">
                    <h1>Pending Orders</h1>

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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                function getAll($table)
                                {
                                    global $conn;
                                    $query = "SELECT * FROM $table  WHERE order_status = 'Pending...'";
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
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="order_id" value="<?= $record['order_id'] ?>">
                                                        <button class="btn-chat" type="submit" name="chat-btn"><a href="mailto:<?php $_SESSION['admin_email'] ?>">Chat Now</a></button> <br>
                                                        <button class="btn-accept" type="submit" name="accept-order">Accept Order</button> <br>
                                                        <button class="btn-delete" type="submit" name="delete-order">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "No records found";
                                    }
                                } else {
                                    echo "Error in retrieving records: " . mysqli_error($conn);
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="orders" id="orders">
                    <h1><?php echo $_SESSION['admin_name'] ?>'s Confirmed Orders</h1>

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
                                function getAllConfirmedOrders($table, $admin_email)
                                {
                                    global $conn;
                                    $query = "SELECT * FROM $table WHERE admin_email = '$admin_email' ";
                                    return mysqli_query($conn, $query);
                                }

                                if ($_SESSION['admin_email']) {
                                    $admin_email = $_SESSION['admin_email'];
                                    $confirmed_orders = getAllConfirmedOrders("confirmed_orders", $admin_email);

                                    if ($confirmed_orders) {
                                        if (mysqli_num_rows($confirmed_orders) > 0) {
                                            while ($record = mysqli_fetch_assoc($confirmed_orders)) {
                                ?>
                                                <tr>
                                                    <td><?= $record['confirmed_order_id'] ?></td>
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
                                        echo "Error in retrieving records: " . mysqli_error($conn);
                                    }
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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        <?php
        if (isset($_SESSION['message'])) {
        ?>
            alertify.set('notifier', 'position', 'top-center');
            alertify.success('<?= $_SESSION['message'] ?>');
        <?php
            unset($_SESSION['message']);
        }
        ?>
    </script>

</body>

</html>
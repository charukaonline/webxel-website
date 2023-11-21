<?php

@include('../config.php');

session_start();

if (!isset($_SESSION['user_name']) && ($_SESSION['user_email'])) {
    header('location: ../Login_User_and_Admin_page/login_form.php');
}

if (isset($_POST['submit-info'])) {

    $user_name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $user_about = mysqli_real_escape_string($conn, $_POST['about']);
    $user_country = mysqli_real_escape_string($conn, $_POST['country']);
    $user_address = mysqli_real_escape_string($conn, $_POST['address']);
    $user_contact_number = $_POST['contact_number'];
    $user_email = $_SESSION['user_email'];

    $user_profile_update = $conn->prepare("UPDATE login_and_register SET name = ?, country = ?, address = ?, contact_number = ?, about = ? WHERE email = ?");
    $user_profile_update->bind_param("ssssss", $user_name, $user_country, $user_address, $user_contact_number, $user_about, $user_email);
    $user_profile_update->execute();

    if ($user_profile_update) {
        header('location: ./user_dashboard.php');
        alert("User Profile Update Successfully.");
        exit();
    } else {
        header('location: ./user_dashboard.php');
        alert("Something Went Wrong.");
        exit();
    }
}

// if (isset($_POST['change-password'])) {
//     $current_password = $_POST['current-password'];
//     $new_password = $_POST['new-password'];
//     $confirm_password = $_POST['confirm-new-password'];

//     $user_email = $_SESSION['user_email'];

//     $user_password_update = $conn->prepare("UPDATE login_and_register SET password = ? WHERE email = ?");
//     $user_password_update->bind_param("ss", $new_password, $user_email);
//     $user_password_update->execute();

//     if ($user_password_update) {
//         header('location: ./user_dashboard.php');
//         alert("Password Update Successfully.");
//         exit();
//     } else {
//         header('location: ./user_dashboard.php');
//         alert("Something Went Wrong.");
//         exit();
//     }
// }

function alert($message)
{
    $_SESSION['message'] = $message;
    exit();
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

    <link rel="stylesheet" href="../assets/css/admin_and_user.css">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>WEBXEL - User</title>
    <link rel="icon" type="image/png" href="../assets/images/logo2.jpg">

</head>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/655b9f0991e5c13bb5b1f4be/1hfmuafig';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

<body>

    <?php include('../user_panel/includes/sidebar.php'); ?>

    <section class="admin-profile">

        <?php include('./includes/sidebar.php'); ?>

        <!-- CONTENT -->
        <section id="content">

            <?php include('./includes/navbar.php'); ?>

            <!-- MAIN -->
            <main class="profile" id="profile">
                <div class="head-title">
                    <div class="left">
                        <h1>User Profile</h1>
                    </div>
                </div>

                <div class="profile-card">

                    <img src="../assets/images/profile.png" alt="Profile" class="rounded-circle">
                    <h2><?php echo $_SESSION['user_name'] ?></h2>
                    <h3>W&#x039E;&#x042;X&#x039E;L User</h3>

                </div>
            </main>

            <div class="admin-info-card">

                <ul class="info-card-header">

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab">Overview</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab">Edit Profile</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab">Change Password</button>
                    </li>

                </ul>
                <div class="info-card-content">

                    <?php
                    $user_email = $_SESSION['user_email'];
                    $query = "SELECT * FROM login_and_register WHERE email='$user_email'";
                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    ?>

                        <div class="profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic"><?php echo $row['about']; ?></p>

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="info-title">Full Name:</div>
                                <div class="info-content"><?php echo $row['name']; ?></div>
                            </div>

                            <div class="row">
                                <div class="info-title">Email:</div>
                                <div class="info-content"><?php echo $row['email']; ?></div>
                            </div>

                            <div class="row">
                                <div class="info-title">Country:</div>
                                <div class="info-content"><?php echo $row['country']; ?></div>
                            </div>

                            <div class="row">
                                <div class="info-title">Address:</div>
                                <div class="info-content"><?php echo $row['address']; ?></div>
                            </div>

                            <div class="row">
                                <div class="info-title">Phone:</div>
                                <div class="info-content"><?php echo $row['contact_number']; ?></div>
                            </div>

                        </div>

                    <?php
                    } else {
                        echo "No user found.";
                    }
                    ?>

                    <div class="profile-edit" id="profile-edit">

                        <form action="" method="POST">

                            <div class="info-edit">
                                <label for="fullName" class="info-social-links">Full Name</label>
                                <div class="info-description">
                                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="about" class="info-social-links">About</label>
                                <div class="info-description">
                                    <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Country" class="info-social-links">Country</label>
                                <div class="info-description">
                                    <input name="country" type="text" class="form-control" id="Country">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Address" class="info-social-links">Address</label>
                                <div class="info-description">
                                    <input name="address" type="text" class="form-control" id="Address">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Phone" class="info-social-links">Contact Number</label>
                                <div class="info-description">
                                    <input name="contact_number" type="text" class="form-control" id="Phone">
                                </div>
                            </div>

                            <input type="submit" value="Save Changes" name="submit-info" class="submit-btn btn-primary">

                        </form>

                    </div>

                    <div class="profile-change-password" id="profile-change-password">

                        <form method="POST" action="">

                            <div class="change-password">
                                <label for="currentPassword" class="change-password-content">Current Password</label>
                                <div class="change-password-content-input">
                                    <input name="current-password" type="password" class="form-control" id="currentPassword">
                                </div>
                            </div>

                            <div class="change-password">
                                <label for="newPassword" class="change-password-content">New Password</label>
                                <div class="change-password-content-input">
                                    <input name="new-password" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>

                            <div class="change-password">
                                <label for="renewPassword" class="change-password-content">Re-enter New Password</label>
                                <div class="change-password-content-input">
                                    <input name="confirm-new-password" type="password" class="form-control" id="renewPassword">
                                </div>
                            </div>

                            <input type="submit" value="Change Password" name="change-password" class="submit-btn btn-primary">

                        </form>

                    </div>

                </div>
            </div>

            <main class="notification" id="notification">
                <div class="head-title">
                    <div class="left">
                        <h1>Notification</h1>
                    </div>
                </div>

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
                                function getAllOrders($table, $user_email)
                                {
                                    global $conn;
                                    $query = "SELECT * FROM $table WHERE email = '$user_email' ";
                                    return mysqli_query($conn, $query);
                                }

                                if ($_SESSION['user_email']) {
                                    $user_email = $_SESSION['user_email'];
                                    $orders = getAllOrders("orders", $user_email);

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
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </section>
            </main>

            <?php include('./includes/footer.php'); ?>
            <!-- MAIN -->

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
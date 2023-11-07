<?php

@include('../config.php');

session_start();

if (!isset($_SESSION['user_name']) && ($_SESSION['user_email'])) {
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

                    <img src="../assets/images/nith-in-w1N1WmLDyHU-unsplash.jpg" alt="Profile" class="rounded-circle">
                    <h2><?php echo $_SESSION['user_name'] ?></h2>
                    <h3>Font End & Back End Developer</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>

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

                    <div class="profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="info-title">Full Name:</div>
                            <div class="info-content"><?php echo $_SESSION['user_name'] ?></div>
                        </div>

                        <div class="row">
                            <div class="info-title">Email:</div>
                            <div class="info-content"><?php echo $_SESSION['user_email'] ?></div>
                        </div>

                        <div class="row">
                            <div class="info-title">Country:</div>
                            <div class="info-content">USA</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Address:</div>
                            <div class="info-content">A108 Adam Street, New York, NY 535022</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Phone:</div>
                            <div class="info-content">(436) 486-3538 x29071</div>
                        </div>

                    </div>

                    <div class="profile-edit" id="profile-edit">


                        <form action="" method="POST">

                            <div class="info-edit">
                                <label for="about" class="info-social-links">Profile Image</label>
                                <div class="info-description">
                                    <input name="profile-img" type="file" class="form-control" id="about" style="height: 50px">
                                </div>
                            </div>

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
                                    <input name="phone" type="text" class="form-control" id="Phone">
                                </div>
                            </div>

                            <input type="submit" value="Save Changes" name="submit" class="submit-btn btn-primary">

                        </form>

                    </div>

                    <div class="profile-change-password" id="profile-change-password">

                        <form>

                            <div class="change-password">
                                <label for="currentPassword" class="change-password-content">Current Password</label>
                                <div class="change-password-content-input">
                                    <input name="password" type="password" class="form-control" id="currentPassword">
                                </div>
                            </div>

                            <div class="change-password">
                                <label for="newPassword" class="change-password-content">New Password</label>
                                <div class="change-password-content-input">
                                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>

                            <div class="change-password">
                                <label for="renewPassword" class="change-password-content">Re-enter New Password</label>
                                <div class="change-password-content-input">
                                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                </div>
                            </div>

                            <input type="submit" value="Change Password" name="submit" class="submit-btn btn-primary">

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

                                function getAll($table)
                                {
                                    global $conn;
                                    $query = "SELECT * FROM $table";
                                    return mysqli_query($conn, $query);
                                }

                                $orders = getAll("orders");

                                if ($_SESSION['user_name']) {
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
</body>

</html>
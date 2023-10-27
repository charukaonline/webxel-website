<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name']) && ($_SESSION['admin_email'])) {
    header('location: /login_user_and_admin_page/login_form.php');
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $secondary_email = mysqli_real_escape_string($conn, $_POST['secondary-email']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $job = mysqli_real_escape_string($conn, $_POST['job']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $current_admin = $_SESSION['admin_name'];
    $select_from_info = "SELECT * FROM profile_details WHERE name = '$current_admin'";

    $result_for_info = mysqli_query($conn, $select_from_info);

    if (mysqli_num_rows($result_for_info) > 0) {
        $error[] = 'Can not update database';
    }
    else {
        $insert_to_info = "INSERT INTO profile_details (name, secondary_email, about, company, job, country, address, phone_number) VALUES ('$name', '$secondary_email', '$company', '$job', '$country', '$address', '$phone')";
        mysqli_query($conn, $insert_to_info);
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

    <link rel="stylesheet" href="../assets/css/admin.css">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>WEBXEL - Admin Profile</title>
</head>

<body>

    <section class="admin-profile">

        <?php include('./includes/sidebar.php'); ?>

        <!-- CONTENT -->
        <section id="content">

            <?php include('./includes/navbar.php'); ?>

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Admin Profile</h1>
                    </div>
                </div>

                <div class="profile-card">

                    <img src="../assets/images/nith-in-w1N1WmLDyHU-unsplash.jpg" alt="Profile" class="rounded-circle">
                    <h2><?php echo $_SESSION['admin_name'] ?></h2>
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
                            <div class="info-content"><?php echo $_SESSION['admin_name'] ?></div>
                        </div>

                        <div class="row">
                            <div class="info-title">Company:</div>
                            <div class="info-content">Lueilwitz, Wisoky and Leuschke</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Job:</div>
                            <div class="info-content">Web Designer</div>
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

                        <div class="row">
                            <div class="info-title">Email:</div>
                            <div class="info-content"><?php echo $_SESSION['admin_email'] ?></div>
                        </div>

                        <div class="row">
                            <div class="info-title">Secondary Email:</div>
                            <div class="info-content">sanojaminda@gmail.com</div>
                        </div>

                    </div>

                    <div class="profile-edit" id="profile-edit">


                        <form>
                            <!-- <div class="upload-profile-img">
                            <label for="profileImage" class="profile-img">Profile Image</label>
                                <div class="info-description">
                                    <img src="../assets/images/" alt="Profile">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bx bx-upload"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bx bx-trash"></i></a>
                                    </div>
                                </div>
                            </div> -->

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
                                <label for="company" class="info-social-links">Company</label>
                                <div class="info-description">
                                    <input name="company" type="text" class="form-control" id="company">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Job" class="info-social-links">Job</label>
                                <div class="info-description">
                                    <input name="job" type="text" class="form-control" id="Job">
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

                            <div class="info-edit">
                                <label for="Email" class="info-social-links">Secondary Email</label>
                                <div class="info-description">
                                    <input name="secondary-email" type="secondary-email" class="form-control" id="Email">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Twitter" class="info-social-links">Twitter Profile</label>
                                <div class="info-description">
                                    <input name="twitter" type="text" class="form-control" id="Twitter">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Facebook" class="info-social-links">Facebook Profile</label>
                                <div class="info-description">
                                    <input name="facebook" type="text" class="form-control" id="Facebook">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Instagram" class="info-social-links">Instagram Profile</label>
                                <div class="info-description">
                                    <input name="instagram" type="text" class="form-control" id="Instagram">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Linkedin" class="info-social-links">Linkedin Profile</label>
                                <div class="info-description">
                                    <input name="linkedin" type="text" class="form-control" id="Linkedin">
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

            <?php include('./includes/footer.php'); ?>
            </div>
            </main>
            <!-- MAIN -->

        </section>
    </section>

    <!-- <script src="../assets/js/admin.js"></script> -->

</body>

</html>
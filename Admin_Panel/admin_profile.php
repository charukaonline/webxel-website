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

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assets/css/admin.css">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>WEBXEL - Admin Profile</title>
</head>

<body>
    <!--
    <main class="admin-profile">

        <div class="pagetitle">
            <h1>Admin Profile</h1>
        </div> 

        <section class="section profile">
            <div class="row">

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="infot-title ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"></div>
                                    </div>

                                    <div class="row">
                                        <div class="infot-title">Company</div>
                                        <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">USA</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">sanojaminda@gmail.com</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    
                                    <form>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="info-social-links">Profile Image</label>
                                            <div class="info-description">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="info-social-links">Full Name</label>
                                            <div class="info-description">
                                                <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $row['name']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="about" class="info-social-links">About</label>
                                            <div class="info-description">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="info-social-links">Company</label>
                                            <div class="info-description">
                                                <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="info-social-links">Job</label>
                                            <div class="info-description">
                                                <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="info-social-links">Country</label>
                                            <div class="info-description">
                                                <input name="country" type="text" class="form-control" id="Country" value="USA">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="info-social-links">Address</label>
                                            <div class="info-description">
                                                <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="info-social-links">Phone</label>
                                            <div class="info-description">
                                                <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="info-social-links">Email</label>
                                            <div class="info-description">
                                                <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Twitter" class="info-social-links">Twitter Profile</label>
                                            <div class="info-description">
                                                <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Facebook" class="info-social-links">Facebook Profile</label>
                                            <div class="info-description">
                                                <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Instagram" class="info-social-links">Instagram Profile</label>
                                            <div class="info-description">
                                                <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Linkedin" class="info-social-links">Linkedin Profile</label>
                                            <div class="info-description">
                                                <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="info-social-links">Current Password</label>
                                            <div class="info-description">
                                                <input name="password" type="password" class="form-control" id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="info-social-links">New Password</label>
                                            <div class="info-description">
                                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="info-social-links">Re-enter New Password</label>
                                            <div class="info-description">
                                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>-->

    <section class="admin-profile">

        <?php include('./includes/sidebar.php'); ?>

        <!-- CONTENT -->
        <section id="content">
            <!-- NAVBAR -->
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
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>

                </ul>
                <div class="info-card-content">

                    <div class="profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="info-title">Full Name</div>
                            <div class="info-content">Sanoj Aminda</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Company</div>
                            <div class="info-content">Lueilwitz, Wisoky and Leuschke</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Job</div>
                            <div class="info-content">Web Designer</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Country</div>
                            <div class="info-content">USA</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Address</div>
                            <div class="info-content">A108 Adam Street, New York, NY 535022</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Phone</div>
                            <div class="info-content">(436) 486-3538 x29071</div>
                        </div>

                        <div class="row">
                            <div class="info-title">Email</div>
                            <div class="info-content">sanojaminda@gmail.com</div>
                        </div>

                    </div>

                    <div class="profile-edit" id="profile-edit">


                        <form>
                            <div class="upload-profile-img">
                                <label for="profileImage" class="profile-img">Profile Image</label>
                                <div class="info-description">
                                    <img src="../assets/images/" alt="Profile">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bx bx-upload"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bx bx-trash"></i></a>
                                    </div>
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
                                    <input name="company" type="text" class="form-control" id="company" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Job" class="info-social-links">Job</label>
                                <div class="info-description">
                                    <input name="job" type="text" class="form-control" id="Job" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Country" class="info-social-links">Country</label>
                                <div class="info-description">
                                    <input name="country" type="text" class="form-control" id="Country" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Address" class="info-social-links">Address</label>
                                <div class="info-description">
                                    <input name="address" type="text" class="form-control" id="Address" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Phone" class="info-social-links">Contact Number</label>
                                <div class="info-description">
                                    <input name="phone" type="text" class="form-control" id="Phone" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Email" class="info-social-links">Secondary Email</label>
                                <div class="info-description">
                                    <input name="email" type="email" class="form-control" id="Email" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Twitter" class="info-social-links">Twitter Profile</label>
                                <div class="info-description">
                                    <input name="twitter" type="text" class="form-control" id="Twitter" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Facebook" class="info-social-links">Facebook Profile</label>
                                <div class="info-description">
                                    <input name="facebook" type="text" class="form-control" id="Facebook" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Instagram" class="info-social-links">Instagram Profile</label>
                                <div class="info-description">
                                    <input name="instagram" type="text" class="form-control" id="Instagram" value="">
                                </div>
                            </div>

                            <div class="info-edit">
                                <label for="Linkedin" class="info-social-links">Linkedin Profile</label>
                                <div class="info-description">
                                    <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                </div>
                            </div>

                            <div class="submit-btn">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
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

                            <div class="change-password-content-submit">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

            <?php include('./includes/footer.php'); ?>
            </div>
            </main>
            <!-- MAIN -->

        </section>

        <script src="../assets/js/admin.js"></script>

</body>

</html>
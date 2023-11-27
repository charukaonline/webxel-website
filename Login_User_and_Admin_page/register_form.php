<?php

@include '../config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user-type'];

    $select_from_register = "SELECT * FROM login_and_register WHERE email = '$email' && password = '$pass' ";

    $result_for_register = mysqli_query($conn, $select_from_register);

    if (mysqli_num_rows($result_for_register) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not matched!';
        } else {
            $insert_to_register = "INSERT INTO login_and_register (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert_to_register);

            if ($insert_to_info && $insert_to_register) {
                $error[] = 'Register successfully!';
                header('location:login_form.php');
            } else {
                $error[] = 'Something went wrong!';
                header('location:login_form.php');
            }
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/register_and_login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - Register form</title>
    <link rel="icon" type="image/png" href="../assets/images/logo2.jpg">

</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/655b9f0991e5c13bb5b1f4be/1hfmuafig';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>

    <?php include('../includes/navbar.php'); ?>

    <!-- Register form section start -->
    <section class="register-form-container">

        <form action="" method="post">

            <h3>Create Your Account</h3>

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <div class="name">
                <input type="text" name="name" placeholder="Name" required>
                <span><i class='bx bxs-user'></i></span>
            </div>

            <div class="email">
                <input type="email" name="email" placeholder="Email" required>
                <span><i class='bx bxs-envelope'></i></span>
            </div>

            <div class="password">
                <input type="password" name="password" id="password-input" placeholder="Password" required>
                <span id="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>

            <div class="confirm-password">
                <input type="password" name="cpassword" id="confirm-password-input" placeholder="Confirm password" required>
                <span id="toggle-confirm-password" onclick="toggleConfirmPassword()"><i class="fas fa-eye"></i></span>
            </div>

            <input type="submit" name="submit" value="register now" class="form-btn">

            <p>already have an account? <a href="login_form.php">Sign In Now</a></p>

        </form>

    </section>
    <!-- Register form section end -->

    <!-- Footer section start -->
    <footer class="footer">
        <div class="footer_wrapper">
            <ul>
                <li>1. New services coming late 2024.</li>
                <li>2. We've squashed some pesky bugs to ensure a smoother and more reliable experience for all users.</li>
                <li>3. Our team has worked on optimizing various aspects of W&#x039E;&#x042;X&#x039E;L, resulting in faster load times and improved efficiency.</li>
            </ul>

            <div class="footer-copyright">
                <p>Copyright © W&#x039E;&#x042;X&#x039E;L 2023</p>
            </div>

        </div>
    </footer>
    <!-- Footer section end -->

    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/register_and_login.js"></script>

</body>

</html>
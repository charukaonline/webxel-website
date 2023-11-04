<?php

    session_start();

    if(isset($_SESSION['admin_name']) || isset($_SESSION['user_name'])) {
        if(isset($_SESSION['admin_name'])) {
            header('location: /admin_panel/admin_dashboard.php');
        } 
        elseif(isset($_SESSION['user_name'])) {
                header('location: /User_Panel/user_dashboard.php');
        }
    } else {
        include '../config.php';

        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pass = md5($_POST['password']);
            $cpass = md5($_POST['cpassword']);
            $user_type = $_POST['user-type'];

            $select_from_register = "SELECT * FROM login_and_register WHERE email = '$email' && password = '$pass' ";

            $result_for_register = mysqli_query($conn, $select_from_register);

            if(mysqli_num_rows($result_for_register) > 0){
                $row = mysqli_fetch_array($result_for_register);

                if($row['user_type'] == 'admin') {
                    
                    $_SESSION['admin_name'] = $row['name'];
                    $_SESSION['admin_email'] = $row['email'];
                    header('location: /admin_panel/admin_dashboard.php');    
                
                }
                elseif($row['user_type'] == '') {
                
                    $_SESSION['user_name'] = $row['name'];
                    header('location: /User_Panel/user_dashboard.php');    
                
                }
            }
            else {
                $error[] = 'incorrect email or password!';
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/register_and_login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - Login form</title>

</head>
<body>

    <?php include('../includes/navbar.php'); ?>
    
    <!-- Sign in form section start -->
    <section class="signin-form-container">

        <form action="" method="post">

            <h3>Sign in to W&#x039E;&#x042;X&#x039E;L</h3>

            <?php
                if(isset($error)) {
                    foreach($error as $error) {
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password">

            <input type="submit" name="submit" value="Sign in" class="form-btn">

            <div class="method">
                <a href="#" class="method-action">
                    <i class='bx bxl-google'></i>
                    <span>Sign in with Google</span>
                </a>
            </div>

            <p>Don't have an account? <a href="register_form.php">Create Now</a></p>

        </form>

    </section>
    <!-- Sign in form section end -->

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

</body>
</html>
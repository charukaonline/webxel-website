<?php
    
    @include '../config.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user-type'];

        $select_from_register = "SELECT * FROM login_and_register WHERE email = '$email' && password = '$pass' ";

        $result_for_register = mysqli_query($conn, $select_from_register);

        if(mysqli_num_rows($result_for_register) > 0){
            $error[] = 'User already exists!';
        }
        else {
            if($pass != $cpass) {
                $error[] = 'Password not matched!';
            }
            else {
                $insert_to_register = "INSERT INTO login_and_register (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";
                mysqli_query($conn, $insert_to_register);

                if ($insert_to_info && $insert_to_register) {
                    $error[] = 'Register successfully!';
                    header('location:login_form.php');
                }
                else {
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

    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/register_and_login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - Register form</title>
    <link rel="icon" type="image/png" href="../assets/images/logo2.jpg">

</head>
<body>

    <!-- Header section start -->
    <header>

        <a href="/index.php" class="logo">W&#x039E;&#x042;X&#x039E;L</a>

        <nav class="navbar">
            <a href="/index.php">Home</a>
            <a href="#" id="service">Services</a>
            <a href="#">Contact Us</a>
            <a href="/about_us.php">About Us</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="/login_user_and_admin_page/login_form.php"><i class="fas fa-user" id="login-icon"></i></a>
        </div>

    </header>
    <!-- Header section end -->

    <!--Search form start-->
    <form action="" id="search-form">
        <input type="search" placeholder="Search here..." name="" id="search-box">
        <button type="submit"><label for="search-box" class="fas fa-search"></label></button>
        <i class="fas fa-times" id="search-form-close"></i>
    </form>
    <!-- Search form end -->
    
    <!-- Register form section start -->
    <section class="register-form-container">

        <form action="" method="post">

            <h3>Create Your Account</h3>

            <?php
                if(isset($error)) {
                    foreach($error as $error) {
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>

            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Confirm password" required>
            <!-- If there are any admins, open the code that commented on below  -->
            <!-- <select name="user-type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select> -->

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

</body>
</html>
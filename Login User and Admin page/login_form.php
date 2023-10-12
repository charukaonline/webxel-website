<?php
    
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user-type'];

        $select = "SELECT * FROM login_and_register WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin') {
                
                $_SESSION['admin_name'] = $row['name'];
                header('location: /Admin panel/admin_page.php');    
            
            }
            elseif($row['user_type'] == 'user') {
            
                $_SESSION['user_name'] = $row['name'];
                header('location: /User panel/user_page.php');    
            
            }
        }
        else {
            $error[] = 'incorrect email or password!';
        }
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

    <link rel="stylesheet" href="/assets/css/style_1.css">
    <link rel="stylesheet" href="/assets/css/register_and_login.css">

</head>
<body>

    <!-- Header section start -->
    <header>

        <a href="../index.html" class="logo">W&#x039E;&#x042;X&#x039E;L</a>

        <nav class="navbar">
            <a href="../index.html">Home</a>
            <a href="#" id="service">Services</a>
            <a href="#">Contact Us</a>
            <a href="#">About Us</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="/User Register and Sign In forms/signin_form.html"><i class="fas fa-user" id="login-icon"></i></a>
        </div>

    </header>
    <!-- Header section end -->

    <!-- Service form start -->
    <form action="" id="service-form">
        <i class="fas fa-times" id="service-form-close"></i>
        <label for="">Web Design and Development</label>
        <label for="">Graphic Design</label>
        <label for="">App Development</label>
        <label for="">Video and Animation</label>
        <label for="">Content writing & translation</label>
        <label for="">Marketing & Advertising</label>
    </form>
    <!-- Service form end -->

    <!--Search form start-->
    <form action="" id="search-form">
        <input type="search" placeholder="Search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label> 
        <i class="fas fa-times" id="search-form-close"></i>
    </form>
    <!-- Search form end -->
    
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

</body>
</html>
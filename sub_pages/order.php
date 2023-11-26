<?php

@include '../config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location: ../login_user_and_admin_page/login_form.php');
}

if (isset($_POST['order-btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = $_POST['number'];
    $service_type = $_POST['service_type'];

    // $file = isset($_POST['service-file-upload']) ? $_POST['service-file-upload'] : '';
    // $file = $_FILES['service-file-upload'];
    // $path = "./uploads";
    // $file_ext = pathinfo($file, PATHINFO_EXTENSION);
    // $file_name = time() . '.' . $file_ext;

    $order_description = mysqli_real_escape_string($conn, $_POST['order-description']);

    $insert_to_order = "INSERT INTO orders (name, email, number, service_type, description, order_status) VALUES ('$name', '$email', '$contact_number', '$service_type', '$order_description', 'Pending...')";
    $insert_to_order_run = mysqli_query($conn, $insert_to_order);

    if ($insert_to_order_run) {
        // move_uploaded_file($_FILES['file']['tmp_name'], $path.'/'.$file_name);
        header('location: ./order.php');
        alert("Order sent Successfully.");
        exit();
    } else {
        header('location: ./web_develop.php');
        alert("Something Went Wrong.");
    }
}

function alert($message)
{
    $_SESSION['message'] = $message;
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="WEBXEL, webxel, IT Service">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />

    <link rel="stylesheet" href="../assets/css/sub-pages/order.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <!-- <link rel="stylesheet" href="/assets/css/index.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - Order</title>
    <link rel="icon" href="/assets/images/logo2.jpg" type="image/jpg">
</head>

<body>

    <?php include('../includes/navbar.php'); ?>

    <section class="order-form-container">

        <form action="" method="POST">

            <h3>Place Order Now</h3>

            <div class="name">
                <input type="text" name="name" placeholder="Enter your name" required>
                <!-- <span><i class='bx bxs-user'></i></span> -->
            </div>

            <div class="email">
                <input type="email" name="email" placeholder="Enter Email" required>
                <!-- <span><i class='bx bxs-envelope'></i></span> -->
            </div>

            <div class="number">
                <input type="text" name="phone-number" placeholder="Enter contact number" required>
                <!-- <i class='bx bxs-phone'></i> -->
            </div>

            <div class="option">
                <label for="services">Choose a Service Type: </label>
                <select name="service_type" id="services">
                    <option value="web design & development">Web design & Development</option>
                    <option value="marketing & advertising">Marketing & Advertising</option>
                    <option value="mobile app development">Mobile app Development</option>
                    <option value="graphic Design">Graphic Design</option>
                    <option value="video and animation">Video and Animation</option>
                    <option value="content writing & translation">Content writing & Translation</option>
                </select>
                <!-- <i class='bx bx-menu'></i> -->
            </div>

            <div class="desc">
                <textarea name="order-description" placeholder="Describe the Service that you want..." required></textarea>
            </div>

            <!-- <div>
                <input type="file" name="service-file-upload" placeholder="Upload file">
                <span>If you have to upload any files to related order Upload here... (ex:- photos, pdf)</span>
            </div> -->

            <input type="submit" value="Place Order" name="order-btn" class="form-btn">
        </form>

    </section>

    <?php include('../includes/footer.php'); ?>

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
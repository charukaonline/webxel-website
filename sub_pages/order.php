<?php

@include '../config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location: ../Login_User_and_Admin_page/login_form.php');
}

if (isset($_POST['order-btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $service_type = $_POST['service_type'];

    // $pdfContent = file_get_contents('service-upload-file');
    // $escapedPdfContent = $conn->real_escape_string($pdfContent);

    $order_description = mysqli_real_escape_string($conn, $_POST['order-description']);

    $select_from_order = "SELECT * FROM orders WHERE email = '$email' ";

    $result_for_order = mysqli_query($conn, $select_from_order);

    if (mysqli_num_rows($result_for_order) > 0) {
        $error[] = 'Order not place successfully';
    } else {

        $insert_to_order = "INSERT INTO orders (name, email, contact_number, service_type, description) VALUES ('$name', '$email', '$contact_number', '$service_type', '$order_description)";
        mysqli_query($conn, $insert_to_order);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBXEL - Order</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="text" name="phone-number" placeholder="Enter contact number" required>

        <label for="services">Choose a Service Type:</label>
        <select name="service_type" id="services">
            <option value="web design & development">Web design & development</option>
            <option value="marketing & advertising">Marketing & advertising</option>
            <option value="mobile app development">Mobile app development</option>
            <option value="graphic Design">Graphic Design</option>
            <option value="video and animation">Video and Animation</option>
            <option value="content writing & translation">Content writing & Translation</option>
        </select>

        <textarea name="order-description" placeholder="Describe the Service that you want..." required></textarea>
        <div>
            <input type="file" name="service-file-upload" placeholder="Upload file">
            <span>If you have to upload any files to related order Upload here... (ex:- photos, pdf)</span>
        </div>

        <input type="submit" value="Place Order" name="order-btn">
    </form>

</body>

</html>
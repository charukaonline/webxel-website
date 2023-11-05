<?php

@include('./config.php');

session_start();

if (isset($_POST['order-btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
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
        <select name="services" id="services">
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
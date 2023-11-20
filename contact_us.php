<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// if (isset($_POST['contact-btn'])) {
//   $name = $_POST['contact-form-name'];
//   $email = $_POST['contact-form-email'];
//   $subject = $_POST['contact-form-subject'];
//   $msg = $_POST['contact-form-msg'];

//   require "vendor/autoload.php";

//   $mail = new PHPMailer(true);

//   $mail->isSMTP();
//   $mail->SMTPAuth = true;

//   $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
//   $mail->Debugoutput = function ($str, $level) {
//     echo "debug level $level; message: $str";
//   };


//   $mail->Host = "smtp.example.com";
//   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//   $mail->Port = 587;

//   $mail->Username = "you@example.com";
//   $mail->Password = "password";

//   $mail->setFrom($email, $name);
//   $mail->addAddress("sanojaminda@gmail.com", "Sanoj");

//   $mail->Subject = $subject;
//   $mail->Body = $msg;

//   $mail->send();

//   try {
//     $mail->send();
//     echo 'Message has been sent';
//   } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//   }
// }

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

  <link rel="stylesheet" href="./assets/css/contact.css">
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">

  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

  <title>WEBXEL - Contact Us</title>
  <link rel="icon" type="image/png" href="./assets/images/logo2.jpg">
</head>

<body>

  <?php include('./includes/navbar.php') ?>

  <section>

    <div class="section-header">
      <div class="container">
        <!-- <h2>Contact Us</h2> -->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos eaque doloremque, nulla mollitia facilis temporibus ullam voluptas nostrum consequatur? Fugiat vitae sint quo est eveniet perspiciatis eum asperiores ipsam.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>

            <div class="contact-info-content">
              <h4>Address</h4>
              <p>Negombo Road,<br /> Pannala, Kurunegala, <br />60160</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
            <a href="tel:+94712345678"><i class="fas fa-phone"></i></a>
            </div>

            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>+94712345678</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <a href="mailto:info@webxel.xyz"><i class="fas fa-envelope"></i></a>
            </div>

            <div class="contact-info-content">
              <h4>Email</h4>
              <p>info@webxel.xyz</p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form action="" id="contact-form" method="POST">
            <h2>Leave us a message.</h2>
            <div class="input-box">
              <input type="text" required="true" name="contact-form-name" placeholder="Full Name">
            </div>

            <div class="input-box">
              <input type="email" required="true" name="contact-form-email" placeholder="Email">
            </div>

            <div class="input-box">
              <input type="text" required="true" name="contact-form-subject" placeholder="Subject">
            </div>

            <div class="input-box">
              <textarea required="true" name="contact-form-msg" placeholder="Type your Message..."></textarea>
            </div>

            <div class="input-box">
              <input type="submit" value="Send" name="contact-btn">
            </div>

          </form>
        </div>

      </div>
    </div>

  </section>

  <script src="./assets/js/index.js"></script>

</body>

</html>
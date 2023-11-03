<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="WEBXEL, webxel, Technology Service, Technical Support, IT Service, web developing">
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="./assets/css/contact.css">
  <link rel="stylesheet" href="./assets/css/index.css">

  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

  <title>WEBXEL - Contact Us</title>
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
              <i class="fas fa-phone"></i>
            </div>

            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>123456789</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <a href="mailto:sanojaminda@gmail.com"><i class="fas fa-envelope"></i></a>
            </div>

            <div class="contact-info-content">
              <h4>Email</h4>
              <p>info@webxel.xyz</p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form action="" id="contact-form" method="POST">
            <h2>Let's talk</h2>
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

</body>

</html>
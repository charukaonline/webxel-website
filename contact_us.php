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

          <form id="form">

            <h2>Leave us a message.</h2>

            <div class="field">
              <label for="subject">Subject:</label>
              <input type="text" name="subject" id="subject" required>
            </div>

            <div class="field">
              <label for="from">Email Address:</label>
              <input type="text" name="from" id="from" required>
            </div>

            <div class="field">
              <label for="message">Message:</label>
              <input type="text" name="message" id="message" required>
            </div>

            <div class="field">
              <label for="sendername">Name:</label>
              <input type="text" name="sendername" id="sendername" required>
            </div>

            <input type="submit" id="button" value="Send Email">
          </form>
        </div>

      </div>
    </div>

  </section>

  <script src="./assets/js/index.js"></script>
  <script src="/assets/js/contact.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <script type="text/javascript">
    emailjs.init('IgUc1ffbkghFmeCOK')
  </script>

</body>

</html>
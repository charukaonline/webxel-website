<?php

	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company Name</title>
    <link rel="stylesheet" href="../assets/css/graphic_design.css">
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>

    <?php include('../includes/navbar.php'); ?>

    <section id="hero">
        <h1>Welcome to WEBXEL</h1>
        <p>We provide top-notch graphic design services.</p>
        <a href="#contact">
            <button class="cta-button">Get in touch</button>
        </a>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>At WEBEXLL, we are passionate about turning your digital dreams into reality. Established
            with a vision
            to provide cutting-edge web development, photography, and videography services, we pride ourselves on
            delivering stunning, high-quality results that capture the essence of your brand.

            Our web development team specializes in creating modern and responsive websites that not only look great
            but also perform exceptionally well. Whether you need a personal blog, an e-commerce platform, or a
            corporate website, we have the expertise to bring your vision to life.

            Our photography and videography services are designed to capture the beauty and uniqueness of every
            moment. From professional photoshoots to cinematic videos, we have the skills and equipment to make your
            memories truly unforgettable.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-card">
                <img src="logo_designing 2.jpg" alt="Logo Design">
                <h3>Logo Design</h3>
                <p>We create unique and memorable logos tailored to your brand.</p>
            </div>
            <!-- Add other service cards similarly -->
        </div>
    </section>

    <?php include('../includes/footer.php'); ?>

    <!-- <script>
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });

    function smoothScroll(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
        });
    }

    const form = document.querySelector('form');
    form.addEventListener('submit', submitForm);

    function submitForm(e) {
        e.preventDefault();
    }
</script> -->
</body>

</html>
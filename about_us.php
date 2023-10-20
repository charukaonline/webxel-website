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

    <link rel="stylesheet" href="/assets/css/about.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - About</title>
</head>

<body>

    <?php include ('navbar.php'); ?>

    <!-- About section start -->
    <section class="about">

        <div class="intro">
            <h1>About Us </h1>
            <h3>Where Creativity Meets Technology.</h3>
        </div>

        <div class="about-desc">
            At W&#x039E;&#x042;X&#x039E;L, we are passionate about turning your digital dreams into reality. Established
            with a vision
            to provide cutting-edge web development, photography, and videography services, we pride ourselves on
            delivering stunning, high-quality results that capture the essence of your brand.

            Our web development team specializes in creating modern and responsive websites that not only look great
            but also perform exceptionally well. Whether you need a personal blog, an e-commerce platform, or a
            corporate website, we have the expertise to bring your vision to life.

            Our photography and videography services are designed to capture the beauty and uniqueness of every
            moment. From professional photoshoots to cinematic videos, we have the skills and equipment to make your
            memories truly unforgettable.
        </div>

        <div class="content">

            <h1 class="heading">Our Team</h1>

            <div class="flex-container">

                <div class="flex-box1">
                    <img src="image/c.jpg" alt="Charuka Karunarathna">

                    <h2>Charuka Karunarathna</h2>
                    <p>Front End & Back End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>

                </div>

                <div class="flex-box2">
                    <img src="/assets/image/nith-in-w1N1WmLDyHU-unsplash.jpg" alt="Don Sanoj">
                    <h2>Don Sanoj</h2>
                    <p>Front End & Back End Developer</p>
                    <p>sanojaminda@gmail.com</p>
                    <button class="button">Contact</button>

                </div>

                <div class="flex-box3">
                    <img src="/assets/image/albert-dera-ILip77SbmOE-unsplash.jpg" alt="Shayan Hennedige">
                    <h2>Shayan Hennedige</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

            </div>

            <div class="flex-container">

                <div class="flex-box4">
                    <img src="image/oliver-ragfelt-khV4fTy6-D8-unsplash.jpg" alt="Thanuka Rathnayake">
                    <h2>Thanuka Rathnayake</h2>
                    <p>Front End & Back End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

                <div class="flex-box5">
                    <img src="image/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg" alt="Mhateesha NSBM">
                    <h2>Mhateesha NSBM</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

                <div class="flex-box6">
                    <img src="image/clarisse-meyer-x9cXI2eQLBw-unsplash.jpg" alt="Dulvanya">
                    <h2>Dulvanya</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

            </div>

            <div class="flex-container">

                <div class="flex-box7">
                    <img src="image/jim-flores-dE6c9RZoyL8-unsplash.jpg" alt="Hasini">
                    <h2>Hasini</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

                <div class="flex-box8">
                    <img src="image/pj-go-arPZr6tqsoA-unsplash.jpg" alt="Tharushi Perera">
                    <h2>Samudi</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>

                <div class="flex-box9">
                    <img src="image/slav-romanov-BrEAp01_m5w-unsplash.jpg" alt="Rosi">
                    <h2>Tharushi Perera</h2>
                    <p>Front End Developer</p>
                    <p>@gmail.com</p>
                    <button class="button">Contact</button>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <?php include ('footer.php'); ?>

    <!-- <script>
        document.querySelector('.button').addEventListener('click', () => {
            document.querySelector('.footer-links').classList.add('active');
        });

        document.querySelector('.footer-links').addEventListener('click', (e) => {
            if (e.target.classList.contains('footer-links-column-title')) {
                e.target.nextElementSibling.classList.toggle('active');
            }
        });

    </script> -->


    <!-- Footer section end -->

</body>

</html>

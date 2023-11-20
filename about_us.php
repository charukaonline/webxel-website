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

    <link rel="stylesheet" href="/assets/css/about.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - About</title>
    <link rel="icon" type="image/png" href="./assets/images/logo2.jpg">
</head>

<body>

    <!--Header section start-->
    <header>

        <a href="index.php" class="logo">W&#x039E;&#x042;X&#x039E;L</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="contact_us.php">Contact Us</a>
            <a href="about_us.php">About Us</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="/login_user_and_admin_page/login_form.php"><i class="fas fa-user" id="login-icon"></i></a>
        </div>

    </header>
    <!--Header section end-->

    <!--Search form start-->
    <form action="/search_result.php" id="search-form" method="GET">
        <input type="search" placeholder="Search here..." name="" id="search-box">
        <button type="submit"><label for="search-box" class="fas fa-search"></label></button>
        <i class="fas fa-times" id="search-form-close"></i>
    </form>
    <!-- Search form end -->

    <section class="about-section-1">
        <div class="intro">
            <h1>About Us </h1>
            <h3>Where Creativity Meets Technology.</h3>
        </div>

        <div class="about-desc1">
            At W&#x039E;&#x042;X&#x039E;L, we are passionate about turning your digital dreams into reality. Established
            with a vision
            to provide <br> cutting-edge web development, photography, and videography services, we pride ourselves on
            delivering stunning, high-quality results that capture the essence of your brand.
        </div>
    </section>

    <section class="about-section-2">
        <div class="about-desc2">
            <p class="content1">Our web development team specializes in creating modern and responsive websites that not
                only look great
                but also perform exceptionally well. Whether you need a personal blog, an e-commerce platform, or a
                corporate website, we have the expertise to bring your vision to life. <br></p>

            <p class="content2">Our photography and videography services are designed to capture the beauty and
                uniqueness of every
                moment. <br> From professional photoshoots to cinematic videos, we have the skills and equipment to make
                your
                memories truly unforgettable.</p>
        </div>
    </section>

    <section class="team" id="team">

        <h2 class="heading">Our Team</h2>

        <div class="team-container">

            <div class="team-member">
                <img src="assets/images/about_us/profiles/charuka.jpg" alt="Charuka">
                <div class="team-member-info">
                    <h2>Charuka Karunarathna</h2>
                    <p>Full Stack Developer</p>
                    <a href="https://github.com/charukaonline"><i class='bx bxl-github'></i></a>
                    <a href="https://linkedin.com/in/charukaonline"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://x.com/CharukaOnline"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/sanoj.jpg" alt="Sanoj">
                <div class="team-member-info">
                    <h2>Sanoj Aminda</h2>
                    <p>Full Stack Developer</p>
                    <a href="https://github.com/DonSanoj"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/sanoj-aminda/"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://twitter.com/Sanoj1128"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/shayan.jpg" alt="Shayan">
                <div class="team-member-info">
                    <h2>Shayan Hennedige</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/thanuka.jpg" alt="Thanuka">
                <div class="team-member-info">
                    <h2>Thanuka Rathnayake</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/dulvanya.jpg" alt="Dulvanya">
                <div class="team-member-info">
                    <h2>Nethma Dulvanya</h2>
                    <p>Front End Developer</p>
                    <a href="https://github.com/Dulvanya"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/nethma-dulvanya-26b198270/"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/hasini.jpg" alt="Hasini">
                <div class="team-member-info">
                    <h2>Hasini Gunathilake</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/mathisha.jpg" alt="Mathisha">
                <div class="team-member-info">
                    <h2>Dasun Mathisha</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/nethmi.jpg" alt="Nethmi">
                <div class="team-member-info">
                    <h2>Nethmi Pitawala</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="team-member">
                <img src="assets/images/about_us/profiles/samudi.jpg" alt="Samudi">
                <div class="team-member-info">
                    <h2>Samudi Gunawardana</h2>
                    <p>Front End Developer</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

        </div>

    </section>

    <section class="university">

        <div class="university-content">

            <h1>We are from NSBM Green University</h1>

            <div class="main-content">

                <div class="nsbm-image"><img src="/assets/images/NSBM.jpg" alt=""></div>

                <div class="description">

                    <p>NSBM Green University, the nation’s premier degree-awarding institute, is the first of its kind in South Asia. It is a government-owned self-financed institute that operates under the purview of the Ministry of Education. As a leading educational centre in the country,
                        NSBM has evolved into becoming a highly responsible higher education institute that offers unique opportunities and holistic education on par with international standards while promoting sustainable living.
                        NSBM offers a plethora of undergraduate and postgraduate degree programmes under five faculties: Business, Computing, Engineering, Science and Postgraduate & Professional Advancement. These study programmes at NSBM are either its own programmes recognied by the University Grants Commission and the Ministry of Higher Education or
                        world-class international programmes conducted in affiliation with top-ranked foreign universities such as University of Plymouth, UK, and Victoria University, Australia.
                        Focused on producing competent professionals and innovative entrepreneurs for the increasingly globalising world, NSBM nurtures its graduates to become productive citizens of society with their specialisation ranging in study fields such as
                        Business, Management, Computing, IT, Engineering, Science, Psychology, Nursing, Interior design, Quantity Surveying, Law and Multimedia.
                        Inspired by the vision of being Sri Lanka’s best-performing graduate school and being recognised internationally, NSBM currently achieves approximately 3000 new enrollments per year and houses above 11,000 students reading over 50 degree programmes under 4 faculties. Moreover, over the years,
                        NSBM Green University has gifted the nation with 14,000+ graduates and has proved its global presence with an alumni network spread all across the world.
                        Nestling on a 40-acre land amidst the greenery and serenity in Pitipana, Homagama, NSBM Green University, is an ultra-modern university complex constructed with state-of-the-art facilities and amenities that provides the perfect setting for high-quality teaching, learning and research.
                    </p>

                    <a href="https://www.nsbm.ac.lk/">Visit NSBM</a>

                </div>

            </div>

        </div>

    </section>

    <div class="space"></div>

    <!-- Footer section start -->
    <footer class="footer">
        <div class="footer_wrapper">
            <ul>
                <li>1. New services coming late 2024.</li>
                <li>2. We've squashed some pesky bugs to ensure a smoother and more reliable experience for all users.
                </li>
                <li>3. Our team has worked on optimizing various aspects of W&#x039E;&#x042;X&#x039E;L, resulting in
                    faster load times and improved efficiency.</li>
            </ul>

            <div class="footer_links">

                <div class="footer_links_column">
                    <div class="footer_links_column_title"><a href="index.php"><span>W&#x039E;&#x042;X&#x039E;L</span></a></div>
                    <div class="content">
                        <h3>Always ahead. <br> Always in style.</h3>
                    </div>
                </div>

                <div class="footer_links_column">
                    <div class="footer_links_column_title">Services</div>
                    <a href="#">Graphics & Design</a>
                    <a href="#">Web Development</a>
                    <a href="#">Application Development</a>
                    <a href="#">Video & Animation</a>
                    <a href="#">Content Writing</a>
                    <a href="#">Marketing & Advertising</a>
                </div>

                <div class="footer_links_column">
                    <div class="footer_links_column_title">About</div>
                    <a href="#team">Our Team</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>

                <div class="footer_links_column">
                    <div class="footer_links_column_title">Social Media</div>
                    <a href="https://github.com/charukaonline/webxel-website"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <hr>

            <div class="footer-copyright">
                <p>Copyright © W&#x039E;&#x042;X&#x039E;L 2023</p>
            </div>

    </footer>
    <!-- Footer section end -->

    <script src="./assets/js/about.js"></script>
    <script src="./assets/js/index.js"></script>

</body>

</html>
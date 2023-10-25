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

    <link rel="stylesheet" href="/assets/css/index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL</title>
</head>

<body>

    <?php include('navbar.php'); ?>

    <!-- Home section start -->
    <section class="home" id="home">

        <div class="intro">
            <h1>Discover the difference.</h1>
            <h3>Always ahead. Always in style.</h3>
            <a href="#">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>
        </div>

        <!-- Chat Bot section start -->
        <div class="chat-btn">
            <button id="init">START CHAT</button>
        </div>
        <div id="chat-section">
            <div class="child" id="chatbot">
                <div class="header">
                    <div class="h-child">
                        <img src="/assets/images/chatbot (1).png" alt="avatar" id="avatar">
                        <div>
                            <span class="name">Chatbot</span>
                            <br>
                            <span style="color:lawngreen">online</span>
                        </div>
                    </div>
                    <div>
                        <button class="refBtn"><i class="fa fa-refresh" onclick="initChat()"></i></button>
                    </div>
                </div>

                <div id="chat-box">

                </div>
                <div class="chat-footer">
                    <span>powered by @W&#x039E;&#x042;X&#x039E;L</span>
                </div>
            </div>
        </div>
        <!-- Chat Bot section end -->

    </section>
    <!-- Home section end -->

    <!-- Popular services section start -->
    <section class="pop-services" id="pop-services">

        <h1 class="heading">Popular Services</h1>

        <div class="flex-container">

            <div class="flex-box1">
                <h3>Web Developing</h3>
                <p>Mastering Responsive Design, Creating Dynamic Websites for Every Device</p>
                <a href="#" class="btn">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

            <div class="flex-box2">
                <h3>Video and Animation</h3>
                <p>Engage and captivate with dynamic videos and animations for storytelling.</p>
                <a href="#" class="btn">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

        </div>

        <div class="flex-container">

            <div class="flex-box3">
                <h3>Application Development</h3>
                <p>Elevate Your Development Skills, Mastering Programming and Innovation in 2023</p>
                <a href="#" class="btn">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

            <div class="flex-box4">
                <h3>Graphics & Design</h3>
                <p>Unlocking Creativity, Transforming Ideas into Visual Masterpieces with Graphic Design</p>
                <a href="#" class="btn">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

        </div>

    </section>
    <!-- Popular services section end -->

    <!-- About section start -->
    <section class="about" id="about">

        <h1 class="heading">About Us</h1>
        <h3>Why choose us?</h3>

        <div class="content">

            <p>Welcome to W&#x039E;&#x042;X&#x039E;L, where innovation meets excellence. <br>
                We have been dedicated to providing top-notch services to our valued customers.</p>

            <a href="#">Learn more <i class=" fas fa-regular fa-chevron-right"></i></a>

        </div>

    </section>
    <!-- About section end -->

    <!-- Progress section starts -->
    <section class="progress" id="progress">

        <div id="container">

            <div class="flex-container">

                <div class="flex-box1">
                    <p><span class="count" max-data="11">0</span></p>
                    <h1>Projects Completed</h1>
                </div>

                <div class="flex-box2">
                    <p><span class="count" max-data="9">0</span></p>
                    <h1>Active Clients</h1>
                </div>

            </div>

            <div class="flex-container">

                <div class="flex-box3">
                    <p><span class="count" max-data="6">0</span></p>
                    <h1>Ongoing Projects</h1>
                </div>

                <div class="flex-box4">
                    <p><span class="count" max-data="23">0</span></p>
                    <h1>Happy Customers</h1>
                </div>

            </div>

        </div>

    </section>
    <!-- Progress section end -->

    <!-- Review section start -->
    <section class="review" id="review">

        <h1 class="heading">Our Happy Clients</h1>

        <div class="flex-container">

            <div class="flex-box1">
                <p>They constantly go above and beyond to make sure I find what I'm searching for.
                    Their team is very informed and highly professional.
                    They provide excellent customer service and are always accessible to answer any queries I might
                    have.</p>
                <h1>Michael Joseph</h1>
                <h3>Restaurant Owner</h3>
            </div>

            <div class="flex-box2">
                <p>Their products are strong and long-lasting, which makes them a fantastic investment for anyone,
                    <br>I can say with confidence.
                    <br>I heartily endorse WEBXEL to anyone who is searching for high-quality service.
                </p>
                <h1>Richard Oliver</h1>
                <h3>Gym Owner</h3>
            </div>

            <div class="flex-box3">
                <p>I am quite pleased with the calibre of WEBXEL's goods and services as a customer.
                    They provide a wide selection of high-quality services.
                    making them my go-to place for all of my Content writing and translation requirements.</p>
                <h1>Robert Daniel</h1>
                <h3>Writer</h3>
            </div>

        </div>

    </section>
    <!-- Review section end -->

    <div class="space"></div>

    <?php include('footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/assets/js/index.js"></script>


</body>

</html>
<html>

<head>

    <style>


    </style>



    <meta name="viewport" content="with=devide-width, initial scale=1.0">

    <title>App Development Services</title>

    <link rel="stylesheet" href="deve.css">

    <link rel="preconnect" href="<link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



    <section class="header">

        <nav>

            <a href="deve.html"><img src="logo.png"></a>

            <div class="nav-links" id="navLinks">

                <i class="fa fa-times" onclick="hideMenu()"></i>

                <ul>

                    <li><a href="">HOME</a></li>
                    <li><a href="">PACKAGE</a></li>
                    <li><a href="">PLANS</a></li>
                    <li><a href="">RESOURCES</a></li>
                    <li><a href="">CONTACT</a></li>

                </ul>

            </div>

            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>



        <div class="text-box">

            <h1>App Development</h1>

            <p>
                "Turning Ideas into Intuitive Experiences. Your App Journey Starts Here!"
                <br>
                "Transforming Ideas into Innovative Apps!"
                <br>
                "we specialize in crafting exceptional mobile and web applications tailored to your unique vision.
                <br>
                Our expert team combines cutting-edge technology with creative design, ensuring your app not only meets
                but exceeds industry standards.
                <br>
                Let's turn your ideas into reality - where innovation meets functionality."
            </p>

            <button type="button">START</button>

        </div>

    </section>

    <div class="grad">



        <!---------Course------>
        <section class="course">
            <h1>Packages We Offer</h1>
            <p>Thank you for considering our services for your app design needs. </p>

            <div class="row">
                <div class="course-col">
                    <h3>Silver</h3>
                    <h5>Starting at $5,880</h5>
                    <p>
                        Landing Page<br>
                        UI/UX Design Stage<br>
                        iOS Development<br>
                        Android Development<br>
                        Custom Server Development<br>
                        <button>View Package</button>
                    </p>
                </div>
                <div class="course-col">
                    <h3>Gold</h3>
                    <h5>Starting at $34,100</h5>
                    <p>
                        Market Demand Verification<br>
                        Vision & Strategy Workshops<br>
                        Wireframes & Clickable Prototype<br>
                        User Interviews Report<br>
                        Cost Estimation<br>
                        <button>View Package</button>
                    </p>
                </div>
                <div class="course-col">
                    <h3>Platinum </h3>
                    <h5> Starting at $ 50,000 </h5>
                    <p> Native App<br>
                        Product Definition<br>
                        Product Design (UX & UI)<br>
                        Figma Prototype<br>
                        Delivery Time - Phase 1<br>
                        6 to 8 weeks
                        <button>View Package</button>
                    </p>
                </div>
            </div>

        </section>

        <!------work---->

        <section class="work">

            <h1>work we have done</h1>
            <p>we are pleased to provide you an idea about our work with the following</p>

            <div class="row">
                <div class="work-col">
                    <img src="image09.jpg">
                    <div class="layer">
                        <h3>Desktop Apps</h3>
                    </div>
                </div>
                <div class="work-col">
                    <img src="image03.jpg">
                    <div class="layer">
                        <h3>Native Mobile Apps</h3>
                    </div>
                </div>
                <div class="work-col">
                    <img src="image07.jpg">
                    <div class="layer">
                        <h3>Legacy Apps</h3>
                    </div>
                </div>
            </div>
        </section>

        <!--------test------>







        <!---------More Options--------->

        <section class="moreOp">
            <h1>Explore More</h1>
            <p>Unlocking possibilities in the digital realm, where innovation meets creativity.</p>

            <div class="row">
                <div class="moreOp-col">
                    <img src="image12.jpg">
                    <h3>Developer Guides</h3>

                    <p>Find training classes that describe how to accomplish a specific task with code samples you can
                        re-use in your app</p>

                </div>
                <div class="moreOp-col">
                    <img src="image13.jpg">
                    <h3>Sample Code</h3>
                    <p>Jump-start your development using these sample projects</p>
                </div>
                <div class="moreOp-col">
                    <img src="image14.jpg">
                    <h3>Quality guide lines</h3>
                    <p>Build a high quality app with these design and behaviour successfully</p>
                </div>

            </div>

        </section>








        <!---------Javascript for Toggle Menu----------->

        <script>

            var navLinks = document.getElementById("navLinks");

            function showMenu() {
                navLinks.style.right = "0";
            }
            function hideMenu() {
                navLinks.style.right = "-200px";
            }

        </script>




    </div>

</body>

</html>
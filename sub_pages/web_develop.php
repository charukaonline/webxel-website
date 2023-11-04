<?php

	@include('./config.php');

	session_start();

	if(!isset($_SESSION['user_name'])) {
		header('location: ../Login_User_and_Admin_page/login_form.php');
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/web_develop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <div class="main">
        <div class="container-one">
            <div class="primary-navi">
                <div class="pNavi-left"><img src="Logo.png.png" class="Logo"></div>
                <div class="pNavi-right">
                    <ul class="links">
                        <li class="lk">Home</li>
                        <li class="lk">Services</li>
                        <li class="lk">Contact Us</li>
                        <li class="lk">About Us</li>
                        <li><i class="fa fa-reorder" id="bars"></i></li>
                        <li><i class="fa fa-remove" id="close"></i></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container-two">
            <div class="secondary-navi">
                <ul>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#p-pricing">Pricing</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </div>

        </div>
        <div class="container-three">
            <div class="firstlook">
                <div class="firstlook-left">
                    <div class="firstlook-text">
                        <h1><span class="firstlook-header">Create your</span><br>Dream Website</h1>
                    </div>
                    <div class="firstlook-button"><a href="#" class="firstBtn">Get Started ></a></div>
                </div>
                <div class="firstlook-right"><img src="WallpaperImage.png"></div>
            </div>

        </div>


        <div class="container-four">
            <div class="maincnt">
                <div class="one-count">
                    <div class="one-counter" data-val="121">0</div> <i class="material-icons" id="icon">dvr</i></span> <br> <span class="">Projects</span>
                </div>
                <div class="two-count">
                    <div class="two-counter" data-val="23">0</div> <i class="fa fa-group" id="icon"></i></span> <br> <span class="">Our Team</span>
                </div>
                <div class="three-count">
                    <div class="three-counter" data-val="18">0</div> <i class="material-icons" id="icon">extension</i></span> <br> <span class="">Awards</span>
                </div>
            </div>
        </div>

        <div class="container-five">
            <div class="trustedBy">
                <span>Trusted By: </span>
                <img src="google.png">
                <img src="microsoft.png">
                <img src="nintendo.png">
                <img src="threads.png">
                <img src="uber.png">
                <img src="diseny.png">

            </div>
        </div>

        <div class="container-six" id="p-pricing">
            <div class="pricing">
                <!--<div class="starter-pack">
                <h1 class="header">Strater</h1>
                <h2 class="price">LKR 15,000</h2>
                <ul>
                    <li></li>
                </ul>
                <div class="id1"></div>
            </div> -->
                <div class="growth-pack">
                    <h1 class="header">Simple Websites</h1>
                    <h2 class="price">LKR 18,000</h2>
                    <h3 class="text">Best for small websites
                        ( less than 5 pages)</h3>
                    <div class="id">
                        <ul>
                            <li><i class="fa fa-check"></i> Web Hosting</li>
                            <li><i class="fa fa-check"></i> Secure Certificate</li>
                            <li><i class="fa fa-check"></i> POP3 Domain Email</li>
                            <li><i class="fa fa-check"></i> Built from a Template</li>
                            <li><button class="price-btn">Get Started</button> </li>
                        </ul>
                    </div>

                </div>
                <div class="advanced-pack">
                    <h class="ribbon"> Popular </h>
                    <h1 class="header">Wordpress</h1>
                    <h2 class="price">LKR 30,000</h2>
                    <h3 class="text">Best for clients that want to manage their website content</h3>
                    <div class="id">
                        <ul>
                            <li><i class="fa fa-check"></i> Domain Name</li>
                            <li><i class="fa fa-check"></i> Web Hosting</li>
                            <li><i class="fa fa-check"></i> POP3 Domain Email</li>
                            <li><i class="fa fa-check"></i> Code Maintenance</li>
                            <li><i class="fa fa-check"></i> Secure Certificate</li>
                            <li><i class="fa fa-check"></i> Custom Web Design or customize a theme</li>
                            <li><button class="price-btn">Get Started</button> </li>
                        </ul>
                    </div>

                </div>
                <div class="ultimate-pack">
                    <h1 class="header">Custom Sites</h1>
                    <h2 class="price">LKR 55,000</h2>
                    <h3 class="text">Custom web design and web programming – database development, eCommerce …</h3>
                    <div class="id">
                        <ul>
                            <li><i class="fa fa-check"></i> Web Hosting</li>
                            <li><i class="fa fa-check"></i> Secure Certificate</li>
                            <li><i class="fa fa-check"></i> POP3 Domain Email</li>
                            <li><i class="fa fa-check"></i> Built from a Template</li>
                            <li><button class="price-btn">Get Started</button> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../assets/js/web_develop.js"></script>
    <script src="../assets/js/index.js"></script>

</body>

</html>
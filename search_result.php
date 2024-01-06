<?php

@include './config.php';

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $search_service = "SELECT * FROM services WHERE service_name LIKE '%$search%' ";
    $search_service_result = mysqli_query($conn, $search_service);
}

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $search_admins = "SELECT * FROM login_and_register WHERE name LIKE '%$search%' && user_type = 'admin' ";
    $search_admins_result = mysqli_query($conn, $search_admins);
}
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

    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/search_result.css">
    <link rel="stylesheet" href="/assets/css/footer.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>WEBXEL - Search Result</title>
    <link rel="icon" type="image/png" href="./assets/images/logo2.jpg">
</head>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/655b9f0991e5c13bb5b1f4be/1hfmuafig';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6JKJ2Y1W5K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6JKJ2Y1W5K');
    </script>

<body>

    <?php include('./includes/navbar.php'); ?>

    <div class="result-content">

        <div class="search-title">
            <h1>Search Results</h1>
        </div>

        <div class="search-result">
            <div class="search-results">
                <?php
                if (isset($search_service_result) && mysqli_num_rows($search_service_result) > 0) {
                    while ($row = mysqli_fetch_assoc($search_service_result)) {
                        $path = '';
                        switch ($row['service_name']) {

                            case 'Web Designing':
                                $path = './sub_pages/web_design.php';
                                break;

                            case 'Marketing & advertising':
                                $path = './sub_pages/marketing_advertising.php';
                                break;

                            case 'App Development':
                                $path = './sub_pages/app_development.php';
                                break;

                            case 'Graphic Design':
                                $path = './sub_pages/graphic_design.php';
                                break;

                            case 'Video and Animation':
                                $path = './sub_pages/video_animation.php';
                                break;

                            case 'Content writing & Translation':
                                $path = './sub_pages/writing_&_translation.php';
                                break;

                            default:
                                $path = './services.php';
                                break;
                        }
                        echo "<a href='{$path}'>";
                        echo "<h2>{$row['service_name']}</h2>";
                        echo "</a>";
                    }
                } elseif (isset($search_admins_result) && mysqli_num_rows($search_admins_result) > 0) {
                    while ($row = mysqli_fetch_assoc($search_admins_result)) {
                        $path = '';
                        switch ($row['name']) {

                            case 'Sanoj Aminda':
                                $path = './about_us.php';
                                break;

                            case 'Charuka Karunarathna':
                                $path = './about_us.php';
                                break;

                            case 'Thanuka Rathnayake':
                                $path = './about_us.php';
                                break;

                            case 'Shayan Hennedige':
                                $path = './about_us.php';
                                break;

                            case 'Mateesha':
                                $path = './about_us.php';
                                break;

                            case 'Nethma Dulvanya':
                                $path = './about_us.php';
                                break;

                            case 'Hasini Gunatilaka':
                                $path = './about_us.php';
                                break;

                            case 'Nethmi Pitawala':
                                $path = './about_us.php';
                                break;

                            case 'Samudi Gunawardana':
                                $path = './about_us.php';
                                break;
                        }
                        echo "<a href='{$path}'>";
                        echo "<h2>{$row['name']}</h2>";
                        echo "<h3>{$row['about']}</h3>";
                        echo "</a>";
                    }
                } else {
                    echo "No results found.";
                }
                ?>
            </div>
        </div>

    </div>

    <?php include('./includes/footer.php'); ?>

    <script src="./assets/js/index.js"></script>

</body>

</html>
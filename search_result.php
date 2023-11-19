<?php

@include './config.php';

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $search_result = "SELECT * FROM services WHERE service_name LIKE '%$search%' ";
    $result = mysqli_query($conn, $search_result);
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

<body>

    <?php include('./includes/navbar.php'); ?>

    <div class="result-content">

        <div class="search-title">
            <h1>Search Results</h1>
        </div>

        <div class="search-result">
            <div class="search-results">
                <?php
                if (isset($result) && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<a href='services.php?id={$row['id']}'>";
                        echo "<h2>{$row['service_name']}</h2>";
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

</body>

</html>
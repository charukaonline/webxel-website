<?php

    // $conn = mysqli_connect('localhost', 'root', '', 'webxel');

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webxel";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($mysqli -> connect_errno) {
        die("Connection error: " . $mysqli -> connect_error);
    }

    return $mysqli;

?>
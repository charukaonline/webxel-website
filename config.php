<?php

    // $conn = mysqli_connect('localhost', 'root', '', 'webxel');

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webxel";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn -> connect_errno) {
        die("Connection error: " . $conn -> connect_error);
    }

    return $conn;

?>
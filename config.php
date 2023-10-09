<?php

    $host = "";
    $dbname = "";
    $username = "root";
    $password = "";

    // Create connection with database
    $conn = new mysqli($host, $dbname, $username, $password);

    // Check connection status
    if ($mysqli -> connect_errno) {
        die("Connection error: " . $mysqli -> connect_error);
    }

    return $mysqli;

?>
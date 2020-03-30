<?php
    $servername = "localhost";
    $username = "root";
    $password = "set_pas_for_linuxOS_and_mac";
    $dbname = "lab3";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
<?php


    $servername = "127.0.0.1";
    $username = "zach@localhost";
    $password = "pass5500";
    $database = "board_db";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    //echo "Connected successfully (".$db->host_info.")";
    ?>
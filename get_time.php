<?php

require 'dbconnect.php';
$result = $db->query("select 'timestamp' from time");
$row = $result->fetch_assoc();
$time = $row['timestamp'];
echo json_encode($time);
<?php
require 'dbconnect.php';
$time = $_REQUEST['t'];
$db->query("update time set timestamp =".$time);

?>
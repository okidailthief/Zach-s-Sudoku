
<?php
require 'dbconnect.php';
$r = $_REQUEST['r'];
$c = $_REQUEST['c'];

$result = $db->query("SELECT * FROM board WHERE yindex =".$r);
$row = $result->fetch_assoc();
$hint = $row['x'.$c];
echo json_encode($hint);
?>
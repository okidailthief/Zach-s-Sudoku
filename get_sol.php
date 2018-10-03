<?php
$test = array(
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0, 0)
    );
require 'dbconnect.php';
for($y = 0; $y < 9; $y++){
    $result = $db->query("SELECT * FROM board WHERE yindex =".$y);
    $row = $result->fetch_assoc();
    for($col = 0; $col < 9; $col++){
        $test[$y][$col] = $row['x'.$col];
    }
}


echo json_encode($test);


?>
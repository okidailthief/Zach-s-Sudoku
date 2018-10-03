<?php

require 'dbconnect.php';

for($xindex = 0; $xindex < 9; $xindex++){
$db->query("UPDATE board set x".$xindex."=''");
}
//new sudoku boards
$choice = mt_rand(0,5);
switch ($choice){
    case 0:
$test = array(
    array(2,6,4,5,8,1,7,9,3),
    array(1,8,3,7,9,4,5,2,6),
    array(9,5,7,3,2,6,8,1,4),
    array(7,9,5,4,1,2,6,3,8),
    array(6,3,2,8,5,7,1,4,9),
    array(8,4,1,9,6,3,2,7,5),
    array(4,1,6,2,3,8,9,5,7),
    array(5,7,8,1,4,9,3,6,2),
    array(3,2,9,6,7,5,4,8,9)
    );
    break;

    case 1:
    $test = array(
    array(2,5,7,9,4,6,1,3,8),
    array(1,3,4,2,5,8,6,7,9),
    array(6,8,9,1,3,7,2,4,5),
    array(3,1,2,4,6,5,8,9,7),
    array(4,6,5,7,8,9,3,1,2),
    array(7,9,8,3,1,2,4,5,6),
    array(5,2,1,6,7,3,9,8,4),
    array(8,4,6,5,9,1,7,2,3),
    array(9,7,3,8,2,4,5,6,1)
    );
    break;
    
    case 3:
    $test = array(
    array(7,6,2,1,3,5,8,9,4),
    array(8,9,4,6,7,2,5,1,3),
    array(3,5,1,8,9,4,2,6,7),
    array(4,8,9,3,6,1,7,5,2),
    array(5,3,7,4,2,9,1,8,6),
    array(2,1,6,7,5,8,3,4,9),
    array(1,2,3,5,4,6,9,7,8),
    array(6,7,8,9,1,3,4,2,5),
    array(9,4,5,2,8,7,6,3,1)
    );
    break;
    case 4:
    $test = array(
    array(1,9,2,6,5,7,3,4,8),
    array(8,3,6,4,9,2,5,7,1),
    array(7,5,4,3,1,8,9,2,6),
    array(6,1,5,8,4,9,7,3,2),
    array(2,4,3,7,6,5,1,8,9),
    array(9,7,8,2,3,1,4,6,5),
    array(5,6,7,9,8,4,2,1,3),
    array(4,8,1,5,2,3,6,9,7),
    array(3,2,9,1,7,6,8,5,4)
    );
    break;
    case 5:
    $test = array(
    array(9,3,1,6,8,2,4,7,5),
    array(6,7,4,5,1,9,8,3,2),
    array(2,8,5,3,7,4,6,9,1),
    array(8,4,6,2,5,7,9,1,3),
    array(7,9,2,1,6,3,5,8,4),
    array(5,1,3,4,9,8,2,6,7),
    array(1,6,7,9,2,5,3,4,8),
    array(3,5,9,8,4,1,7,2,6),
    array(4,2,8,7,3,6,1,5,9)
    );
    break;
    
}
//updates solution board in db
    for($row = 0; $row < 9; $row++){
        for($col = 0; $col < 9; $col++){
        $db->query("UPDATE board set x".$col." = ".$test[$row][$col]." WHERE yindex =".$row);
        }
    }
for($y = 0; $y < 9; $y++){
    $result = $db->query("SELECT * FROM board WHERE yindex =".$y);
    $row = $result->fetch_assoc();
    for($col = 0; $col < 9; $col++){
        $test[$y][$col] = $row['x'.$col];
    }
}


echo json_encode($test);
?>
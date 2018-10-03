<?php
require 'dbconnect.php';
$retrieved_board = array(
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
for($y = 0; $y < 9; $y++){
    $result = $db->query("SELECT * FROM board_state WHERE yindex =".$y);
    $row = $result->fetch_assoc();
    for($col = 0; $col < 9; $col++){
        $retrieved_board[$y][$col] = $row['x'.$col];
    }
}
echo json_encode($retrieved_board);
?>
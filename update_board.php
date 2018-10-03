<?php
require 'dbconnect.php';
$r = $_REQUEST['r'];
$c = $_REQUEST['c'];
$v = $_REQUEST['v'];
//clears board to re-update
//for($xindex = 0; $xindex < 9; $xindex++){
//$db->query("UPDATE board_state set x".$xindex."=''");
//}
$db->query("UPDATE board_state SET x".$c."=".$v." WHERE yindex =".$r);

?>
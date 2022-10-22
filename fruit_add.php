<?php
	$a = $_GET["a"];
	$b = $_GET["b"];
    $c = $_GET["c"];
    $d = 0;
    $d = ($a*30)+($b*70)+($c*30);
	echo "<b>ผลลัพธ์</b> คือ ";
	echo $d;
?>
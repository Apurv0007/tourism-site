<?php 
$s1='localhost';
$u1='argus1on_apruv';
$p1='argus';
$d1='argus1on_apruv';
	$cn=mysqli_connect($s1,$u1,$p1,$d1);
	if(!$cn)
	{
		echo '<br>'.mysqli_connect_errno();
		echo '<br>'.mysqli_connect_error();
	}
	
?>
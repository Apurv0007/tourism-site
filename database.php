<?php 
$server="localhost:3306"; // same for all 
$user="root";  // same for all 
$password="argus";  // mysql password 

// function to connect to mysql
$cn=mysqli_connect($server,$user,$password);
	if($cn)
	{
		$q="create database MedicalTour";
			// function to execute sql qurery 
			$sq=mysqli_query($cn,$q);
			if($sq)
			{
				echo 'created';
			}
			else 
			{
				echo '<br>'.mysqli_error($cn);
			}
	}
	else
	{
		echo '<br>'.mysqli_connect_errno();
		echo '<br>'.mysqli_connect_error();
	}


?>
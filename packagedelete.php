<?php 
if(isset($_GET['pid']))
{
$pid=$_GET['pid'];
	include"connection.php";

	$q="delete from package where pid='".$pid."'";
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	header('location:packageshow.php');
	}
	else
	{
		echo'<br>'.mysqli_error($cn);
	}
}
else 
{
	header('location:packageshow.php');
}
?>
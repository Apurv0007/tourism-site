
<?php 
if(isset($_GET['uid']))
{
$uid=$_GET['uid'];
	include"connection.php";

	$q="delete from user where uid='".$uid."'";
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	header('location:usershow.php');
	}
	else
	{
		echo'<br>'.mysqli_error($cn);
	}
}
else 
{
	header('location:usershow.php');
}
?>
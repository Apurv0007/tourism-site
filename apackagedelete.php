<?php
session_start();
if(session_id()!=$_SESSION['aid'])
{
header("location:login.php");
}

?>

<a href="end.php"> logout </a>   |
<a href="admin.php"> admin panel </a> |
<a href="auser.php"> user </a> | 
<a href="avendor.php"> vendor </a> |
<a href="apackage.php"> package </a> | 
<a href="abooking.php"> booking </a> | 
<a href="aenquiry.php"> enquiry </a>
<br><br>

<?php
$n=$_SESSION['n'];
echo ' welcome '.$n;
?>
<?php 
if(isset($_GET['pid']))
{
$pid=$_GET['pid'];
	include"connection.php";

	$q="delete from package where pid='".$pid."'";
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	header('location:apackage.php');
	}
	else
	{
		echo'<br>'.mysqli_error($cn);
	}
}
else 
{
	header('location:apackage.php');
}
?>
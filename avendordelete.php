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
if(isset($_GET['vid']))
{
$vid=$_GET['vid'];
	include"connection.php";

	$q="delete from vendor where vid='".$vid."'";
	
		$sq=mysqli_query($cn,$q);
	if($sq)
	{
		$q1="delete from package where vid='".$vid."'";
		$sq1=mysqli_query($cn,$q1);
				if($sq1)
				{
					$q2="delete from booking where vid='".$vid."'";
					$sq2=mysqli_query($cn,$q2);		
						if($sq2)
						{
						header('location:avendor.php');
						}
						else
						{
							echo'<br>'.mysqli_error($cn);
						}
				
				}
				else
					{
					echo'<br>'.mysqli_error($cn);
					}
	}
	else
	{
		echo'<br>'.mysqli_error($cn);
	}
}
else 
{
	header('location:avendor.php');
}
?>
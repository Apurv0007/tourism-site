<?php
ob_start();
session_start();
if(session_id()!=$_SESSION['vid'])
{
header("location:login.php");
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	nav{background:rgba(81,81,81,0.3);}
	</style>
<title>Enquiry</title>
<body> 
<nav class="navbar navbar-expand-lg  navbar-light ">
  <a class="navbar-brand" href="#"> WEB NAME </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     
	 <a class="nav-item nav-link"  href="end.php"> logout </a>   
     
     <a class="nav-item nav-link"  href="bvendor.php"> vendor </a> 
     <a class="nav-item nav-link"  href="bpackage.php"> package </a> 
     <a class="nav-item nav-link"  href="bbooking.php"> booking </a> 
    
     <br><br>
	</div>
	  
  </div>
  <form class="form-inline my-2 my-lg-0"  action="" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search tourist name" aria-label="Search" name="n">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="s"><b>Search</b></button>
    </form>
</nav>
</div>
</div>

<div class='fluid-container'>
	<div class='row'>
	<div class="col-md-4 offset-md-4 ">
	<div class="m1">
	<?php
		$v=$_SESSION['v'];
		echo ' welcome '.$v;
	?>
	

</div>
</div>
</div>

<div class='fluid-container'>
	<div class='row'>  
		
	<div class="col-md-4  ">
	
	<div class="m2">
	<?php
		
		echo 'Filter ';
	?>

	<form action="" method="POST">
	
<br><br>
<input type="submit" name="s1" value="low to high"   class="b"  >
<input type="submit" name="s2" value="high to low"   class="b"  >
<input type="submit" name="s3" value="new first"     class="b"  >

</form>


</div>
</div>
</div>





<style>
.b{
	font-family: "Times New Roman", Times, serif;
	border:1.5px solid #59B9F9 ;
	border-radius:30px;
	transition-duration: 0.4s;
	}
	.b:hover {
  background-color: #59B9F9 ; /* Green */
  color: white;
}


}

	.m1{margin:10px;background-color:red;height:100px;text-align:center;}
.m{margin:10px;background-image: linear-gradient(to right top, #c61179, #dd3d54, #dd6c37, #cc952e, #b2b94a, #85c268, #54c68e, #00c7b4, #00b0ca, #0095dd, #0074de, #4747c0);height:200px;}
.m2{  margin:5px;
	height:100px;text-align:center; 
	border:1px solid black; border-radius:30px;
	background-image: linear-gradient(to right top, #e7b1d0, #eca8b0, #e3a591, #cca67a, #aba971, #88ab73, #5cab82, #00a89a, #00a3be, #0098e8, #0085ff, #5f5ffb);

}
.t{position:absolute;top:5%;right:5%;
width:45%;height:90%;background:rgba(12,23,121,0.4);color:black;overflow:auto;}


.v1{position:absolute;top:5%;height:90%;width:45%;left:53%;background:rgba(123,12,212,0.4);
height:90%;color:black;overflow:auto;}


</style>



<div class='fluid-container'>
	<div class='row'>



<?php 
	include"connection.php";
	if(isset($_POST['s']))
	{
		$n=$_POST['n'];
		$q="select * from booking,user where (amount like '%".$n."%' or name like '%".$n."%') 
		and booking.uid=user.uid ";

	}
	else if(isset($_POST['s1']))
	{
$q="select * from booking order by Pdate asc";
	}
	else if(isset($_POST['s2']))
	{
$q="select * from booking order by Pdate desc";
	}
	else if(isset($_POST['s3']))
	{
$q="select * from booking order by bid desc";
	}
	else 
	{

	
	$q="select * from booking where vid='".$_SESSION['vvid']."'";
	}
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) 
		{
			$sq=mysqli_query($cn,$q);
			
			
			while($r=mysqli_fetch_assoc($sq))
			{

				$bid=$r['bid'];
                echo '<div class="col-md-6">';
				echo '<div class="m">';
				echo '<div class="b1">';

				echo 'BID-'.$r['bid'];
                echo ' <br>PID-'.$r['pid'];
                echo ' <br>VID-'.$r['vid'];
                echo ' <br>UID-'.$r['uid'].'</th>';
				echo ' <br>Person Travelling-'.$r['noperson'].'</th>';
				echo ' <br>  Total Amount-'.$r['Amount'].'</th>'; 
				echo ' <br> Tour Starts From- '.$r['Pdate'].'</th>';
			 echo'</div>';

			 echo '<div class="v1">';	
			$uid=$r['uid'];

             ///starrt user

			 include"connection.php";
			 $q2="select * from user where uid='".$uid."'";
			 
			 $sq2=mysqli_query($cn,$q2);
			 
			 if($sq2)
			 {
			 
				 if(mysqli_fetch_assoc($sq2)>0) // check if fetches any value 
				 {
					 $sq2=mysqli_query($cn,$q2);
			 
					 while($r2=mysqli_fetch_assoc($sq2))
					 {
									
						 
			 
					 
						 echo '<br>uid -'.$r2['uid'];
						 echo ' <br>email-'.$r2['email'];
						 echo ' <br>name-'.$r2['name']; 
						 echo ' <br>phone-'.$r2['phone'];
					 
				 
					 }
					 
					 
				 }
				 else 
				 {
					 echo 'no record found ';
				 }
			 }
			 else 
			 {
				 echo'<br>'.mysqli_error($cn);
			 }
			 
				 
			 echo'<br> <a href="bbookingdelete.php?bid='.$bid.'">click to cancle</a>';

			 // end user display 

			echo'</div>';
			echo'</div>';
			  echo'</div>';
				
			}
			
			
		}
		else 
		{
			echo 'no record found ';
		}
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	

?>
<img src="images/b6.jpg" style="position:fixed;top:0%;left:0%;width:100%;height:100%;z-index:-5;" >
<?php
ob_start();
session_start();
if(session_id()!=$_SESSION['uid'])
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
	navz{background:rgba(81,81,81,0.3);}
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
     
     <a class="nav-item nav-link"  href="uuser.php"> user panel </a> 
     <a class="nav-item nav-link"  href="upackage.php"> package </a> 
     <a class="nav-item nav-link"  href="ubooking.php"> booking </a> 
    
     <br><br>
	</div>
	  
  </div>
</nav>


<div class='fluid-container'>
	<div class='row'>
	<div class="col-md-4 offset-md-4">
				<div class="m1">
	<?php
$u=$_SESSION['u'];
echo ' welcome '.$u;
?>
<form action="" method="POST">
search <input type="text" name="n"> <input type="submit" name="s" value="search">
<br><br>
<input type="submit" name="s1" value="low to high">
<input type="submit" name="s2" value="high to low">
<input type="submit" name="s3" value="new first">

</form>
</div>
</div>
</div>









<style>
.m1{margin:10px;background:rgba(12,23,121,0.4);height:100px;text-align:center;}
.m{margin:10px;background-image: linear-gradient(to right top, #10f2e8, #70d583, #b1ac29, #df711f, #eb125e);height:200px;}



.b1{position:absolute;top:5%;left:5%;
width:45%;height:90%;background-image: linear-gradient(to right top, #e0f219, #91f669, #37f2a6, #00e8d3, #12d9eb);;color:black;overflow:auto;}
.v1{position:absolute;top:5%;height:90%;width:45%;left:53%;background:rgba(123,12,212,0.4);
height:90%;color:white;overflow:auto;}




</style>




	<div class='row'>
<?php 
	include"connection.php";
	if(isset($_POST['s']))
	{
		$n=$_POST['n'];
		$q="select * from package where package like '%".$n."%' or Details like '%".$n."%' ";

	}
	else if(isset($_POST['s1']))
	{
$q="select * from package order by rate asc";
	}
	else if(isset($_POST['s2']))
	{
$q="select * from package order by rate desc";
	}
	else if(isset($_POST['s3']))
	{
$q="select * from package order by pid desc";
	}
	else 
	{	
	$q="select * from package";
	}
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);

			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$pid=$r['pid'];

                
                echo '<div class="col-md-6">';
				echo '<div class="m">';
				echo '<div class="b1">';
				
$vid=$r['vid'];
$pid=$r['pid'];
$rate=$r['rate'];

					
				echo 'PID -'.$r['pid'];
                echo ' <br> VID-'.$r['vid'];
				echo ' <br> Package-'.$r['package'];
				echo ' <br> Location- '.$r['location']; 
				echo ' <br> Rate-'.$r['rate'].'</th>';
				echo ' <br>  Details-'.$r['Details']; 
				echo'<br> <a href="ubook.php?vid='.$vid.'&pid='.$pid.'&rate='.$rate.'">click to book</a>';
                
						
				echo'</div>';
		


			echo '<div class="v1">';	
			$vid=$r['vid'];
               /// start vendor display
              
include"connection.php";
$q2="select * from vendor where vid='".$vid."'";

$sq2=mysqli_query($cn,$q2);

if($sq2)
{

	if(mysqli_fetch_assoc($sq2)>0) // check if fetches any value 
	{
		$sq2=mysqli_query($cn,$q2);

		while($r2=mysqli_fetch_assoc($sq2))
		{
					   
echo ' <img src="'.$r2['photo'].'" width="100px" height="100px">';		
			

		
			echo '<br>vid -'.$r2['vid'];
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
                  

              /// end vendor display
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
<img src="images/B3.jpg" style="position:fixed;top:0%;left:0%;width:100%;height:100%;z-index:-5;" >
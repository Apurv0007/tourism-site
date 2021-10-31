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

</div>
</div>
</div>


<style>
	body{
		background-image:url(images/b2.jpg);
		background-size:100% 100%;
	}
	.m1{margin:10px;background:rgba(12,23,121,0.4);color:white;height:50px;text-align:center;
		font-size:2vw;
		font-family:  "Bradley Hand",  cursive;
	}
.m{margin:10px;height:600px;}
.p{position:absolute;top:20%;left:20%;width:30%;height:50%;}
.t{position:absolute;top:20%;right:20%;
	width:30%;height:50%;background:rgba(12,23,121,0.4);color:white;overflow:auto;}

.m:hover{background-color:;}
.a{
	position:absolute;
top:10%;
width:80%;
height:80%;
left:10%;
background-color: rgba( 9, 10, 9  ,0.6);
border-bottom:2px solid white;
background:linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);

}
</style>




	<div class='row'>


<?php 
	include"connection.php";
	$q="select * from user where email='".$u."'";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);
	
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$_SESSION['uuid']=$r['uid'];

                echo '<div class="col-md-12 ">'; 

		       echo '<div class="m">';

			      echo '<div class="a">';
					echo '<div class="p">';
                    echo ' <img src="'.$r['photo_id'].'" width="100%" height="100%">';		
					echo'</div>';

					echo '<div class="t">';
				echo 'UID-'.$r['uid'];
				echo '<br><br> Email-'.$r['email'];
				echo '<br><br> Name-  '.$r['name']; 
				echo '<br><br> Phone- '.$r['phone'];
				echo'</div>';


			echo'</div>';		
	echo'</div>';
			echo'</div>';
        
			}
			
			echo '</table>';
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





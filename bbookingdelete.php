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

<?php 
if(isset($_GET['bid']))
{
$bid=$_GET['bid'];
	include"connection.php";

	$q="delete from booking where bid='".$bid."'";
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	header('location:bbooking.php');
	}
	else
	{
		echo'<br>'.mysqli_error($cn);
	}
}
else 
{
	header('location:bbooking.php');
}
?>
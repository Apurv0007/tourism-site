<?php
ob_start();
session_start();
if(session_id()!=$_SESSION['vid'])
{
header("location:login.php");
}

?><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


<style>
	body{
		background-image:url(images/b10.jpg);
		background-size:100% 100%;
	}
	.m1{margin:10px;color:black;height:200px;
	        opacity:0.7;
			background-image: linear-gradient(to right top, #f42098, #ff3e63, #ff6f30, #e59a00, #b8be00, #88cc4b, #55d480, #00d8b0, #00c7d9, #00b1ff, #0091ff, #5f5ffb);
	}
.m{
	margin:10px;
	background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
	height:350px;padding:20px;
	border-top-left-radius:10%;
    border-bottom-left-radius:10%;
    border-top-right-radius:10%;
    border-bottom-right-radius:10%;
	overflow: hidden;
}
.p{position:absolute;top:5%;left:5%;width:45%;height:90%;}
.t{position:absolute;top:5%;right:5%;
width:45%;height:90%;background:rgba(12,23,121,0.4);color:white;	overflow:auto;}


</style>



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
     <a class="nav-item nav-link"  href="bvendor.php"> vendor panel </a> 
      
     <a class="nav-item nav-link"  href="bpackage.php"> package </a> 
     <a class="nav-item nav-link"  href="bbooking.php"> booking </a> 
   
     <br><br>
	</div>
	  
  </div>
</nav>


<div class='fluid-container'>
	<div class='row'>
<div class="col-md-7 offset-md-2">
<div class="m">




<?php
$v=$_SESSION['v'];
echo ' welcome '.$v;
?>

<?php

$a=$as=$b=$bs=$d=$ds=$c=$cs='';
function package()
{
	$a=trim($_POST['a']);
	$ac='/^[A-Za-z ]*$/';
   if(!preg_match($ac,$a) || strlen($a)==0)
   {
	   return 'n';
   }
   else 
   {
	   return 'y';
   }
}
function location(){
	$b=trim($_POST['a']);
	$bc='/^[A-Za-z ]*$/';
   if(!preg_match($bc,$b) || strlen($b)==0)
   {
	   return 'n';
   }
   else 
   {
	   return 'y';
   }
}

function rate(){
	$c=trim($_POST['c']);
	$cc='/^[0-9]{4,6}$/';
	if(!preg_match($cc,$c) )
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

function Details(){
	$d=trim($_POST['d']);
	
	if(strlen($d)<=5)
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}

 }







if(isset($_POST['s']))
{
    if(package()=='y')
   {
	$a=trim($_POST['a']);
}
else
{
	$as="**** check package";
}

if(location()=='y')
{
	$b=trim($_POST['b']);
}
else
{
	$bs="**** check location";
}
if(Rate()=='y')
{
	$c=trim($_POST['c']);
}
else
{
	$cs="**** check Rate";
}
if( Details()=='y')
{
	$d=trim($_POST['d']);
}
else
{
	$ds="** Check";
}

if(package()=='y' && location()=='y' && Rate()=='y' &&  Details()=='y')
 {

	include"connection.php";  
	$q="insert into  package
	(vid,package ,location ,rate,Details )
	values('".$_SESSION['vvid']."','".$a."', '".$b."' , '".$c."' ,
			'".$d."')
	";
	
	$sq=mysqli_query($cn,$q);
		if($sq)
		{
		
	$a=$as=$b=$bs=$c=$cs=$d=$ds='';
			echo '<script> alert(" Thanks for enquiry")</script>';
		}
		else 
		{
			echo '<br>'.mysqli_error($cn);  // query error 
		}
 
 
	






 }
	else
   {
	echo '<script> alert("check")</script>';
   }







    
    


}
?>

<head>
<title>Package</title>
</head>
<body> 
<form action="" method="POST" enctype="multipart/form-data">
Packages<input type="text"    name="a" value="<?php echo $a; ?>">
<span style="color:red"><?php echo $as; ?></span>

<br><br>
Locations<input type="text"    name="b" value="<?php echo $b; ?>">
<span style="color:red"><?php echo $bs; ?></span>

<br><br>
Rate<input type="text"  name="c" id="c" value="<?php echo $c; ?>" >
<span style="color:red"><?php echo $cs; ?></span>
<br><br>
Details
<textarea rows="5" cols="50"  name="d" ><?php echo $d; ?></textarea>
<span style="color:red"><?php echo $ds; ?></span>
<br><br>
<input type="submit" name="s">

</form> 
</body>

</div>

</div>


</div>





<div class='fluid-container'>
	<div class='row'>
<?php 
	include"connection.php";
	$q="select * from package where vid='".$_SESSION['vvid']."'";
	

	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);

			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$pid=$r['pid'];

                
               
				
			   echo '<div class="col-md-4 ">';
				echo '<div class="m1">';
				
				echo 'PID -'.$r['pid'];
                echo ' <br> VID-'.$r['vid'];
				echo ' <br> Package-'.$r['package'];
				echo ' <br> Location- '.$r['location']; 
				echo ' <br> Rate-'.$r['rate'].'</th>';
				echo ' <br>  Details-'.$r['Details']; 
                
						
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



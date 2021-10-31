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
.m1{margin:10px;background:rgba(12,23,121,0.4);height:50px;text-align:center;
	font-family: cursive;font-size:2vw;}
.m{margin:10px;background-image: linear-gradient(to right top, #10f2e8, #70d583, #b1ac29, #df711f, #eb125e);height:200px;
opacity:0.9;
}

.b1{position:absolute;top:5%;left:5%;
width:30%;height:90%;background-image: linear-gradient(to right top, #1919f2, #0082ff, #00afff, #00d29f, #2feb12);
color:black;overflow:auto;
font-size:1.1vw;}

.p1{position:absolute;top:5%;left:37%;
width:30%;height:90%;background-image: linear-gradient(to right top, #baf219, #a2f10c, #86ef03, #64ed06, #2feb12)
;color:black;overflow:auto;
font-size:1.1vw;
font-size:1.1vw;}


.v1{position:absolute;top:5%;left:73%;
width:30%;height:90%;background-image: linear-gradient(to right top, #19cdf2, #00cab9, #5bbe66, #a9a50e, #eb7912)
;color:black;overflow:auto;}

.m:hover{background-color:green;}
</style>





	<div class='row'>



<?php 
	include"connection.php";
	$q="select *,dayname(Bdate)'dayname',monthname(Bdate)'monthname',year(Bdate)'year',day(Bdate)'day' from booking where uid='".$_SESSION['uuid']."'";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) 
		{
			$sq=mysqli_query($cn,$q);
			
			
			while($r=mysqli_fetch_assoc($sq))
			{

				$bid=$r['bid'];
                echo '<div class="col-md-12">';
					echo '<div class="m">';
							echo '<div class="b1">';

								echo 'BID-'.$r['bid'];
								echo ' <br>PID-'.$r['pid'];
								echo ' <br>VID-'.$r['vid'];
								echo ' <br>UID-'.$r['uid'].'</th>';
								echo ' <br>noperson-'.$r['noperson'];
								echo ' <br> '.$r['Amount']; 
								echo '<br> package starts from <br><font color="red"> '.$r['day'].': '.$r['monthname']; 
								echo ' | '.$r['dayname']; 
								echo ' - '.$r['year'].'</font>'; 
						
								echo ' <br> booked on '.$r['Bdate'];


							echo'</div>';
							echo '<div class="p1">';
							$pid=$r['pid'];

/// package display start

include"connection.php";
	$q1="select * from package where pid='".$pid."'";
	
	$sq1=mysqli_query($cn,$q1);
	
	if($sq1)
	{
	
		if(mysqli_fetch_assoc($sq1)>0) // check if fetches any value 
		{
			$sq1=mysqli_query($cn,$q1);

			
			
			while($r1=mysqli_fetch_assoc($sq1))
			{
				


					
				echo 'PID -'.$r1['pid'];
                echo ' <br> VID-'.$r1['vid'];
				echo ' <br> Package-'.$r1['package'];
				echo ' <br> Location- '.$r1['location']; 
				echo ' <br> Rate-'.$r1['rate'].'</th>';
				echo ' <br>  Details-'.$r1['Details']; 
                
						
			
				
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

/// package display end 

							echo'</div>';
							echo '<div class="v1">';
					
							$vid=$r['vid'];
//// start vendor display 

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
				echo ' <br>password-'.$r2['password']; 
				

        
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
	



////  end vendor display




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
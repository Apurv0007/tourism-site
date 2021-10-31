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
</div>
</div>

<div class='fluid-container'>
	<div class='row'>





	</div>
</div>
</div>








<?php
$u=$_SESSION['u'];
echo ' welcome '.$u;

if(!isset($_GET['vid']))
{
	header("location:upackage.php");
}

?>



<?php
$a=$b=$c=$cs='';
function dcheck()
{

			if($_POST['c']!='')
			{
			// system date 
			$sy=date('Y');	
			$sm=date('m');	
			$sd=date('d');	
		
			$sdays=($sy-1)*365 + ($sm-1)*30 + $sd;
			
			// entered date 
			
			$ey=date('Y',strtotime($_POST['c']));
			$em=date('m',strtotime($_POST['c']));
			$ed=date('d',strtotime($_POST['c']));
		
			$edays=($ey-1)*365 + ($em-1)*30 + $ed;
			
			$diff=$edays-$sdays;
			
			if($diff>0 && $diff<30)
			{
				return 'y';
			}
			else 
			{
				return 'n';
			}
	}
	else
	{
		return 'n';
	}

}
if(isset($_POST['s']))
{
    if(dcheck()=='y')
	{
		$c=date('Y-m-d',strtotime($_POST['c']));
	}
	else
	{
		$cs="**** check date ";
	}
    if(dcheck()=='y' && $_POST['b']>0)
    {
     $a=$_POST['a'];

	 $b=$_POST['b'];
	 
	
		$d=date('Y-m-d');
	   include"connection.php";  
	   $q="insert into  booking
	   ( vid, pid, uid,noperson,amount ,Bdate, pdate)
	   values('".$_GET['vid']."','".$_GET['pid']."','".$_SESSION['uuid']."',
	   '".$a."', '".$b."' , '".$d."', '".$c."')
	   ";

	
	   $sq=mysqli_query($cn,$q);
	   if($sq)
	   {
		$c=$cs='';
  
		header("location:ubooking.php");
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

<script>
function rate()
{

	var r=document.getElementById("r").value;
	var a=document.getElementById("a").value;

	document.getElementById("b").value=r*a;
}
</script>

<title>Booking</title>
<body> 
<form action="" method="POST" enctype="multipart/form-data">
<br><br>
NoPerson
<select name="a" id="a" onchange="rate()">
<option value="0">0 </option>
		<option value="1">1 </option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
</select>
<br><br>

rate<input type="text"  name="r" id="r"  value='<?php echo $_GET['rate']; ?>' readonly >
<br><br>

Amount<input type="text"  name="b" id="b" value='0' readonly >

<br><br>
| Pdate [ within 30 days ] 
<input type="date"   name="c"  value="<?php echo $c; ?>">
<span style="color:red"><?php echo $cs; ?></span>
<br><br>
<input type="submit" name="s">

</form> 
</body>





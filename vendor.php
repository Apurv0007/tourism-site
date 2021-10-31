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
  <a class="navbar-brand" href="#"> ARMIARMA </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php"> HOME</a>
	  <a class="nav-item nav-link" href="vendor.php"> COMPANY SIGN-UP</a>
	  <a class="nav-item nav-link" href="user.php"> CUSTOMER SIGN-UP</a> 
	  <a class="nav-item nav-link" href="login.php"> LOGIN</a> 
	  <a class="nav-item nav-link"href="enquiry.php"> ENQUIRY</a>
      </div>
  </div>
</nav>








<?php 
$n=$ns=$em=$es=$ph=$phs=$p=$ps=$ms='';
function ncheck()
{
	$n=trim($_POST['n']);
	$nc='/^[A-Za-z ]*$/';
	if(!preg_match($nc,$n) || strlen($n)==0)
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

function echeck(){
 $em=trim($_POST['em']);
 $ec='/^[a-zA-Z0-9._-]*\@[A-Za-z0-9]*\.[a-zA-Z.]{2,6}$/';
 if(!preg_match($ec,$em) || strlen($em)==0)
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

function pascheck()
{
	$p=trim($_POST['p']);
	
	if(strlen($p)<4)
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

function phcheck()
{
	$ph=trim($_POST['ph']);
	$phc='/^[0-9]{10,10}$/';
	if(!preg_match($phc,$ph) )
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

function photocheck()
{
	if($_FILES['m']!='')
	{
		$fn=$_FILES['m']['name'];
		$st= stripos($fn,".") ;
		$sb= substr($fn,$st+1,strlen($fn));  // extension 
  
		$ext=array('jpeg','jpg','png','jfif','bmp','gif');
		if(in_array($sb,$ext))
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
	if(ncheck()=='y')
	{
		$n=trim($_POST['n']);
	}
	else
	{
		$ns="**** check name";
	}


	if(echeck()=='y')
	{
		$em=trim($_POST['em']);
	}
	else
	{
		$es="**** check mail";
	}


	if(pascheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else
	{
		$ps="**** check pas";
	}

	if(phcheck()=='y')
	{
		$ph=trim($_POST['ph']);
	}
	else
	{
		$phs="**** check phone ";
	}
	

   
	
	
	
	if(photocheck()=='n')
	{
		$ms="**** check photo ";
	}
	
   
    $ph=$_POST['ph'];
    
   
  
 
 if(ncheck()=='y' && echeck()=='y' && pascheck()=='y'  && photocheck()=='y' && phcheck()=='y')
 {
    

	
   $fn=$_FILES['m']['name'];
   $ta=$_FILES['m']['tmp_name'];
   $fa='load/'.uniqid().$fn;
  

   include"connection.php";  
   $q="insert into  vendor
   (email,name ,phone ,password ,photo  )
   values('".$em."', '".$n."' , '".$ph."' ,
		   '".$p."', '".$fa."')
   ";
   
   $sq=mysqli_query($cn,$q);
	   if($sq)
	   {
		   move_uploaded_file($ta,$fa);
   $n=$em=$ph=$p=$ns=$ms=$phs=$es=$pas='';
		   echo '<script> alert(" registered")</script>';
	   }
	   else 
	   {
		   echo '<br>'.mysqli_error($cn);  // query error 
	   }


   
   
   //echo'<img src="'.$fa.'" width=100" height="100">';
   
   
   }



   else
   {
	echo '<script> alert("check")</script>';
   }
}
?>
<style>
.mp,.eq{margin:10px;background:rgba(176,32,232,0.1);height:700px;}
.b{
	position:absolute;
	left:20%;
	top: 20%;
	width:80%;
	
   }
   .a{
	position:absolute;
top:10%;
width:40%;
height:70%;
left:10%;
background: linear-gradient(to bottom, #99ccff 18%, #ffccff 100%);
border-top-left-radius:10%;
border-bottom-left-radius:10%;
overflow: hidden;

}
.c{
position:absolute;
top:10%;
width:40%;
height:70%;
left:50%;
background-color: #FEFFFF ;
border-top-right-radius:10%;
border-bottom-right-radius:10%;
overflow: hidden;
	}
	#c1{
	position:absolute;
	top:27%;
	left:10%;
	width:30%;
	height:30%;
	color:white;
	font-family: Trebuchet MS;
font-size:1vw;
	
}
#c2{
	position:absolute;
	top:30%;
	left:8%;
	width:60%;
	height:30%;
	color:white;
	font-family: Trebuchet MS;
font-size:3.4vw;
	
}


</style>

<div class='fluid-container'>
	<div class='row'>

		<div class="col-md-12 ">
		    <div class="eq">

		<div class="a">
			<div class="b">
                       <title>Vendor</title>
                       <body> 
                       <form action="" method="POST" enctype="multipart/form-data">
                       Company<input type="text"    name="n" value="<?php echo $n; ?>">
                       <span style="color:red"><?php echo $ns; ?></span>
                       <br><br>
                       
                       Email<input type="text"  name="em"  value="<?php echo $em; ?>" >
                       <span style="color:red"><?php echo $es; ?></span>
                       
                       <br><br>
                       Phone<input type="text"  maxlength="10" name="ph"   value="<?php echo $ph; ?>">
                       <span style="color:red"><?php echo $phs; ?></span>
                       <br><br>
                       Password<input type="text" maxlength="10"  name="p"  value="<?php echo $p; ?>">
                       <span style="color:red"><?php echo $ps; ?></span>
                       <br><br>
                       
                       load photo 
                       	<input type="file" name="m" >
                       	<span style="color:red"><?php echo $ms; ?></span>
                       <br><br>
                       
                       
                       <input type="submit" name="s">
                       
                       </form> 
                   </div>	   
		    </div>	       
			
			       <div class="c">
				   <img src="images/b7.jpg" height="100% " width="100% ">
				   <div id="c1">Have</div>
						   <div id="c2">Business With Us. . .</div>
					    </div>


                       </div>
                       </div>
                       
                       
                       
                       
                       </div>
                       
                       
                       <img src="images/a28.jpg" style="position:fixed;top:0%;left:0%;width:100%;height:100%;z-index:-5;" >
                       
                       </body>
                       
                       



   



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
  <a class="navbar-brand" href="#"> ARMIARMA
 </a>
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
$a=$as=$b=$bs=$c=$cs=$d=$ds='';
 function name(){
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

 function email(){
	$b=trim($_POST['b']);
	$bc='/^[a-zA-Z0-9._-]*\@[A-Za-z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(!preg_match($bc,$b) )
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}
 function phone(){
	$c=trim($_POST['c']);
	$cc='/^[0-9]{10,10}$/';
	if(!preg_match($cc,$c) )
	{
		return 'n';
	}
	else 
	{
		return 'y';
	}
}

 
 function message(){
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
   if(name()=='y')
   {
	$a=trim($_POST['a']);
}
else
{
	$as="**** check name";
}

if(email()=='y')
{
	$b=trim($_POST['b']);
}
else
{
	$bs="**** check mail";
}
if(phone()=='y')
{
	$c=trim($_POST['c']);
}
else
{
	$cs="**** check No.";
}
if(message()=='y')
{
	$d=trim($_POST['d']);
}
else
{
	$ds="** Check";
}
if(name()=='y' && email()=='y' && phone()=='y' && message()=='y')
 {

	include"connection.php";  
	$q="insert into  enquiry
	(email,name ,phone ,message  )
	values('".$b."', '".$a."' , '".$c."' ,
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
<style>
.eq{margin:10px;background-color: rgba( 9, 10, 9  ,0.6);height:700px;}

.b{
	position:absolute;
	left:10%;
	top: 15%;
	width:80%;
	height:85%;
   }
   .a{
	position:absolute;
top:5%;
width:50%;
height:90%;
left:25%;
background: linear-gradient(to bottom, #99ccff 18%, #ffccff 100%);
border-top-left-radius:10%;
border-bottom-left-radius:10%;
border-top-right-radius:10%;
border-bottom-right-radius:10%;
overflow: hidden;
opacity:0.8;

}
#b1{
	position:absolute;
	left:10%;
	top: 5%;
	width:80%;
text-align:center;
}

</style>

<div class='fluid-container'>
	<div class='row'>

		<div class="col-md-12">
		<div class="eq">
                           <div class="a">
						   <div id="b1" >ENQUIRY</div>
						   <div class="b">
							   
                          <form action="" method="POST">
							 
                          Name<input type="text"    name="a" value="<?php echo $a; ?>">
                          <span style="color:red"><?php echo $as; ?></span>
                          
                          <br><br>
                          Email<input type="text"   name="b" value="<?php echo $b;?>" >
                          <span style="color:red"><?php echo $bs; ?></span>
                          
                          
                          <br><br>
                          Phone<input type="text"  maxlength="10" name="c" value="<?php echo $c;?>" >
                          <span style="color:red"><?php echo $cs; ?></span>
                          <br><br>
                          Message<input type="text"    name="d"  value="<?php echo $d;?>">
                          <span style="color:red"><?php echo $ds; ?></span>
                          <br><br>
                          <input type="submit" name="s">
                          </form> 
                            </div>
							</div>
                          
                        
                          
                   


</div>

</div>


</div>


<img src="images/b8.jpg" style="position:fixed;top:0%;left:0%;width:100%;height:100%;z-index:-5;" >
</body>






<?php 
session_start();
if(isset($_SESSION['aid']))
{
	header("location:admin.php");
}
if(isset($_SESSION['vid']))
{
	header("location:bvendor.php");
}
if(isset($_SESSION['uid']))
{
	header("location:uuser.php");
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


<style>
.a{margin:10px;background-color: red;
  background: linear-gradient(#bdc3c7 ,  #2c3e50);
height:600px;}

.d{position:absolute;
	font-family: "Times New Roman", Times, serif;
	border:2px solid #DEE1E1  ;
	border-radius:10px;
	transition-duration: 0.4s;
	padding: 12px 20px;
	
    box-sizing: border-box;
	border: 3px solid #555;
	
	background-color: rgba(255, 255, 255 , 0.3);
	
	
	
	
	
	
	
	}
	.d:hover  {
  background-color:#DEE1E1   ; 
  color: white;
}
.c{
	position:absolute;
	left:15%;
	top: 30%;
	width:80%;
	
}
.b{
	position:absolute;
top:10%;
z-index:+5;
height:70%;
left:10%;
background: linear-gradient(to bottom, #99ccff 18%, #ffccff 100%);
border-top-left-radius:10%;
border-bottom-left-radius:10%;
overflow: auto;

}
.e{
	position:absolute;
	top:90%;
	left:15%;
	border-radius: 12px;
	width:60%;
	transition-duration: 0.4s;
	opacity: 0.7;
	background-color: #008CBA;

}
.e:hover{
	background-color: #4CAF50; /* Green */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.f{
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
	.b1{
		position:absolute;
	left:11%;
	top: 32%;
	width:5%;
	height:5%;

	}
	.b2{
		position:absolute;
	left: 10%;
	top: 40%;
	width:7%;
	height:7%;
}
#f1{
	position:absolute;
	top:27%;
	left:10%;
	width:30%;
	height:30%;
	color:white;
	font-family: Trebuchet MS;
font-size:1vw;
	
}
#f2{
	position:absolute;
	top:30%;
	left:8%;
	width:60%;
	height:30%;
	color:white;
	font-family: Trebuchet MS;
font-size:3.4vw;
	
}
.e1{
	position:absolute;
	top:70%;
	left:10%;
	border-radius: 12px;
	width:40%;
	transition-duration: 0.4s;
	opacity: 0.9;
	background-color: #008CBA;


}
.e1:hover{
	background-color: #4CAF50; /* Green */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.e2{
	position:absolute;
	top:70%;
	left:55%;
	border-radius: 12px;
	width:40%;
	transition-duration: 0.4s;
	opacity: 0.9;
	background-color: #008CBA;
	
	
	
}
.e2:hover{
	background-color: #4CAF50; /* Green */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

<div class='fluid-container' >
	<div class='row'>

		<div class="col-md-12 " >
			
		<div class="a">
			<div><img src="images/a24.jpg" height="100% " width="100% " ></div>
	                <div class="b">

	                   <div class="c">
                           <form action="check.php" method="POST"  enctype="multipart/form-data">
			                <input type="text" size="50" name="n"  style="text-align: center" placeholder="Enter login id "class="d"> <br><br><br>
			                <input type="text" size="50" name="p"  style="text-align: center" placeholder="Password"class="d" > <br><br><br>
			                
							<input type="submit" name="s" class="e" value="login">

                          </form>
                         </div>

						 <div><img src="images/a25.jpg" height="100% " width="100% " >
						 	<button type="button" size="40"name="s" class="e1"  ><a href="vendor.php" style="color: black;text-decoration:none;">Company sign in</a></button>
							<button type="button" size="40"name="s" class="e2" ><a href="user.php" style="color: black; ;text-decoration:none" >Tourist sign in</a></button>
						
						</div>
                    </div>

              <div class="b1"><img src="images/a22.png" height="100% " width="100% " ></div>
			  <div class="b2"><img src="images/a23.png" height="100% " width="100% " ></div>




                           <div class="f">
							   <img src="images/a23.jpg" height="100% " width="100% ">
						   <div id="f1">Start planing your</div>
						   <div id="f2">Journey . . .</div>
						  </div>






       

        </div>
</div>




</div>
<img src="images/a23.jpg" style="position:fixed;top:0%;left:0%;width:100%;height:100%;z-index:-5;" >

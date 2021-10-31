
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
	values('1','".$a."', '".$b."' , '".$c."' ,
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
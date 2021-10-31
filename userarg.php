<!---
phone
'/^[0-9]{10,10}$/';

email
'/^[a-zA-Z0-9._-]*\@[A-Za-z0-9]*\.[a-zA-Z.]{2,6}$/';

name
'/^[A-Za-z ]*$/';

preg_match(structure,input variable);

trim() 

length;


!-->
<?php 
$n=$e=$ph=$pa=$d=$ns=$ds=$ms=$phs=$es=$pas='';
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


function echeck()
{
	$e=trim($_POST['e']);
	$ec='/^[a-zA-Z0-9._-]*\@[A-Za-z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(!preg_match($ec,$e) )
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
	$pa=trim($_POST['pa']);
	
	if(strlen($pa)<4)
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
  
		$ext=array('jpg','png','jfif','bmp','gif');
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
		$e=trim($_POST['e']);
	}
	else
	{
		$es="**** check email";
	}	
	
	if(phcheck()=='y')
	{
		$ph=trim($_POST['ph']);
	}
	else
	{
		$phs="**** check phone ";
	}
	
	
	
	if(pascheck()=='y')
	{
		$pa=trim($_POST['pa']);
	}
	else
	{
		$pas="**** check  password";
	}
	

	
	if(photocheck()=='n')
	{
		$ms="**** check photo ";
	}

   
  
 
 if(ncheck()=='y' && photocheck()=='y' && pascheck()=='y' && phcheck()=='y' && echeck()=='y')
 {
   // $bd='name -'.$n.' <br>email -'.$e.'<br>Phone no- '.$ph.'<br> 
   //Password-'.$pa.' date '.$d.' address '.$ad;
    
  //  echo $bd;
  
   $fn=$_FILES['m']['name'];
   $ta=$_FILES['m']['tmp_name'];
   $fa='load/'.uniqid().$fn;   // photo final location
  
include"connection.php";  
$q="insert into user
(email,name ,phone ,password ,photo_id  )
values('".$e."', '".$n."' , '".$ph."' ,
		'".$pa."', '".$fa."')
";

$sq=mysqli_query($cn,$q);
	if($sq)
	{
		move_uploaded_file($ta,$fa);
$n=$e=$ph=$pa=$ns=$ms=$phs=$es=$pas='';
		echo '<script> alert(" registered")</script>';
	}
	else 
	{
		echo '<br>'.mysqli_error($cn);  // query error 
	}
	

	
  
   // photo
    //echo'<img src="'.$fa.'" width=100" height="100">';
 
 
   }
   else
   {
	echo '<script> alert("check")</script>';
   }
}
?>

<title>User</title>
<body> 
<form action="" method="POST" enctype="multipart/form-data">
Name<input type="text"    name="n" value="<?php echo $n; ?>">
<span style="color:red"><?php echo $ns; ?></span>
<br><br>

Email<input type="text"  name="e"  value="<?php echo $e; ?>" >
<span style="color:red"><?php echo $es; ?></span>
<br><br>
Phone<input type="text"  maxlength="10" name="ph"   value="<?php echo $ph; ?>">
<span style="color:red"><?php echo $phs; ?></span>

<br><br>
Password<input type="text" maxlength="10"  name="pa"  value="<?php echo $pa; ?>">
<span style="color:red"><?php echo $pas; ?></span>
<br><br>

load photo 
	<input type="file" name="m" >
	<span style="color:red"><?php echo $ms; ?></span>
<br><br>



<input type="submit" name="s">

</form> 
</body>




   



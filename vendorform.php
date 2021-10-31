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
</body>





   



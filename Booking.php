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
    if(dcheck()=='y')
    {
     $a=$_POST['a'];

	 $b=$_POST['b'];
	 
	
		$d=date('Y-m-d');
	   include"connection.php";  
	   $q="insert into  booking( vid, pid, uid,noperson,amount ,Bdate, pdate)
	   values('1','1','1',
	   '".$a."', '".$b."' , '".$d."', '".$c."')
	   ";

	
	   $sq=mysqli_query($cn,$q);
	   if($sq)
	   {
		$c=$cs='';
  
		   echo '<script> alert(" Thanks for booking")</script>';
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



<title>Booking</title>
<body> 
<form action="" method="POST" enctype="multipart/form-data">
NoPerson
<select name="a">
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

Amount<input type="text"  name="b"  value='0' readonly >

<br><br>
| Pdate [ within 30 days ] 
<input type="date"   name="c"  value="<?php echo $c; ?>">
<span style="color:red"><?php echo $cs; ?></span>
<br><br>
<input type="submit" name="s">

</form> 
</body>






<?php
if(isset($_POST['s']))
{
		$n=$_POST['n'];
		$p=$_POST['p'];
		if($n=='argus' && $p=='academy')
		{
			session_start();
			$_SESSION['n']=$n;
			$_SESSION['aid']=session_id();
			header("location:admin.php");

		}
		else
		{
		
		//vender login 
					include"connection.php";
	$q="select * from vendor where email='".$n."' and password='".$p."'";
					
					$sq=mysqli_query($cn,$q);
					
					if($sq)
					{
					
						if(mysqli_fetch_assoc($sq)>0) 
						{
			session_start();
			$_SESSION['v']=$n;
			$_SESSION['vid']=session_id();
			header("location:bvendor.php");
						}
						else 
						{
							//user  login
							include"connection.php";
	$q="select * from user where email='".$n."' and password='".$p."'";
					
						 
                                          
            	     $sq=mysqli_query($cn,$q);
            					
            	if($sq)
            	{
            	
            	          	if(mysqli_fetch_assoc($sq)>0) 
            		{
            session_start();
            $_SESSION['u']=$n;
            $_SESSION['uid']=session_id();
			header("location:uuser.php");
					}
					else{
						header("location:login.php");
					}

							
						}
						else 
						{
							echo'<br>'.mysqli_error($cn);
						}
					}
					}
					else 
					{
						echo'<br>'.mysqli_error($cn);
					}

		}
}
else
{
header("location:login.php");
}
?>
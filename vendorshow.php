<?php 
	include"connection.php";
	$q="select * from vendor";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);
	echo '<table  ><tr bgcolor="cyan">
<th> vid  </th>	  <th> email   </th>    <th> name  </th>    
<th> phone  </th> 		<th> password  </th>
<th> photo  </th>	
<th> delete  </th>          
 </tr>  ';
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$vid=$r['vid'];
				echo '<tr bgcolor="pink">  <th>'.$r['vid'].'</th>';
				echo ' <th>'.$r['email'].'</th>';
				echo ' <th>  '.$r['name'].'</th>'; 
				echo ' <th> '.$r['phone'].'</th>';
				echo ' <th> '.$r['password'].'</th>'; 
				echo ' <th><img src="'.$r['photo'].'" width="50" heigth="50"></th>';
				echo ' <th><a href="vendordelete.php?vid='.$vid.'"> delete</a></th>
				</tr>';
			}
			
			echo '</table>';
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




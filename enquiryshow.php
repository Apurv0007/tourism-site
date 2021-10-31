<?php 
	include"connection.php";
	$q="select * from enquiry";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);
	echo '<table  ><tr bgcolor="cyan">
<th> eid  </th>	  <th> email   </th>    <th> name  </th>    
<th> phone  </th> 		<th> Message  </th>
<th> delete  </th> 
	     
 </tr>  ';
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$eid=$r['eid'];
				echo '<tr bgcolor="pink">  <th>'.$r['eid'].'</th>';
				echo ' <th>'.$r['email'].'</th>';
				echo ' <th>  '.$r['name'].'</th>'; 
				echo ' <th> '.$r['phone'].'</th>';
				echo ' <th> '.$r['Message'].'</th>'; 
				echo ' <th><a href="enquirydelete.php?eid='.$eid.'"> delete</a></th>
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




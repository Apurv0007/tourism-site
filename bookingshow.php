<?php 
	include"connection.php";
	$q="select * from booking";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) 
		{
			$sq=mysqli_query($cn,$q);
	echo '<table  ><tr bgcolor="cyan">
<th> bid </th>	  
<th> pid </th>    
<th> vid </th>    
<th> uid </th>     
<th> no person</th>    
<th> Amount</th> 
<th> package date </th>

<th> delete  </th>       
	     
 </tr>  ';
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$bid=$r['bid'];
				echo '<tr bgcolor="pink">  <th>'.$r['bid'].'</th>';
                echo ' <th>'.$r['pid'].'</th>';
                echo ' <th>'.$r['vid'].'</th>';
                echo ' <th>'.$r['uid'].'</th>';
				echo ' <th>'.$r['noperson'].'</th>';
				echo ' <th>  '.$r['Amount'].'</th>'; 
				echo ' <th> '.$r['Pdate'].'</th>';
			
				echo ' <th><a href="bookingdelete.php?bid='.$bid.'"> delete</a></th>
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
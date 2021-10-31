


<hr color="red"> 
to show table value 
	<br> mysqli_fetch_assoc()   column_name 
	//fetches whole row value one by one   
<hr color="red">
<?php 
	include"connection.php";
	$q="select * from user ";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);
	echo '<table  ><tr bgcolor="cyan">
<th> uid  </th>	  <th> email   </th>    <th> name  </th>    
<th> phone  </th> 		<th> password  </th>
<th> photo_id  </th>	 
<th> delete  </th>      
 </tr>  ';
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$uid=$r['uid'];
				echo '<tr bgcolor="pink">  <th>'.$r['uid'].'</th>';
				echo ' <th>'.$r['email'].'</th>';
				echo ' <th>  '.$r['name'].'</th>'; 
				echo ' <th> '.$r['phone'].'</th>';
				echo ' <th> '.$r['password'].'</th>'; 
				echo ' <th><img src="'.$r['photo_id'].'" width="50" heigth="50"></th>';
				echo ' <th><a href="userargdelete.php?uid='.$uid.'"> delete</a></th>
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




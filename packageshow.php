<?php 
	include"connection.php";
	$q="select * from package";
	
	$sq=mysqli_query($cn,$q);
	
	if($sq)
	{
	
		if(mysqli_fetch_assoc($sq)>0) // check if fetches any value 
		{
			$sq=mysqli_query($cn,$q);
	echo '<table  ><tr bgcolor="cyan">
<th> pid  </th>	  <th> vid   </th>    <th> package </th>    
<th> location </th> 
<th> rate </th>
<th> Details </th>
<th> delete  </th>       
	     
 </tr>  ';
			
			
			while($r=mysqli_fetch_assoc($sq))
			{
				$pid=$r['pid'];
				echo '<tr bgcolor="pink">  <th>'.$r['pid'].'</th>';
                echo ' <th>'.$r['vid'].'</th>';
				echo ' <th>'.$r['package'].'</th>';
				echo ' <th>  '.$r['location'].'</th>'; 
				echo ' <th> '.$r['rate'].'</th>';
				echo ' <th> '.$r['Details'].'</th>'; 
				echo ' <th><a href="packagedelete.php?pid='.$pid.'"> delete</a></th>
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
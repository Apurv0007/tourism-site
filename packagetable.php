<?php
include"connection.php";
$q="create table package
(pid int(5) primary key auto_increment,
vid int(5) not null  ,
package varchar(1000) not null ,
location varchar(50) not null ,
rate int(8) not null,
Details varchar(1000) not null)";

$sq=mysqli_query($cn,$q);
if($sq )
{
echo'created';
}
else
{
echo '<br> '.mysqli_error($cn);
}

?>
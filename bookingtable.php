<?php
include"connection.php";
$q="create table booking
(bid int(5) primary key auto_increment,
vid int(5) not null  ,pid int(5) not null  ,
uid int(5) not null  ,
noperson int(15) not null ,
Amount int(50) not null ,
Bdate date not null,
Pdate date not null)";

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

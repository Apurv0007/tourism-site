<?php
include"connection.php";
$q="create table vendor
(vid int(5) primary key auto_increment,
email varchar(50) not null unique,
name varchar(50) not null ,
phone varchar(15) not null,
password varchar(20) not null,
photo varchar(500) not null)";

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

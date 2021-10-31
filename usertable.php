<?php
include"connection.php"; 
$q="create table user 
(uid int(5) primary key auto_increment,
 name varchar(50) not null,
email varchar(50) not null unique,
password varchar(50) not null,
phone varchar(15) not null, photo_id varchar(500) not null)";

$sq=mysqli_query($cn,$q);
if($sq)
{
echo 'created';
}else
{
echo '<br>'.mysqli_error($cn);
}
?>
<?php
include"connection.php";
$q="create table enquiry
(eid int(5) primary key auto_increment,
email varchar(50) not null unique,
name varchar(50) not null ,
phone varchar(15) not null,
Message varchar(1000) not null)";

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
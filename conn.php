<?php
$con=mysqli_connect("localhost","root","","class1");
if(mysqli_connect_errno())
{
	echo"failed to connect to mysql:".mysql_connect_error();
}
?>
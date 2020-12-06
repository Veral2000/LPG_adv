<?php

$con = mysqli_connect("localhost", "admin", "agarwal2", "LPG1");


if(mysqli_connect_errornp())
{
	echo " Failed to connect to MYSQL:" .mysqli_connect_error();
}

?>

<?php  

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'students';

	$con = mysqli_connect($host,$user,$pass,$dbname);

	if(!$con)
	{
		die(mysqli_error($con));
	}

?>
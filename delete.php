<?php  
	include_once('include/user.php');

	$user = new user;

	$id = $_GET['id'];

	if(!$id)
	{
		$_SESSION['id'] = 'Please insert User Id !';
	}
	else{
		$user->delete($id);
	}
?>
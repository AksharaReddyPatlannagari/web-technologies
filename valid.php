<?php
if(isset($_REQUEST["username"]) && isset($_REQUEST["age"]))
{
	$username=$_REQUEST["username"];
	$age=$_REQUEST["age"];
	setcookie("c1",$username);
	if($age>=18)
	{
	header('location:welcome.php');
	}
	else
	{
	header('location:error.php');
	}
}
?>
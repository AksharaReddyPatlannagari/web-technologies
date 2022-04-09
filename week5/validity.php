<?php
$username=$_POST["user"];
$password=$_POST["password"];
if($username&&$password)
{
	$connect=mysqli_connect("localhost","root","") or die("could'nt connect database");
	$data=mysqli_select_db($connect,"sample1") or die("no database with name user_info");
	$q1="select * from user_info where username='".$username."' and password='".$password."' ;";
	$result=mysqli_query($connect,$q1)  or die("query execution unsuccessfull");
	$num=mysqli_num_rows($result);
	if($num==0)
	{
		$q2="select * from user_info where username='".$username."';";
		$r1=mysqli_query($connect,$q2);
		$n1=mysqli_num_rows($r1);
		if($n1==0)
		{
			echo"username incorrect";
		}
		else
		{
			echo"password incorrect";
		}
	}
	else
	{
		echo"Login successfull<br>";
		echo"HI ".$username;
	}
}
else
{
echo("enter the username and password");
}
?>
<?php
	setcookie("c1","cookie1");
	setcookie("c2","cookie2");
	setcookie("c3","cookie3");
	
	$c1=$_COOKIE['c1'];
	$c2=$_COOKIE["c2"];
	$c3=$_COOKIE["c3"];

	echo "$c1<br>";
	echo "$c2<br>";
	echo "$c3<br>";
	
?>
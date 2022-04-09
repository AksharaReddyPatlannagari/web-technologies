<!DOCTYPE html>
<head>
	<title>Calculator</TITLE>
</head>
<body>
	<form name="f1" action=calculator_modify.php>
		<h1>CALCULATOR</h1>
		op1:<input type="text" name="op1">
		<br><br>
		op2:<input type="text" name="op2">
		<br><br>
		<select name="opr">
			<option>operator</option>
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
			<option>%</option>
		</select>
		<input type="submit" value="calculate">		
	</form>
<?php
$connect=mysqli_connect("localhost","root","") or die("could'nt connect database");
$data=mysqli_select_db($connect,"sample1") or die("no database with name user_info");

if(isset($_REQUEST["op1"])&&isset($_REQUEST["op1"]))
{
	if(is_numeric($_REQUEST["op1"])&&is_numeric($_REQUEST["op1"]))
	{
	$op1=$_REQUEST["op1"];
	$op2=$_REQUEST["op2"];
	$opr=$_REQUEST["opr"];
	switch($opr)
	{
		case "+":$res=$op1+$op2;break;
		case "-":$res=$op1-$op2;break;
		case "*":$res=$op1*$op2;break;
		case "/":$res=$op1/$op2;break;
		case "%":$res=$op1%$op2;break;
		case "operator":echo("select an operator");break;
	}
	$q1="select * from operators where op1=$op1 and op2=$op2 and operator='".$opr."';";
	$result=mysqli_query($connect,$q1)  or die("query execution unsuccessfull");
	$n1=mysqli_num_rows($result);
	if($n1==0)
	{
	$q2="insert into operators VALUES($op1,$op2,'".$opr."',$res);";
	$result1=mysqli_query($connect,$q2)  or die("query execution unsuccessfull");
	echo("ROW INSERTED SUCCESSFULLY<br> ");
	echo("result is ".$res);
	}
	else
	echo("result is ".$res);
	}
	else
	echo("enter only numbers");
}
else
	echo("enter the operands");
?>
</body>
</html>

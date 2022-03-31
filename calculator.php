<?php
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
	echo("result is ".$res);
	}
	else
	echo("enter only numbers");
}
else
	echo("enter the operands");
?>
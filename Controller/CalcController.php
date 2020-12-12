<?php 

include_once('../Model/CalcModel.php');

if(isset($_POST) && isset($_POST['btnSubmit'])){
	$var1=$_POST['number1'];
	$var2=$_POST['number2'];
	$method=$_POST['method_v'];
	//$method=$_POST['pheptinh'];

	$calc=new Model();
	$calc->a=$var1;
	$calc->b=$var2;
	//$calc->method_calc($method);
	$calc->Tinh($method);





}

include_once('../View/CalcView.php');

?>
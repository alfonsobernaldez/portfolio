<?php
session_start();
require_once("database.php");
	
if(empty($_POST['correo']) || empty($_POST['nombre']) || empty($_POST['contra']) || empty($_POST['empresa'])){
	$_SESSION['error_login'] = "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Debes introducir los datos requeridos</div>";
	header("Location: ../register.php");
}
else{
	$correo = $_POST['correo'];
	$nombre = $_POST['nombre'];
	$contra = $_POST['contra'];
	$empresa = $_POST['empresa'];

	$resultado = insertarUsuario($con, $_POST['correo'], $_POST['nombre'],$_POST['contra'],$_POST['empresa']);
	header("Location: ../loginhtml.php");


	if(isset($_POST['crear'])){
		if(empty($_POST['correo']) || empty($_POST['contra'])){
			echo "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Debes rellenar todos los campos</div>";
		}
		else{
			

			header("Location: ../loginhtml.php");
		}
	}
}










?>
<?php
session_start();
require_once("database.php");


	if(empty($_POST['correo']) || empty($_POST['contra'])){
		$_SESSION['error_login'] = "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Debes introducir los datos requeridos</div>";
		header("Location: ../loginhtml.php");
	}
	else{
		$correo = $_POST['correo'];
		$contra = $_POST['contra'];
		
		$resultado = login($con, $correo, $contra);
		if($resultado == 0){
			$_SESSION['error_login'] = "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Email o contraseña incorrectos</div>";
			header("Location: ../loginhtml.php");
		}
		else{
			$_SESSION['correo'] = $resultado['correo'];
			$_SESSION['contra'] = $resultado['contra'];
			header("Location: ../indexlog.php");
			
		}
	}
	
	cerrarConexion($con);

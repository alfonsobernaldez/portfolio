<?php
session_start();
require_once("database.php");


	if(empty($_POST['correo']) || empty($_POST['contra'])){
		$_SESSION['error_login'] = "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Debes introducir los datos requeridos</div>";
		header("Location: ../loginhtml.php"); //Si alguno de los campos esta vacio, mensage y vuelve a la misma pagina
	}
	else{
		$correo = $_POST['correo'];
		$contra = $_POST['contra'];
		
		$resultado = login($con, $correo, $contra);
		echo"<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>todo va bien</div>";
		
		if($resultado == 0){

			$_SESSION['error_login'] = "<div style='text-align:center; color:red; font-size:18px; font-weight:bold'>Email o contraseña incorrectos</div>";
			header("Location: ../loginhtml.php"); //si alguno no coincide con la bbdd
		
		}else{
			$_SESSION = $resultado['correo'];
			$_SESSION = $resultado['contra'];

			header("Location: ../indexlog.php");

		}
		
	}
	cerrarConexion($con);

?>
<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "proyecto";

	$con = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar con la base de datos");
	
	function login($con, $correo, $contra){
		$result = mysqli_query($con, "select * from Usuario where correo='".$correo."' and contra='".$contra."'");
		if(mysqli_num_rows($result)==0){
			return 0; //Si no existe el usuario devuelvo 0
		}
		else{
			$usuario = mysqli_fetch_array($result);
			return $usuario;//Si existe el usuario devuelvo un array con sus datos
		}
	}
	

	function cerrarConexion($con){
		mysqli_close($con);
	}
	
	////////////////////////////////////////////// FUNCIONES DE USUARIOS //////////////////////////////////////////////
	function listarUsuarios($con){
		$result = mysqli_query($con, "select * from Usuario");
		$usuarios = array();
		while($fila = mysqli_fetch_array($result)){
			$usuarios[] = $fila;
		}
		return $usuarios;//Devuelvo un array con los datos de todos los usuarios
	}
	
	function insertarUsuario($con, $correo, $nombre, $contra, $empresa){
		mysqli_query($con, "insert into usuario values('".$correo."','".$nombre."','".$contra."','".$empresa."');");
	}
	
	function obtenerUsuario($con, $correo, $contra){
		$resultado = mysqli_query($con, "select * from Usuario where correo='".$correo."', contra='".$contra."';");
		if(mysqli_num_rows($resultado)==0){
			return 0; //Si no existe el usuario devuelvo 0
		}
		else{
			$usuario = mysqli_fetch_array($resultado);
			return $usuario;//Si existe el usuario devuelvo un array con sus datos
		}
	}
	
	
	

	
	
?>
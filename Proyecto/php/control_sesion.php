<?php
	session_start();

	if(!isset($_SESSION['correo'])){
		header("Location: index.php");
	}
	
	function controlSesionUser(){
		if(!isset($_SESSION['contra'])){
			header("Location: index.php");
		}
	}
?>
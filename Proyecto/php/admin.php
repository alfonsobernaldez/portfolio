<?php
require_once("control_sesion.php");
require_once("database.php");
	

	echo "<h2>Página de administración</h2>";
	
	echo "<a href='logout.php'>Logout</a>";
	
	///////////////// GESTION USUARIOS /////////////////
	echo "<h3>Gestión usuarios</h3>";
	
	echo "<a href='crear_usuario.php'>Crear usuario</a>";
	
	$usuarios = listarUsuarios($con);
	echo "<table border='1'>
			<tr><td>correo</td><td>contra</td><td>TIPO USUARIO</td><td>ACCIONES</td></tr>";
	foreach($usuarios as $usuario){
		echo "<tr>
				<td>".$usuario['correo']."</td>
				<td>".$usuario['contra']."</td>";
				if($usuario['tipo_usuario'] == 0){
					echo "<td>Admin</td>";
				}
				else{
					echo "<td>User</td>";
				}
				echo "<td>
						<a href='editar_usuario.php?user=".$usuario['correo']."'>Editar</a>
						<a href='borrar_usuario.php?user=".$usuario['correo']."'>Borrar</a>
					</td>
			</tr>";
	}
	echo "</table>";
	
	cerrarConexion($con);
?>
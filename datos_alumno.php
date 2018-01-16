<html><head><title>Resultado de introducir datos de un alumno</title></head>
<body>
<?php
if(isset($_POST['nombre']) && isset($_POST['telefono']) &&
isset($_POST['enseñanza']) && isset($_POST['mostrar'])){
		$mensaje = "El alumno " . $_POST['nombre'] . ", con teléfono " . $_POST['telefono'];
		if(isset($_POST['matriculado']))
				$mensaje .= ", está matriculado en ".$_POST['enseñanza'];
		else
				$mensaje .= ", no está matriculado.";

		if($_POST['mostrar']=="Por Pantalla")
				echo $mensaje;
		else{
				$nombrefichero="datos.txt";
				if($descriptorarchivo = fopen($nombrefichero,"w")){
						fputs($descriptorarchivo,$mensaje);
						fclose($descriptorarchivo);
						echo "<br><a href='mostrardatos.php'>Mostrar archivo</a><br>";
		}
		else{
						echo "ERROR: Imposible abrir fichero $nombrefichero para escritura.<br>\n";
		}
	}
}
?>
<br><a href="formulario4.php">Volver</a>
</body></html>
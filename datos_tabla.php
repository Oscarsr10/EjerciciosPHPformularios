<html><head><title>Resultado de la multiplicacion</title></head>
<body>
<?php 
if(isset($_POST['numero'])){ 
	echo "TABLA DE MULTIPLICAR DEL " . $_POST['numero'] . ":<br>";
	for($x=1;$x<=10;$x++){
			$resultado= $x * $_POST['numero'];
			echo "$x x " . $_POST['numero'] . " = $resultado<br>";
}
}
?>
<br><a href='formulario1.php'>Volver</a>
</body></html>
<html><head><title>Resultado de la lista de pares de números</title></head>
<body>
<?php
if(isset($_POST['menor']) && isset($_POST['mayor'])){
		echo "LISTA DE PARES DE NÚMEROS DE " . $_POST['menor'] . " Y " . $_POST['mayor'] . ":<br>";
		for($x=$_POST['menor'];$x<=$_POST['mayor'];$x++){
				$valor1=$x;
				$valor2=$_POST['mayor']-($x-$_POST['menor']);
				echo "($valor1,$valor2) ";
		}
}
?>
<br><a href='formulario2.php'>Volver</a>
</body></html>
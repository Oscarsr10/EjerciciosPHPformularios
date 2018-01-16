<html>
<title> Numero Par o impar </title>
<body>
<?php
if(ES_PAR($_POST['numero']))
	echo "El numero es par";
else
	echo "El numero es impar";
function ES_PAR($num){
if($num%2==0)
	return true;
else
	return false;
}

?>
</body>
</html>
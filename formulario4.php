<html><head><title>Introducir datos de un alumno</title></head>
<body>
<form method="POST" action="datos_alumno.php">
DATOS DEL ALUMNO:<br>
Introduzca su nombre <input type="text" name="nombre" size="10"><br><br>
Introduzca su teléfono <input type="text" name="telefono" size="10"><br><br>
Matriculado <input type="checkbox" name="matriculado" checked><br><br>
Enseñanza:<br>
<input type="radio" value="Secundaria" name="enseñanza">Secundaria
<input type="radio" value="Bachillerato" name="enseñanza">Bachillerato
<input type="radio" value="Ciclo medio" name="enseñanza">Ciclo medio
<input type="radio" value="Ciclo superior" checked name="enseñanza">Ciclo superior<br>
<br>
Mostrar datos:
<select size="1" name="mostrar">
<option selected>Por Pantalla</option>
<option>En Archivo datos.txt</option>
</select><br><br>
<input type="submit" value="Enviar datos" name="enviar">
</form>
</body></html>
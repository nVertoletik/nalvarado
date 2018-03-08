<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Comentario</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body>
	<h2>Instrucciones</h2>
	<p>
		Rellena los siguientes campos para escribir un comentario
	</p>
	
	<form action="guarda_comentario.php" method="post">
		<div>
		Nombre:<br/>
		<input type="text" name="nombre"><br/>
		</div>
		<div>
		Correo:<br/>
		<input type="email" name="correo"><br/>
		</div>
		<div>
		Comentario:<br/>
		<input type="text" name="comentario" size="50"><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>
	<a href="index.php">Regresar a la pagina principal</a>
	
	<br/>
	<hr/>
	
<footer>
	<a href="https://www.unam.mx">Universidad Nacional Autonoma de Mexico</a>
	<a href="https://www.fca.unam.mx">Facultad de Contaduria y Administracion</a>
	<a href="creditos.php">Creditos</a>
</footer>
	
</body>

</html>

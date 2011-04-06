<?
$resultado = $conexion->consulta("SELECT nombre FROM usuarios WHERE id=".$tokens[3]);
$articulo = mysql_fetch_array($resultado);
?>
<html>
<head>
	<title>Editar usuario</title>
</head>
<body>
	<form name="edicion" id="edicion" action="/lab4arqui/app/usuario_update.php" method="post">
		<input type="hidden" name="id" id="id" value=" <? echo $tokens[3] ?>" />		
		Nuevo nombre del Usuario: 		
		<input type="text" name="nombre" id="nombre" value=" <? echo $articulo['nombre'] ?>" />
		<br />
		<input type="submit" value="UPDATE">
	</form>
</body>
</html>

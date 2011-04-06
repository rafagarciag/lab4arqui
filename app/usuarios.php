<?
$cont=1;
//require('conexion2.php');


$resultado = $conexion->consulta('SELECT * FROM usuarios');

while ($articulo = mysql_fetch_array($resultado) ) {
	echo ''.$articulo['nombre'];
	
?>
	<a href="usuarios/<?echo $articulo['id'] ?>">Show</a>
	<a href="usuarios/<? echo $articulo['id'].'/edit' ?>">Editar</a>
	<a href="usuarios/<? echo $articulo['id'].'/destroy' ?>">Destruir</a>
<br/>
<?
$cont++;
}
?>
<a href="usuarios/new">Nuevo Usuario<a/>

<?
$resultado = $conexion->consulta("DELETE FROM usuarios WHERE id=".$tokens[3]);
header("Location: http://localhost/lab4arqui/usuarios");
?>


<?php

//AQUI PUEDEN IR MUCHAS COSAS QUE SERAN ESTATICAS POR TODA LA PAGINA

function curPageURL() {
 $pageURL = "";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<?
require('app/conexion2.php');
$conexion = new Conexion('localhost', 'root', 'admin');
$url = curPageURL();
$tokens = explode("/", $url);

switch(count($tokens)){

	case 2:
		require('app/index.php');
		break;
	
	case 3: 
		if(!strcmp($tokens[2], "")){
			require('app/index.php');
		}
		else if(!strcmp($tokens[2], "usuarios")){
			require('app/usuarios.php');
		}
		else{
			echo 'ERROR 404';
		}
		break;

	case 4:
		if(!strcmp($tokens[2], "usuarios") && !strcmp($tokens[3], "")){
			require('app/usuarios.php');
		}
		else if(!strcmp($tokens[2], "usuarios") && !strcmp($tokens[3], "new") ){
			require('app/usuarios_new.php');
		}
		else if(!strcmp($tokens[2], "usuarios") && ($tokens[3]>0) ){
			require('app/usuarios_show.php');
		}
		else{
			echo 'ERROR 404';
		}
		break;
	case 5:
		if(!strcmp($tokens[2], "usuarios") && ($tokens[3]>0) && !strcmp($tokens[4], "edit") ){
			require('app/usuarios_edit.php');
		}
		else if(!strcmp($tokens[2], "usuarios") && ($tokens[3]>0) && !strcmp($tokens[4], "destroy") ){
			require('app/usuarios_destroy.php');
		}
		else{
			echo 'ERROR 404';
		}
		break;
	default:
		echo 'ERROR 404';
}

?>


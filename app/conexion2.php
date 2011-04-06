<?

class Conexion {

	var $servidor;
	var $usuario;
	var $clave;
	var $con;
	
	function Conexion($serv, $u, $p){
		$this->servidor = $serv;
		$this->usuario = $u;
		$this->clave = $p;
		$this->con = mysql_connect($this->servidor, $this->usuario, $this->clave);
		mysql_select_db ("arqui_lab");
	}

	function cerrar_conexion(){
		mysql_close($conexion);
	}
	
	function consulta($consult){
		return mysql_query($consult, $this->con);  
	}
}
?>

<?
require('mysql.php');
class Usuario extends MySQL {
	private $nombre;
	private $tabla = 'usuarios';
	
	public function __construct(){}
	
	//sets	
	public function setNombre($nom){
		$this->nombre=$nom;
	}
	
	// Traer todo un renglon 
	public function fetch($id){
		$row = $this->query("SELECT * FROM $this->tabla WHERE id='$id'");
		
		$row = $this->fetchRow();
			
		//if(!$row=mysql_query("SELECT * FROM $this->tabla WHERE id='$id'")){
			//throw new Exception('Error en el fetch');
		
		return $row;
	}
	
	// insertar un renglon nuevo
	public function insert(){
		if(!mysql_query("INSERT INTO $this->tabla (nombre) VALUES ('$this->nombre')")){
			throw new Exception('Error insertando renglón');
		}
	}
	
	// Hacer update
	public function update($id){
		$quer = "UPDATE $this->tabla SET nombre='$this->nombre' WHERE id='$id'";
		mysql_query($quer);
		echo $quer;
	}
	
	// Eliminar renglon
	public function delete($id){
		$quer = "DELETE FROM $this->tabla WHERE id='$id'";
		mysql_query($quer);
		
		
	}


}
?>

<?
class MySQL{

	public $resultado;
	
	//para conectarse a la base de datos y seleccionar una base de datos
	public function __construct($host='localhost',$user='root',$password='admin',$database='arqui_lab'){
	
		if(!$conexion=mysql_connect($host,$user,$password)){
			throw new Exception('Error conectándose al servidor');
		}
		
		if(!mysql_select_db($database,$conexion)){
			throw new Exception('Error seleccionando base de datos');
		}
	}
	
	//para hacer una query
	public function query($query){
		if(!$this->resultado=mysql_query($query)){
			throw new Exception('Error al intentar hacer la query: '.$query);
		}
	}
	
	//para traer una tupla
	public function fetchRow(){
		while($row=mysql_fetch_array($this->resultado)){
			return $row;
		}
		return false;
	}
	
	//regresa un arreglo con todas las tuplas
	public function fetchAll($tabla){
		$this->query('SELECT * FROM '.$tabla);
		$rows=array();
		while($row=$this->fetchRow()){
			$rows[]=$row;
		}
		return $rows;
	}
	
	//insertar nuevo registro
	//public function insert($params,$table){
		//$sql='INSERT INTO '.$table.'(matricula, nombre, apellidos, email) VALUES ('."'".$params->matricula."'".','."'".$params->nombre."'".','."'".$params->apellidos."'".','."'".$params->email."'".')';
		//$this->query($sql);
	//}
}
?>

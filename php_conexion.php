<?php
	
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("carrito",$conexion);
	date_default_timezone_set("America/Bogota");
	
	
class Consultar_Producto{
	private $consulta;
	private $fetch;
	
	function __construct($codigo){
		$this->consulta = mysql_query("SELECT * FROM producto WHERE codigo='$codigo'");
		$this->fetch = mysql_fetch_array($this->consulta);
	}
	
	function consultar($campo){
		return $this->fetch[$campo];
	}
}
	
?>
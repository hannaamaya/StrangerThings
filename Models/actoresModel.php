<?php 
	//clase actoresModel heredada de mysql
	class actoresModel extends Mysql{
		public function __construct(){
			parent::__construct();
		}	
		//obtener tabla actores
	    public function getActores(){
            $consulta = "SELECT * FROM actores";
            $datos = $this->select_all($consulta);
			return $datos;
        }
	}
?>
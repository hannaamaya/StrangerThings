<?php 
	//controlador y metodos
	class Premios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function premios()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Premios";
			$data['page_title'] = "Premios Totales";
			$data['page_name'] = "premios";
			$this->views->getView($this,"premios",$data);
		}
	}
 ?>
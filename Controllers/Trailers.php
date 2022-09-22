<?php 
	//controlador y metodos
	class Trailers extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function trailers()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Trailers";
			$data['page_title'] = "Trailers Temporadas";
			$data['page_name'] = "trailers";
			$this->views->getView($this,"trailers",$data);
		}

	}
 ?>
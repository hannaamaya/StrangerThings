<?php 
    //clase actore hereda de Controllers
    class Actores extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }   
        
        public function actores(){
            $model = $this->model;
			$data['page_id'] = 4;
			$data['page_tag'] = "Actores";
			$data['page_title'] = "Lista de Actores";
			$data['page_name'] = "actores";
            $data['actores'] = $model->getActores();
			$this->views->getView($this,"actores",$data);
		}   

    }    
?>
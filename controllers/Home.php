<?php
    //se hace la herencia con extends hacia la clase conrollers
    class Home extends controllers{
        public function __construct()
        {
            //ejecutar metodo constructor
            parent::__construct();
        }

        public function home($parems)
        {
            //echo "mensaje dese el controlador";
            $this->views->getViews($this,"home");
        }

        public function datos($params){
            echo "dato recibido: ".$params;
        }

        public function carrito($params){
            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        }
    }
?>  
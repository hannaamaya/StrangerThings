<?php
    //se crea el modelo que corresponde el controlador home
    class homeModel {
        public function __construct(){
            //echo "mensaje desde el modelo home";
        }
        // metodo
        public function getCarrito($params){
            return "datos del trailer. ".$params;
        }
    }
?>
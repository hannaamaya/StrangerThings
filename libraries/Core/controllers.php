<?php
    //clase
    class controllers {
        //metodo constructor
        public function __construct(){
            $this->loadModel();
        }
        //metodo para cargar los modelos
        public function loadModel(){
            //variable homeModel.php
            $model = get_class($this)."model";
            $routClass = "models/".$model.".php";
            // verificar que existe 
            if(file_exists($routClass)){
                require_once($routClass);
                //instancia que corresponde al model
                $this->model =new $model();
            }
        }
    }
?>
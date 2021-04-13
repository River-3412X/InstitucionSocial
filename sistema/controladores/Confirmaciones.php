<?php
    class Confirmaciones extends Controlador{
         //ruta: DOMINIO/bautizos/registrar

        public function __construct()
    {
        $this->modelo = $this->cargarModelo("Confirmacion"); //como este controlador matrimonio ya tiene un modelo matrimonio
        //se le carga el modelo a la variable o atributo modelo, para poder realizar la logica del sistema, registrar, actualizar, etc
    }
    public function registrar(){

           
        if($_SERVER['REQUEST_METHOD']=="GET"){
            verificarSesion(); //se verifica la sesion

            $this->cargarVista("Registrar_confirmacion");
            //acciones a ejecutar sobre el método get
        }
        else{
            if($_SERVER['REQUEST_METHOD']=="POST"){
                //instrucciones a ejecutar en el metodo post
            }
        }
        

    }
}
    
?>
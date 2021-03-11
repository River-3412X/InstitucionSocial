<?php
    class Usuarios {
        public $usuario;
        public $password;
        
        public function setUsuario($usuario){
            $this->usuario=$usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        public function getPassword(){
            return $this->password;
        }
        public function consultar_login(){
            $q = "SELECT idusuario from usuario WHERE idrol='2' AND BINARY usuario = :usuario AND password = :password "; // Consulta a la tabla administrador de la base de datos
            $parametros=[
                ["etiqueta"=>"usuario","valor"=>$this->usuario,"parametro"=>PDO::PARAM_STR],
                ["etiqueta"=>"password","valor"=>$this->password,"parametro"=>PDO::PARAM_STR],
            ];
            $base = new Base();
            $respuesta=$base->consultarRegistro($q,$parametros);
            
            if ($respuesta) { // Condición que indica si encuentra los datos ingresador en el formulario
                // y si coinciden con la base de datos entonces se creará una variable de sesión
                session_start();
                $_SESSION['id'] =$respuesta->idusuario;
                $_SESSION['username'] = $this->usuario; // Variable de sesión que almacena el correo del administrador
                return "Bienvenido";
            //     echo '<script type="text/javascript">
            //         alert("Bienvenido");
            //         window.location.href="usu.php";
            //         </script>'; // Alerta de bienvenida
            }
            else{
                return "Datos Incorrectos";
                // echo '<script type="text/javascript">
                // alert("Datos incorrectos");
                // window.location.href="loginvista.php";
                // </script>'; // Alerta de datos incorrectos 
            }
        }
    }
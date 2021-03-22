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

        public function registar_usuario($nombre,$correo,$usuario,$password){
                       
            $idusuario =rand(2,100);
            $idrol= 2;


            $insertar = "INSERT INTO usuario VALUES(:idusuario,:nombre, :correo,:usuario,:password, :idrol)"; //se define la instruccion sql
            $parametros=[
                        ["etiqueta"=>"idusuario","valor"=>$idusuario,"parametro"=>PDO::PARAM_INT],
                        ["etiqueta"=>"nombre","valor"=>$nombre,"parametro"=>PDO::PARAM_STR],
                        ["etiqueta"=>"correo","valor"=>$correo,"parametro"=>PDO::PARAM_STR],
                        ["etiqueta"=>"usuario","valor"=>$usuario,"parametro"=>PDO::PARAM_STR],
                        ["etiqueta"=>"password","valor"=>$password,"parametro"=>PDO::PARAM_STR],
                        ["etiqueta"=>"idrol","valor"=>$idrol,"parametro"=>PDO::PARAM_INT]
                    ];               //se cargan los parametros a insertar, con el nombre de la etiqueta que debe coincidir con la etiqueta que esta dentro de la instruccion sql (:etiqueta)
                            
            $base_de_datos = new Base(); //crear un objeto de base de datos, de la clase base
            //se llama al metodo insertar de la clase base o del objeto declarado en la linea anterior
            if( $base_de_datos->insertar($insertar,$parametros)==1 ){ //si el metodo insertar regresa 1, significa que se registro bien, sino pues hubo un error.
                $asunto='Registro exitoso'; 
                $desde='vanesasantana66@gmail.com'; 
                $comentario='<p> Hola,te registraste exitosamente </p> <br>';
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=utf8\r\n"; 
                $headers .= "From: Remitente\r\n"; 
                mail($correo,$asunto,$comentario,$headers);

                session_start();
                $_SESSION['id'] =$idusuario;
                $_SESSION['username'] = $usuario; // Variable de sesión que almacena el correo del administrador

                return "gracias por registrarse";
            }
            else{
                return "error al registrarse";
            }
        }
    }
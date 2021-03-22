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
            
                public function registar_usuario($nombre,$correo,$usuario,$password){
                       
    $idusuario =rand(2,100);
    $nombre= $_POST['nombre'];
    $correo= $_POST['email'];
    $usuario= $_POST['usuario'];
    $password= $_POST['password'];
    $idrol= 2;


    $insertar = "INSERT INTO usuario VALUES('$idusuario','$nombre', '$correo','$usuario','$password', '$idrol')";
     $parametros=[
                ["etiqueta"=>"nombre","valor"=>$this->nombre,"parametro"=>PDO::PARAM_STR],
                ["etiqueta"=>"correo","valor"=>$this->correo,"parametro"=>PDO::PARAM_STR],
                ["etiqueta"=>"usuario","valor"=>$this->usuario,"parametro"=>PDO::PARAM_STR],
                ["etiqueta"=>"password","valor"=>$this->password,"parametro"=>PDO::PARAM_STR],
            ];               
                    
    $resultado= mysqli_query($conexion,$insertar);

if($resultado){
    
    echo '<script type="text/javascript">
	alert("gracias por registrarse.");
	window.location.href="loginvista.php";
	</script>';
    

}
else{
     echo '<script type="text/javascript">
	alert("error al registrarse ");
	window.location.href="registro.php";
	</script>';
    
    
    
}

$asunto='Registro exitoso'; 
	$desde='vanesasantana66@gmail.com'; 
	$comentario='<p> Hola,te registraste exitosamente </p> <br>';
	$headers = "MIME-Version: 1.0\r\n";  
	$headers .= "Content-type: text/html; charset=utf8\r\n"; 
	$headers .= "From: Remitente\r\n"; 
	mail($correo,$asunto,$comentario,$headers);
                    
                }
        }
    }
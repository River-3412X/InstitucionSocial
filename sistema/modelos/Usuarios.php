<?php
class Usuarios
{
    public $usuario;
    public $password;

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function consultar_login()
    {

        $q = "SELECT idusuario,password,idrol,estado from usuario WHERE idrol='2' AND BINARY usuario = :usuario"; // Consulta a la tabla administrador de la base de datos
        $parametros = [
            ["etiqueta" => "usuario", "valor" => $this->usuario, "parametro" => PDO::PARAM_STR]
        ];

        $base = new Base();
        $respuesta = $base->consultarRegistro($q, $parametros);

        if ($respuesta) { // Condición que indica si encuentra los datos ingresador en el formulario
            // y si coinciden con la base de datos entonces se creará una variable de sesión
            if (password_verify($this->password, $respuesta->password)) {
                if($respuesta->estado==1){ //si está la cuenta activa entra aqui
                    session_start();
                    $_SESSION['id'] = $respuesta->idusuario;
                    $_SESSION['username'] = $this->usuario; // Variable de sesión que almacena el correo del administrador
    
                    $sql = "SELECT rol from rol where idrol=:idrol";
                    $parametros = [
                        ["etiqueta" => "idrol", "valor" => $respuesta->idrol, "parametro" => PDO::PARAM_STR]
                    ];
                    $resp = $base->consultarRegistro($sql, $parametros);
                    $_SESSION['rol'] = $resp->rol;
                    return "Bienvenido";       
                }
                else{
                    return "Cuenta Inactiva, Revisa tu correo electrónico para activar tu cuenta!";
                }
            } else {
                return "Datos Incorrectos";
            }
        } else {
            $q = "SELECT idusuario,password,idrol from usuario WHERE idrol='1' AND BINARY usuario = :usuario"; // Consulta a la tabla administrador de la base de datos
            $parametros = [
                ["etiqueta" => "usuario", "valor" => $this->usuario, "parametro" => PDO::PARAM_STR]
            ];

            $base = new Base();
            $respuesta = $base->consultarRegistro($q, $parametros);
            if ($respuesta) { // Condición que indica si encuentra los datos ingresador en el formulario
                // y si coinciden con la base de datos entonces se creará una variable de sesión
                if (password_verify($this->password, $respuesta->password)) {
                    session_start();
                    $_SESSION['id'] = $respuesta->idusuario;
                    $_SESSION['username'] = $this->usuario; // Variable de sesión que almacena el correo del administrador
                    $sql = "SELECT rol from rol where idrol=:idrol";
                    $parametros = [
                        ["etiqueta" => "idrol", "valor" => $respuesta->idrol, "parametro" => PDO::PARAM_STR]
                    ];
                    $resp = $base->consultarRegistro($sql, $parametros);
                    $_SESSION['rol'] = $resp->rol;
                    return "Bienvenido Administrador";
                } else {
                    return "Datos Incorrectos";
                }
            } else {
                return "Datos Incorrectos";
            }
        }
    }

    public function registar_usuario($nombre, $correo, $usuario, $password, $idrol)
    {
        $base_de_datos = new Base(); //crear un objeto de base de datos, de la clase base
        $sql = "SELECT *from usuario where usuario = :usuario";
        $parametros = [
            ["etiqueta" => "usuario", "valor" => $usuario, "parametro" => PDO::PARAM_STR]
        ];

        if ($base_de_datos->consultarRegistro($sql, $parametros)) {
            return "El Nombre de Usuario ya Existe";
        } else {
            $codigo=0;
            $estado=0;
            $passHash = password_hash($password, PASSWORD_DEFAULT);

            $insertar = "INSERT INTO usuario (nombre,correo,usuario,password,idrol,codigo,estado) VALUES(:nombre, :correo,:usuario,:password, :idrol, :codigo, :estado)"; //se define la instruccion sql
            $parametros = [
                ["etiqueta" => "nombre", "valor" => $nombre, "parametro" => PDO::PARAM_STR],
                ["etiqueta" => "correo", "valor" => $correo, "parametro" => PDO::PARAM_STR],
                ["etiqueta" => "usuario", "valor" => $usuario, "parametro" => PDO::PARAM_STR],
                ["etiqueta" => "password", "valor" => $passHash, "parametro" => PDO::PARAM_STR],
                ["etiqueta" => "codigo", "valor" => $codigo, "parametro" => PDO::PARAM_INT],
                ["etiqueta" => "estado", "valor" => $estado, "parametro" => PDO::PARAM_INT],
                ["etiqueta" => "idrol", "valor" => $idrol, "parametro" => PDO::PARAM_INT]
            ];               //se cargan los parametros a insertar, con el nombre de la etiqueta que debe coincidir con la etiqueta que esta dentro de la instruccion sql (:etiqueta)
            //se llama al metodo insertar de la clase base o del objeto declarado en la linea anterior
            if ($base_de_datos->insertar($insertar, $parametros) == 1) { //si el metodo insertar regresa 1, significa que se registro bien, sino pues hubo un error.
                $asunto = 'Registro exitoso';
                $desde = 'vanesasantana66@gmail.com';
                $comentario = '<p> Hola!<br>
                Tu registro ha sido exitoso, solo necesitas activar tu cuenta!<br>
                

    
                Para activar tu cuenta haz click en el siguiente enlace: </p> 
                <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="https://parroquiadelasantisimatrinidad.com/home/activar/'.$usuario.'/'.$passHash.'">Activar cuenta</a> 
                <br>';
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf8\r\n";
                $headers .= "From: Remitente\r\n";
                mail($correo, $asunto, $comentario, $headers);
                return "Para activar tu cuenta revisa tu correo electrónico!";
            }
        }
    }
    public function activar_cuenta($usuario,$password)
    {
        //extramos id con una consulta y verificamos si la cuenta esta inactiva

        $consulta=new Base();

        $sql="SELECT idusuario, estado from usuario where usuario= :usuario";
        $parametros = [
            ["etiqueta" => "usuario", "valor" => $usuario, "parametro" => PDO::PARAM_STR]
        ];

        $valor=$consulta->consultarRegistro($sql,$parametros);

        if($valor->estado==0)
        {

            $sql="UPDATE usuario set estado= :estado where usuario = :usuario";
            $parametros = [
                ["etiqueta" => "usuario", "valor" => $usuario, "parametro" => PDO::PARAM_STR],
                ["etiqueta" => "estado", "valor" => 1, "parametro" => PDO::PARAM_INT]
            
            ];
            

            if($consulta->modificar($sql,$parametros)){
                
                session_start();
                $_SESSION['id']=$valor->idusuario;
                $_SESSION['username']=$usuario;
                $_SESSION['rol']=2;
                return true;

            }
        }else{
            return false ;
        }


    }
}



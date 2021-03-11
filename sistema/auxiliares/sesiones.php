<?php
    function verificarSesionLogin(){
        session_start();
        if(isset($_SESSION['username'])){
            header("Location: ".DOMINIO."/home/usuario");
        }
    }
    function verificarSesion(){
        session_start();
        if(!isset($_SESSION['username'])){
            header("Location: ".DOMINIO."/home/login");
        }
    }

    function cerrarSesion(){
        session_start();
        session_destroy();
        header("Location: ".DOMINIO."/");
    }
?>
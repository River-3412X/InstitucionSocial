<?php
    include_once "conexion.php";
    $nombreNovia = $_POST['txtnombre'];
    $apellidosNovia = $_POST['txtapellido'];

    $_FILES['comprobantedomicilionovia']['name'];
    $_FILES['comprobantebautizonovia']['name'];
    $_FILES['certificadoconfirmacionnovia']['name'];

    $_FILES['actanacimientonovio']['name'];
    $_FILES['comprobantedomicilionovio']['name'];
    $_FILES['comprobantebautizonovio']['name'];
    $_FILES['certificadoconfirmacionnovio']['name'];

    $nombreNovio=$_POST["txtnom"];
    $apellidosNovio=$_POST["txtape"];
    $fecha=$_POST['txtfecha'];

    $nombreMadrina=$_POST['txtnmad'];
    $apellidosMadrina= $_POST['txtamad'];

    $nombrePadrino=$_POST['txtapad'];
    $apellidosPadrino=$_POST['txtnpad'];
    
    $_FILES['actamatrimoniopadrinos']['name'];

    $ann= $_FILES['actanacimientonovia'];
    $annName=subir_archivo($ann['tmp_name'],$ann['name']);
    $idmatrimonio = rand(100, 200);

    $sql = "insert into matrimonios 
    (idmatriminio,nomnovia,apellidonovia,nomnovio,apellidonovio,fechaboda,nommadrina,apemadrina,nompadrino,apepadrino,actanacimientonovia)
    values
    ({$idmatrimonio},'{$nombreNovia}','{$apellidosNovia}','{$nombreNovio}','{$apellidosNovio}','{$fecha}','{$nombreMadrina}','{$apellidosMadrina}','{$nombrePadrino}','{$apellidosPadrino}','{$annName}')";
    mysqli_query($conexion, $sql);
    echo "se realizó el el registro correctamente!";

    function subir_archivo($tmp_name,$nombreArchivo){
        $nombreTemporal="";
        $ruta="imagenes/archivos/";
        $destino =$ruta.$nombreArchivo;
        $archivo=$nombreArchivo;
        while(is_file($destino)){
            $numeroAleatorio =rand(0,getrandmax());
            $nombreTemporal=$numeroAleatorio.$nombreArchivo;
            $archivo = $nombreTemporal;

            $destino =$ruta.$nombreTemporal;
            $nombreTemporal=$nombreArchivo;
        }
        if(move_uploaded_file($tmp_name,$destino)){
            return $archivo;
        }
    }
?>

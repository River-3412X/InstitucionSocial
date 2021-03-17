<?php
    include_once "conexion.php";
    $nombreNovia = $_POST['txtnombre'];
    $apellidosNovia = $_POST['txtapellido'];

    $nombreNovio=$_POST["txtnom"];
    $apellidosNovio=$_POST["txtape"];
    $fecha=$_POST['txtfecha'];

    $nombreMadrina=$_POST['txtnmad'];
    $apellidosMadrina= $_POST['txtamad'];

    $nombrePadrino=$_POST['txtapad'];
    $apellidosPadrino=$_POST['txtnpad'];
    
    $ann= $_FILES['actanacimientonovia'];
    $annName=subir_archivo($ann['tmp_name'],$ann['name']);

    $comnovia=$_FILES['comprobantedomicilionovia'];
    $comNovia=subir_archivo($comnovia['tmp_name'],$comnovia['name']);

    $cbanovia=$_FILES['comprobantebautizonovia'];
    $cbNovia=subir_archivo($cbanovia['tmp_name'],$cbanovia['name']);


   $ctdna=$_FILES['certificadoconfirmacionnovia'];
   $ctdNA=subir_archivo($ctdna['tmp_name'],$ctdna['name']);
  
   $actno=$_FILES['actanacimientonovio'];
   $acTAno=subir_archivo($actno['tmp_name'],$actno['name']);

   $cdno=$_FILES['comprobantedomicilionovio'];
   $cdnoo=subir_archivo($cdno['tmp_name'],$cdno['name']);

   $cbno=$_FILES['comprobantebautizonovio'];
   $cbNoo=subir_archivo($cbno['tmp_name'],$cbno['name']);

   $ccno=$_FILES['certificadoconfirmacionnovio'];
   $ccNoo=subir_archivo($ccno['tmp_name'],$ccno['name']);
   
   $amp=$_FILES['actamatrimoniopadrinos'];
   $amps=subir_archivo($amp['tmp_name'],$amp['name']);






    $idmatrimonio = rand(100, 200);

    $sql = "insert into matrimonios 
    (idmatriminio,nomnovia,apellidonovia,nomnovio,apellidonovio,fechaboda,nommadrina,apemadrina,nompadrino,apepadrino,actanacimientonovia,comprobantedomicilionovia,comprobantebautizonovia,certificadoconfirmacionnovia,actanacimientonovio,comprobantedomicilionovio,	comprobantebautizonovio,certificadoconfirmacionnovio,actamatrimoniopadrinos)
    values
    ({$idmatrimonio},'{$nombreNovia}','{$apellidosNovia}','{$nombreNovio}','{$apellidosNovio}','{$fecha}','{$nombreMadrina}','{$apellidosMadrina}','{$nombrePadrino}','{$apellidosPadrino}','{$annName}','{$comNovia}','{$cbNovia}','{$ctdNA}','{$acTAno}','{$cdnoo}','{$cbNoo}','{$ccNoo}','{$amps}')";
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

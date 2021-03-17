<?php
class Matrimonio
{
    public function registrar($nombreNovia, $apellidosNovia, $nombreNovio, $apellidosNovio, $fecha, $nombreMadrina, $apellidosMadrina, $nombrePadrino, $apellidosPadrino, $ann, $comnovia, $cbanovia, $ctdna, $actno, $cdno, $cbno, $ccno, $amp)
    {

        $annName = $this->subir_archivo($ann['tmp_name'], $ann['name']);
        $comNovia = $this->subir_archivo($comnovia['tmp_name'], $comnovia['name']);
        $cbNovia = $this->subir_archivo($cbanovia['tmp_name'], $cbanovia['name']);
        $ctdNA = $this->subir_archivo($ctdna['tmp_name'], $ctdna['name']);
        $acTAno = $this->subir_archivo($actno['tmp_name'], $actno['name']);
        $cdnoo = $this->subir_archivo($cdno['tmp_name'], $cdno['name']);
        $cbNoo = $this->subir_archivo($cbno['tmp_name'], $cbno['name']);
        $ccNoo = $this->subir_archivo($ccno['tmp_name'], $ccno['name']);
        $amps = $this->subir_archivo($amp['tmp_name'], $amp['name']);
        // $annName = "un registro";
        // $comNovia = "un registro";
        // $cbNovia = "un registro";
        // $ctdNA = "un registro";
        // $acTAno = "un registro";
        // $cdnoo = "un registro";
        // $cbNoo = "un registro";
        // $ccNoo = "un registro";
        // $amps = "un registro";
        $idmatrimonio = rand(100, 200);

        $sql = "insert into matrimonios 
        (idmatriminio,nomnovia,apellidonovia,nomnovio,
        apellidonovio,fechaboda,nommadrina,apemadrina,
        nompadrino,apepadrino,actanacimientonovia,comprobantedomicilionovia,
        comprobantebautizonovia,certificadoconfirmacionnovia,actanacimientonovio,
        comprobantedomicilionovio,	comprobantebautizonovio,
        certificadoconfirmacionnovio,actamatrimoniopadrinos)
        values
        (:idmatrimonio,:nombreNovia,:apellidosNovia,:nombreNovio,
        :apellidosNovio,:fecha,:nombreMadrina,:apellidosMadrina,
        :nombrePadrino,:apellidosPadrino,:annName,:comNovia,:cbNovia,
        :ctdNA,:acTAno,:cdnoo,:cbNoo,:ccNoo,:amps)";
        $parametros=[
            ["etiqueta"=>"idmatrimonio","valor"=>$idmatrimonio,"parametro"=>PDO::PARAM_INT],
            ["etiqueta"=>"nombreNovia","valor"=>$nombreNovia,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"apellidosNovia","valor"=>$apellidosNovia,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"nombreNovio","valor"=>$nombreNovio,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"apellidosNovio","valor"=>$apellidosNovio,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"fecha","valor"=>$fecha,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"nombreMadrina","valor"=>$nombreMadrina,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"apellidosMadrina","valor"=>$apellidosMadrina,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"nombrePadrino","valor"=>$nombrePadrino,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"apellidosPadrino","valor"=>$apellidosPadrino,"parametro"=>PDO::PARAM_STR],
            
            ["etiqueta"=>"annName","valor"=>$annName,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"comNovia","valor"=>$comNovia,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"cbNovia","valor"=>$cbNovia,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"ctdNA","valor"=>$ctdNA,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"acTAno","valor"=>$acTAno,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"cdnoo","valor"=>$cdnoo,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"cbNoo","valor"=>$cbNoo,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"ccNoo","valor"=>$ccNoo,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"amps","valor"=>$amps,"parametro"=>PDO::PARAM_STR],

        ];
        $base = new Base();     
        if($base->insertar($sql,$parametros)){
            return "Se realizó el registro correctamente";
        }
    }

    function subir_archivo($tmp_name, $nombreArchivo)
    {
        $nombreTemporal = "";
        $ruta = "assets/archivospdf/";
        $destino = $ruta . $nombreArchivo;
        $archivo = $nombreArchivo;
        while (is_file($destino)) {
            $numeroAleatorio = rand(0, getrandmax());
            $nombreTemporal = $numeroAleatorio . $nombreArchivo;
            $archivo = $nombreTemporal;

            $destino = $ruta . $nombreTemporal;
            $nombreTemporal = $nombreArchivo;
        }
        if (move_uploaded_file($tmp_name, $destino)) {
            return $archivo;
        }
    }
    
    function registrar_citas($fecha,$hora,$motivo){
        
if ($fecha == "") {
    echo "Error ingresa la fecha";
    exit();
} else {
    if ($hora == "00:00") {
        echo "Error Ingresa la hora";
        exit();
    } else {
        $base=new Base(); //creo nuevo objeto de la clase base que me permite realizar conexión con la base de datos
        
        $q = "SELECT hora from cita where dia=:fecha";
        $parametros=[
            ["etiqueta"=>"fecha","valor"=>$fecha,"parametro"=>PDO::PARAM_STR]//indico que mando una cadena si fuera entero seria INT
        ];
        $datos=$base->consultar($q,$parametros);//regresa registros 
        //visualizar los datos 
        if($datos)
        {
         //permite recorrer objetos  
        foreach($dato as $datos){ //es el arreglo 
            if ($dato->hora==$hora){//variable de la base de datos==al que llega
                return "ya ingresaste la hora";
            }
        }    
        }
        
        if ($motivo == "") {
            echo "Error ingresa el motivo";
            exit();
        } else {
            session_start();
            $idcita=rand(100,200);
            $sql = "insert into cita (idcita,idusuario,dia,hora,motivo)
            values(:idcita,:idusuario,:dia,:hora,:motivo)";
            $parametros=[
            ["etiqueta"=>"idcita","valor"=>$idcita,"parametro"=>PDO::PARAM_INT],
            ["etiqueta"=>"idusuario","valor"=>$_SESSION['id'],"parametro"=>PDO::PARAM_INT],//indico que mando una cadena si fuera entero seria INT
            ["etiqueta"=>"dia","valor"=>$fecha,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"hora","valor"=>$hora,"parametro"=>PDO::PARAM_STR],
            ["etiqueta"=>"motivo","valor"=>$motivo,"parametro"=>PDO::PARAM_STR]
                
            
        ];
            //ejecutar metodo insertar de la base de datos
            $datos=$base->insertar($sql,$parametros);
            if($datos==1){
            return "registro correcto";
            }
            
        }
    }
}   
    }
    
    function boton_citas($fecha){
         $base=new Base();//CREA OBJETO 
        
$q = "SELECT count(*) as existe from cita where dia =:fecha ";
         $parametros=[
            ["etiqueta"=>"fecha","valor"=>$fecha,"parametro"=>PDO::PARAM_STR]
           ];
        // OBJETO QUE PERMITE COMUNICACION CON LA BASE
        $datos=$base->consultarRegistro($q,$parametros);
if ($datos->existe>0) {
    return '
            <ul>
                <li><button style="background-color:red;" type="button">10:00am - 11:00am</button></li>
                <li><button style="background-color:red;" type="button">11:00pm - 12:00pm</button></li>
                <li><button style="background-color:red;" type="button">12:00pm - 13:00pm</button></li>
                <li><button style="background-color:red;" type="button">13:00pm - 14:00pm</button></li>
                <li><button style="background-color:red;" type="button">16:00pm - 17:00pm</button></li>
                <li><button style="background-color:red;" type="button">17:00pm - 18:00pm</button></li>
            </ul>
        ';
} else {
    return '
        <ul>
            <li><button id="btn1" onclick="cambiar_hora('."'10:00'".','."'btn1'".')" type="button">10:00am - 11:00am</button></li>
            <li><button id="btn2" onclick="cambiar_hora('."'11:00'".','."'btn2'".')" type="button">11:00pm - 12:00pm</button></li>
            <li><button id="btn3" onclick="cambiar_hora('."'12:00'".','."'btn3'".')" type="button">12:00pm - 13:00pm</button></li>
            <li><button id="btn4" onclick="cambiar_hora('."'13:00'".','."'btn4'".')" type="button">13:00pm - 14:00pm</button></li>
            <li><button id="btn5" onclick="cambiar_hora('."'16:00'".','."'btn5'".')" type="button">16:00pm - 17:00pm</button></li>
            <li><button id="btn6" onclick="cambiar_hora('."'17:00'".','."'btn6'".')" type="button">17:00pm - 18:00pm</button></li>
        </ul>
        ';
        
    }
    }
}

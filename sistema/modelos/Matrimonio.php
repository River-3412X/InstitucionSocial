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
}

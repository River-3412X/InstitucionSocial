<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>Matrimonios</title>
        <script src="librerias/jquery-3.4.0.min.js"></script>
        <script src="librerias/js/materialize.min.js"></script>
        <link rel="stylesheet" href="librerias/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/estilos_matrimonio.css">
        <script src="registrar_matrimonio.js" type="text/javascript"></script>
    </head>
    <body>
          
        <div class="row">
            <div class="col s4 offset-s4 center-align" id="frm_registrar">
                <h5 class="blue-text">REGISTRAR MATRIMONIO</h5><br><br>
                <form action="registrarmatrimonio.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="formulario">
                         <div class="input-field">
                        <input type="text" name="txtnombre" value="" placeholder="" required="required">
                        <label for="txtnombre">Nombre Novia</label>
                    </div>
                    <div class="input-field ">
                        <input type="text" name="txtapellido" value="" placeholder="" required="required">
                        <label for="txtapellido">Apellidos Novia</label><br>
                    </div>
                    <div class="input-file">
                        <label for="actanacimientonovia">Acta de Nacimiento</label>
                        <input type="file" name="actanacimientonovia" id="actanacimientonovia" accept="application/pdf"> 
                        <label for="actanacimientonovia" id="labelactanacimientonovia" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="comprobantedomicilionovia">Comprobante de Domicilio</label>
                        <input type="file" name="comprobantedomicilionovia" id="comprobantedomicilionovia" accept="application/pdf"> 
                        <label for="comprobantedomicilionovia" id="labelcomprobantedomicilionovia" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="comprobantebautizonovia">Comprobande de Bautizo</label>
                        <input type="file" name="comprobantebautizonovia" id="comprobantebautizonovia" accept="application/pdf"> 
                        <label for="comprobantebautizonovia" id="labelcomprobantebautizonovia" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="certificadoconfirmacionnovia">Certificado de Confirmación</label>
                        <input type="file" name="certificadoconfirmacionnovia" id="certificadoconfirmacionnovia" accept="application/pdf">  
                        <label for="certificadoconfirmacionnovia" id="labelcertificadoconfirmacionnovia" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="txtnom" value="" placeholder="Nombre del Novio" required="required">
                        <label for="txtnom">Nombre Novio</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="text" name="txtape" value="" placeholder="">
                        <label for="txtape">Apellidos Novio</label><br>
                    </div>
                    <div class="input-file">
                        <label for="actanacimientonovio">Acta de Nacimiento</label>
                        <input type="file" name="actanacimientonovio" id="actanacimientonovio" accept="application/pdf"> 
                        <label for="actanacimientonovio" id="labelactanacimientonovio" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="comprobantedomicilionovio">Comprobande de Domicilio</label>
                        <input type="file" name="comprobantedomicilionovio" id="comprobantedomicilionovio" accept="application/pdf"> 
                        <label for="comprobantedomicilionovio" id="labelcomprobantedomicilionovio" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="comprobantebautizonovio">Comprobande de Bautizo</label>
                        <input type="file" name="comprobantebautizonovio" id="comprobantebautizonovio" accept="application/pdf"> 
                        <label for="comprobantebautizonovio" id="labelcomprobantebautizonovio" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="certificadoconfirmacionnovio">Certificado de Confirmación</label>
                        <input type="file" name="certificadoconfirmacionnovio" id="certificadoconfirmacionnovio" accept="application/pdf"> 
                        <label for="certificadoconfirmacionnovio" id="labelcertificadoconfirmacionnovio" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>
                    <div class="input-file "> 
                        <label for="txtfecha">Fecha Boda</label>
                        <input type="date" name="txtfecha" value="" placeholder="" required="required" min="<?php 
                        $fecha = Date('d-m-Y');
                        $temp = strtotime($fecha);
                        $fecha_temporal=date("d-m-Y", strtotime("+1 month", $temp));
                        $fecha_completa = strtotime($fecha_temporal);
                        echo date("Y-m-d", $fecha_completa);
                        ?>" >
                        
                    </div>
                    <div class="input-field "> 
                        <input type="text" name="txtnmad" value="" placeholder="" required="required" >
                        <label for="txtnmad">Nombre Madrina</label>
                    </div>
                    <div class="input-field "> 
                        <input type="text" name="txtamad" value="" placeholder="" required="required" >
                        <label for="txtamad"> Apellidos Madrina</label>
                    </div>
                    <div class="input-field "> 
                        <input type="text" name="txtnpad" value="" placeholder="" required="required" >
                        <label for="txtnpad"> Nombre Padrino</label>
                    </div>
                    <div class="input-field "> 
                        <input type="text" name="txtapad" value="" placeholder="" required="required" >
                        <label for="txtapad"> Apellidos Padrino</label>
                    </div>
                    <div class="input-file">
                        <label for="actamatrimoniopadrinos">Acta de Matrimonio por Iglesia</label>
                        <input type="file" name="actamatrimoniopadrinos" id="actamatrimoniopadrinos" accept="application/pdf"> 
                        <label for="actamatrimoniopadrinos" id="labelactamatrimoniopadrinos" class="nombre-archivo">Selecciona un archivo PDF</label>
                    </div>             
                    
                    <div class="input-field">
                        <button type="submit" class="blue btn-small" name="btn_guarda">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
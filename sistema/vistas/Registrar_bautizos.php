<?php require_once "encabezados/Header.php" ?>

<link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/estilos_matrimonio.css">
<script src="<?php echo DOMINIO; ?>/public/assets/js/registrar_bautizo.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo DOMINIO; ?>/public/assets/css/estilos_hora.css">

<input type="hidden" name="idbautizos" id="idbautizos" value="<?php echo $idbat; ?>">

<div class="row">
    <div class="col s4 offset-s4 center-align" id="frm_registrar">
        <h5 class="blue-text">REGISTRAR BAUTIZO</h5><br><br>
        <form action="controlusubau.php" method="post" id="formulario" accept-charset="utf-8">
            <div class="input-field">
                <input type="text" name="nombre" value="" placeholder="" required="required">
                <label for="txtnombre">Nombre Niño</label>
            </div>
            <div class="input-field ">
                <input type="text" name="apellido" value="" placeholder="" required="required">
                <label for="txtapellido">Apellidos Niño</label><br>
            </div>
            <div class="input-file">
                <label for="actadenacimiento">Acta de Nacimiento</label>
                <input type="file" name="actadenacimiento" id="actadenacimiento" accept="application/pdf">
                <label for="actadenacimiento" id="labelactadenacimiento" class="nombre-archivo">Selecciona un archivo
                    PDF</label>
            </div>
            <div class="input-field">
                <input type="text" name="nomad" value="" placeholder="" required="required">
                <label for="txtnom">Nombre Madre</label>
            </div>
            <div class="input-field ">
                <input type="text" name="apemad" value="" placeholder="" required="required">
                <label for="txtape">Apellidos Madre</label><br>
            </div>
            <div class="input-field ">
                <input type="text" name="nompad" value="" placeholder="" required="required">
                <label for="txtape">Nombre Padre</label><br>
            </div>
            <div class="input-field ">
                <input type="text" name="apepad" value="" placeholder="" required="required">
                <label for="txtape">Apellidos Padre</label><br>
            </div>
            <div class="input-field ">
                <input type="number" name="telefono" value="" placeholder="" pattern="[0-9]{10}" required="required">
                <label for="txtnumero"> Telefóno <small>(10 dígitos)</small>:</label>
            </div>



            <div class="from-group">
                <label for="txtfecha">Fecha Bautizo:</label>
                <input id="fecha_bautizo" type="date" name="txtfecha" placeholder="" required="required"
                    class="form-control"
                    min="<?php
                                                                                                                            $fecha = Date('d-m-Y');
                                                                                                                            $temp = strtotime($fecha);
                                                                                                                            $fecha_temporal = date("d-m-Y", strtotime("+1 month", $temp));
                                                                                                                            $fecha_completa = strtotime($fecha_temporal);
                                                                                                                            echo date("Y-m-d", $fecha_completa);
                                                                                                                            ?>">

            </div>

            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" class="form-control" required style="display:none" id="hora_boda">
                <div class="contenedor-hora" id="contenedor-hora-matrimonio">
                    <ul>
                        <li><button id="btnb1" onclick="cambiar_hora_boda('12:00','btnb1')" type="button">12:00pm -
                                13:00pm</button></li>
                        <li><button id="btnb2" onclick="cambiar_hora_boda('13:00','btnb2')" type="button">13:00pm -
                                14:00pm</button></li>
                        <li><button id="btnb3" onclick="cambiar_hora_boda('14:00','btnb3')" type="button">14:00pm -
                                15:00pm</button></li>
                        <li><button id="btnb4" onclick="cambiar_hora_boda('17:00','btnb4')" type="button">17:00pm -
                                18:00pm</button></li>
                        <li><button id="btnb5" onclick="cambiar_hora_boda('18:00','btnb5')" type="button">18:00pm -
                                19:00pm</button></li>
                    </ul>
                </div>
            </div>


            <div class="input-field">
                <input type="text" name="nompadrinos" value="" placeholder="" required="required">
                <label for="txtnom">Nombre Madrina o Padrino</label>
            </div>
            <div class="input-field ">
                <input type="text" name="apepadrinos" value="" placeholder="" required="required">
                <label for="txtape">Apellidos Madrina o Padrino</label><br>
            </div>

            <div class="input-file">
                <label for="comprobante">Fe de Bautizo o Acta de Matrimonio</label>
                <input type="file" name="comprobante" id="comprobante" accept="application/pdf">
                <label for="comprobante" id="labelcomprobante" class="nombre-archivo">Selecciona un archivo PDF</label>
            </div>



            <div class="input-field">
                <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php 
require_once "alertas/alertas.php";
require_once "encabezados/Footer.php"; ?>
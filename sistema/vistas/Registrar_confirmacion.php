<?php require_once "encabezados/Header.php" ?>
<link rel="stylesheet" href="<?php echo DOMINIO; ?>/public/assets/css/estilos_matrimonio.css">
<script src="<?php echo DOMINIO; ?>/public/assets/js/registrar_confirmacion.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo DOMINIO; ?>/public/assets/css/estilos_hora.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Exo:wght@100&display=swap');
</style>
<div class="container">
    <form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="foormulario">
        <h3 class="text-center" style="font-family:Exo;">REGISTRAR ALUMNO PARA CONFIRMACIÓN</h3>
        <div class="tab shadow">
            <div class="tab-header p-3">
                <div class="row justify-content-center">
                    <button type="button" id="uno" class="btn btn-sm mr-1">1</button>
                    <button type="button" id="dos" class="btn btn-sm mr-1">2</button>
                    <button type="button" id="tres" class="btn btn-sm mr-1">3</button>
                </div>
            </div>
            <div class="tab-container p-4" id="tab_container">
                <div class="tab-container-item" id="contenido_uno">
                    <div class="form-group">
                        <label for="txtnombre">Nombre Alummno</label>
                        <input type="text" name="txtNombre" placeholder="Nombre del niño" required="required" class="form-control" id="nombre_alumno">
                    </div>

                    <div class="form-group">
                        <label for="txtApellidos">Apellidos Alummno</label>
                        <input type="text" name="txtApellidos" placeholder="Apellidos del alumno" required="required" class="form-control" id="apellidos_alumno">
                    </div>

                    <div class="from-group">
                        <label for="txtfecha">Fecha de Nacimiento</label>
                        <input id="fecha_niño" type="date" name="txtecha" placeholder="" required="required" class="form-control" min="<?php
                                                                                                                                        $fecha = Date('d-m-Y');
                                                                                                                                        $temp = strtotime($fecha);
                                                                                                                                        $fecha_temporal = date("d-m-Y", strtotime("+1 month", $temp));
                                                                                                                                        $fecha_completa = strtotime($fecha_temporal);
                                                                                                                                        echo date("Y-m-d", $fecha_completa);
                                                                                                                                        ?>">

                    </div>
                    <div class="form-group ">
                        <label for="txtEdad"> Edad</label>
                        <input type="textEdad" name="txtEdad" placeholder="Ingresa edad " id="motivo" class="form-control">
                    </div>
                </div>
                <div class="tab-container-item" id="contenido_dos">
                    <div class="form-group">
                        <label for="txtNivel">Nivel </label>
                        <input type="text" name="txtNivel" placeholder="Nivel del alumno" required="required" class="form-control" id="nivel_alumno">
                    </div>




                    <div class="input-file">
                        <label for="actadenacimiento">Acta de Nacimiento</label>
                        <input type="file" name="actadenacimiento" id="actadenacimiento" accept="application/pdf">
                        <label for="actadenacimiento" id="labelactadenacimiento" class="nombre-archivo">Selecciona un archivo
                            PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="febautizo">Fe de bautizo</label>
                        <input type="file" name="febautizo" id="febautizo" accept="application/pdf">
                        <label for="febautizo" id="labelfebautizo" class="nombre-archivo">Selecciona un archivo
                            PDF</label>
                    </div>
                    <div class="input-file">
                        <label for="CertificadoComunion">Certificado de primera Comunión</label>
                        <input type="file" name="febautizo" id="CertificadoComunion" accept="application/pdf">
                        <label for="CertificadoComunion" id="labelComunion" class="nombre-archivo">Selecciona un archivo
                            PDF</label>
                    </div>
                </div>
                <div class="tab-container-item" id="contenido_tres">
                    <div class="form-group">
                        <label for="txtnom">Nombre Madre</label>
                        <input type="text" name="nomad" value="" placeholder="" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtape">Apellidos Madre</label><br>
                        <input type="text" name="apemad" value="" placeholder="" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtape">Nombre Padre</label><br>
                        <input type="text" name="nompad" value="" placeholder="" required="required" class="form-control">
                    </div>
                    <div class="input-field ">
                        <label for="txtape">Apellidos Padre</label><br>
                        <input type="text" name="apepad" value="" placeholder="" required="required" class="form-control">
                    </div>
                    <div class="input-field ">
                        <label for="txtnumero"> Telefóno <small>(10 dígitos)</small>:</label>
                        <input type="number" name="telefono" value="" placeholder="" pattern="[0-9]{10}" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtdireccion">Dirección </label>
                        <input type="text" name="txtdireccion" placeholder="dirección" required="required" class="form-control" id="nivel_alumno">
                    </div>
                    <div class="input-file">
                        <label for="comprobante">Comprobante de domicilio</label>
                        <input type="file" name="txtComprobante" id="comprobante" accept="application/pdf">
                        <label for="comprobante" id="labelcomprobante" class="nombre-archivo">Selecciona un archivo
                            PDF</label>
                    </div>
                    <div class="input-field">
                        <button type="submit" class="btn btn-primary" name="btn_guardar">Guardar</button>
                    </div>
                </div>
                <div class="tab-container-item" id="contenido_cuatro">
                </div>
            </div>
            <div class="tab footer p-4">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary mr-1" id="button_back" onclick="tab_anterior()" style="display:none">Anterior</button>
                    <button type="button" class="btn btn-secondary" id="button_next" onclick="tab_siguiente()">Siguiente</button>
                </div>
            </div>
        </div>







    </form>

</div>
<?php

require_once "alertas/alertas.php";
require_once "encabezados/Footer.php"; ?>
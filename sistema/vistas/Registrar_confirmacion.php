<?php require_once "encabezados/Header.php" ?>
<link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/estilos_matrimonio.css">
<script src="<?php echo DOMINIO; ?>/public/assets/js/registrar_confirmacion.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo DOMINIO; ?>/public/assets/css/estilos_hora.css">

<input type="hidden" name="idbautizos" id="idbautizos" value="<?php echo $idbat; ?>">

<div class="col s4 offset-s4 center-align" id="frm_registrar">
    <h5 class="blue-text">REGISTRAR ALUMNO PARA CONFIRMACIÓN</h5><br><br>
    <form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="foormulario">

        <div class="form-group">
            <label for="txtnombre">Nombre Alummno</label>
            <input type="text" name="txtNombre" placeholder="Nombre del niño" required="required" class="form-control"
                id="nombre_alumno">
        </div>

        <div class="form-group">
            <label for="txtApellidos">Apellidos Alummno</label>
            <input type="text" name="txtApellidos" placeholder="Apellidos del alumno" required="required"
                class="form-control" id="apellidos_alumno">
        </div>

        <div class="from-group">
            <label for="txtfecha">Fecha de Nacimiento</label>
            <input id="fecha_niño" type="date" name="txtecha" placeholder="" required="required" class="form-control"
                min="<?php
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

        <div class="form-group">
            <label for="txtNivel">Nivel </label>
            <input type="text" name="txtNivel" placeholder="Nivel del alumno" required="required" class="form-control"
                id="nivel_alumno">
        </div>




        <div class="input-file">
            <label for="actadenacimiento">Acta de Nacimiento</label>
            <input type="file" name="actadenacimiento" id="actadenacimiento" accept="application/pdf">
            <label for="actadenacimiento" id="labelactadenacimiento" class="nombre-archivo">Selecciona un archivo
                PDF</label>
            <div class="input-file">
                <label for="febautizo">Fe de bautizo</label>
                <input type="file" name="febautizo" id="febautizo" accept="application/pdf">
                <label for="febautizo" id="labelfebautizo" class="nombre-archivo">Selecciona un archivo
                    PDF</label>
                    <div class="input-file">
                <label for="CertificadoComunion">Certificado de primera Comunión</label>
                <input type="file" name="febautizo" id="CertificadoComunion" accept="application/pdf">
                <label for="CertificadoComunion" id="labelComunion" class="nombre-archivo">Selecciona un archivo
                    PDF</label>


                <div class="form-group">
                    <label for="txtdireccion">Dirección </label>
                    <input type="text" name="txtdireccion" placeholder="dirección" required="required"
                        class="form-control" id="nivel_alumno">
                </div>
                <div class="input-file">
                    <label for="comprobante">Comprobante de domicilio</label>
                    <input type="file" name="txtComprobante" id="comprobante" accept="application/pdf">
                    <label for="comprobante" id="labelcomprobante" class="nombre-archivo">Selecciona un archivo
                        PDF</label>

                    <div class="form-group">
                        <label for="txtNivel">id usuario </label>
                        
                    </div>

                    <div class="form-group">
                        <input type="text" name="nomad" value="" placeholder="" required="required">
                        <label for="txtnom">Nombre Madre</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apemad" value="" placeholder="" required="required">
                        <label for="txtape">Apellidos Madre</label><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nompad" value="" placeholder="" required="required">
                        <label for="txtape">Nombre Padre</label><br>
                    </div>
                    <div class="input-field ">
                        <input type="text" name="apepad" value="" placeholder="" required="required">
                        <label for="txtape">Apellidos Padre</label><br>
                    </div>
                    <div class="input-field ">
                        <input type="number" name="telefono" value="" placeholder="" pattern="[0-9]{10}"
                            required="required">
                        <label for="txtnumero"> Telefóno <small>(10 dígitos)</small>:</label>
                    </div>
                    <div class="input-field">
                <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
            </div>

<?php
                    require_once "alertas/alertas.php";
                    require_once "encabezados/Footer.php"; ?>
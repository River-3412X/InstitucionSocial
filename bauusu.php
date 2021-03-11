 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>Bautizos3</title>
        <script src="librerias/jquery-3.4.0.min.js"></script>
        <script src="librerias/js/materialize.min.js"></script>
        <link rel="stylesheet" href="librerias/css/materialize.min.css">
    </head>
    <body>
    <input type="hidden" name="idbautizos" id="idbautizos" value="<?php echo $idbat; ?>">
      
    <div class="row">
        <div class="col s4 offset-s4 center-align" style="position:absolute;" id="frm_registrar">
            <h5 class="blue-text">REGISTRAR BAUTIZO</h5><br><br>
            <form action="controlusubau.php" method="post" accept-charset="utf-8">            
                <div class="input-field">    
                    <input type="text" name="nombre" value="" placeholder="" required="required">
                    <label for="txtnombre">Nombre Niño</label>
                </div>
                <div class="input-field ">
                    <input type="text" name="apellido" value="" placeholder="" required="required">
                    <label for="txtapellido">Apellidos Niño</label><br>
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
                <div class="input-field "> 
                    <input type="date" name="fechabautizo" value="" placeholder="" id="date" min="<?php echo date("Y-m-d");?>" required="required">
                    <label for="txtfecha"> Fecha Bautizo:</label>
                </div>
                <div class="input-field">
                    <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>                
                </div>
            </form>
        </div>    
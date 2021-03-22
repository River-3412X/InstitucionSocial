<?php require_once "encabezados/Header.php" ?>
    <script src="<?php echo DOMINIO;?>/public/assets/librerias/jquery-3.4.0.min.js"></script>
    <script src="<?php echo DOMINIO;?>/public/assets/librerias/js/materialize.min.js"></script>
    <link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/librerias/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/estilos_matrimonio.css">
    
    <input type="hidden" name="idbautizos" id="idbautizos" value="<?php echo $idbat; ?>">
      
      <div class="row">
          <div class="col s4 offset-s4 center-align"  id="frm_registrar">
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
                  <div class="input-file">
                    <label for="actadenacimiento">Acta de Nacimiento</label>
                    <input type="file" name="actadenacimiento" id="actadenacimiento" accept="application/pdf">
                    <label for="actadenacimiento" id="labelactadenacimiento" class="nombre-archivo">Selecciona un archivo PDF</label>
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
      </div>
<?php require_once "encabezados/Footer.php" ?>
 <div class="row">
            <div class="col s4 offset-s1" style="position:absolute; top:5%;" id="frm_actualizar">
                <h5 class="blue-text">EDITAR USUARIOS</h5><br><br>
                <form action="controlsuper.php" method="POST" accept-charset="utf-8">
                    <div class="input-field">
                        <input type="hidden" name="id" value="<?php echo $idm; ?>" placeholder="">
                    </div>
                    
                    
                      <div class="input-field">
                        <input type="text" name="txtnombre" value="" placeholder="">
                        <label for="txtnombre">Nombre</label>
                    </div>
                    <div class="input-field ">
                        <input type="text" name="txtapellido" value="" placeholder="">
                        <label for="txtcorreo">Correo</label><br>
                    </div>
                    <div class="input-field">
                        <input type="text" name="txtnom" value="" placeholder="">
                        <label for="txtusuario">usuario</label>
                    </div>
                    
                    <div class="input-field ">
                        <input type="text" name="txtape" value="" placeholder="">
                        <label for="txtpassword">contraseña</label><br>
                    </div>
                    
                    <div class="input-field col ">
                        <button type="submit" class="green btn-small" name="btn_actualizar">Actualizar</button>                
                    </div>
                    <div class="input-field col l3 ">
                        <button type="submit" class="red btn-small" name="btn_eliminar">Eliminar</button>                
                    </div>
                    <div class="input-field col l3">
                        <a href="usuarios.php" type="submit" class="yellow btn-small" name="btn_regresar">Regresar</a>                
                    </div>
                </form>
            </div> 
        </div>ssss
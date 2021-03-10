
<?php  
$server ="localhost";
$usuario="root";
$clave="";
$bd="u125755129_institucion";

$conexion = new mysqli($server,$usuario,$clave,$bd);
$conexion -> set_charset("uft-8");
if ($conexion) { 
	echo "";
}else{
	echo "Base de datos no existe";
}

if(isset($_REQUEST['btn_guardar'])){

$idbautizo=rand(100,200);
$nombre=ucwords($_POST['nombre']);
$apellido=ucwords($_POST['apellido']);
$nombmad=ucwords($_POST['nomad']);
$apellidosmadre=ucwords($_POST['apemad']);
$nombpadre=ucwords($_POST['nompad']);
$apellidospadre=ucwords($_POST['apepad']);
$telefono=$_POST['telefono'];
$fechabautizo=$_POST['fechabautizo'];
$sql = "INSERT into bautizos values('$idbautizo','$nombre','$apellido','$nombmad','$apellidosmadre','$nombpadre','$apellidospadre','$telefono','$fechabautizo')";
$ejecutar=mysqli_query($conexion,$sql);
        
    if($ejecutar)
    {
        header("location:controlusubau.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>cita</title>
        <script src="librerias/jquery-3.4.0.min.js"></script>
        <script src="librerias/js/materialize.min.js"></script>
        <link rel="stylesheet" href="librerias/css/materialize.min.css">
    </head>
    
          <body>
        <div class="row">
            <div class="col s4 offset-s1 center-align" style="position:absolute; top:5%;" id="frm_registrar">
                <h5 class="blue-text">REGISTRAR CITA</h5><br><br>
                <form action="citamat.php" method="post" accept-charset="utf-8">
                   
                       
                    <div class="input-field "> 
                        <input type="date" name="txtfecha" value="" placeholder="" id="date">
                        <label for="txtfecha"> Fecha Cita</label>
                    </div>
                    
                    <div class=" input-field ">
               <input type="time" name="txthora" min="10:00" max="17:00"  required=»required» class="form-control" value="">
                <label>Hora cita:</label>
                
            </div>
                    
                
                    <div class="input-field "> 
                        <input type="text" name="txtmotivo" value="" placeholder="" id="motivo">
                        <label for="txtmotivo"> Motivo</label>
                    </div>
                    
                    
                    <div class="input-field">
                        <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
                        
                    </div>
                </form>
            </div>
            </div>
                  </body>
    </html>
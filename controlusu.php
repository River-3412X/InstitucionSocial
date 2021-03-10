<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "ss";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd);

if (!$conexion) {
    echo "error en la conexión";
}
if (isset($_REQUEST['btn_guarda'])) {
    $idmatrimonio = rand(100, 200);
    $nomnovia = ucwords($_POST['txtnombre']);
    $apellidonovia = ucwords($_POST['txtapellido']);
    $nomnovio = ucwords($_POST['txtnom']);
    $apellidonovio = ucwords($_POST['txtape']);
    $fechaboda = $_POST['txtfecha'];

    $sql = "INSERT into matrimonios values('$idmatrimonio','$nomnovia','$apellidonovia','$nomnovio','$apellidonovio','$fechaboda')";
    $ejecutar = mysqli_query($conexion, $sql);



    if ($ejecutar) {
        header("location:controlusu.php");
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
    <link rel="stylesheet" href="assets/css/estilos_hora.css">
    <script src="controlcita.js" type="text/javascript"></script>
</head>

<body>
    <div class="row">
        <div class="col s4 offset-s1 center-align" style="position:absolute; top:5%;" id="frm_registrar">
            <h5 class="blue-text">REGISTRAR CITA</h5><br><br>
            <form action="citamat.php" method="post" accept-charset="utf-8" id="formulariocitamat">


                <div class="input-field ">
                    <input type="date" name="txtfecha" value="" placeholder="" id="date" min="<?php echo date("Y-m-d"); ?>">
                    <label for="txtfecha"> Fecha Cita</label>
                </div>
                <div class="input-field ">
                    <input type="time" name="txthora" value="00:00" id="hora">
                    <label for="txthora" > Hora Cita</label>
                
                    <div class="contenedor-hora" id="contenedor-hora">
                        <ul>
                            <li><button id="btn1" onclick="cambiar_hora('10:00','btn1')" type="button">10:00am - 11:00am</button></li>
                            <li><button id="btn2" onclick="cambiar_hora('11:00','btn2')" type="button">11:00pm - 12:00pm</button></li>
                            <li><button id="btn3" onclick="cambiar_hora('12:00','btn3')" type="button">12:00pm - 13:00pm</button></li>
                            <li><button id="btn4" onclick="cambiar_hora('13:00','btn4')" type="button">13:00pm - 14:00pm</button></li>
                            <li><button id="btn5" onclick="cambiar_hora('16:00','btn5')" type="button">16:00pm - 17:00pm</button></li>
                            <li><button id="btn6" onclick="cambiar_hora('17:00','btn6')" type="button">17:00pm - 18:00pm</button></li>
                        </ul>
                    </div>

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

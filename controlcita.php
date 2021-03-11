<?php
require_once "conexion.php";

$q = "SELECT count(*) as existe from cita where dia = '{$_POST['fecha']}'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);
if ($array['existe']) {
    echo '
            <ul>
                <li><button style="background-color:red;" type="button">10:00am - 11:00am</button></li>
                <li><button style="background-color:red;" type="button">11:00pm - 12:00pm</button></li>
                <li><button style="background-color:red;" type="button">12:00pm - 13:00pm</button></li>
                <li><button style="background-color:red;" type="button">13:00pm - 14:00pm</button></li>
                <li><button style="background-color:red;" type="button">16:00pm - 17:00pm</button></li>
                <li><button style="background-color:red;" type="button">17:00pm - 18:00pm</button></li>
            </ul>
        ';
} else {
    echo '
        <ul>
            <li><button id="btn1" onclick="cambiar_hora('."'10:00'".','."'btn1'".')" type="button">10:00am - 11:00am</button></li>
            <li><button id="btn2" onclick="cambiar_hora('."'11:00'".','."'btn2'".')" type="button">11:00pm - 12:00pm</button></li>
            <li><button id="btn3" onclick="cambiar_hora('."'12:00'".','."'btn3'".')" type="button">12:00pm - 13:00pm</button></li>
            <li><button id="btn4" onclick="cambiar_hora('."'13:00'".','."'btn4'".')" type="button">13:00pm - 14:00pm</button></li>
            <li><button id="btn5" onclick="cambiar_hora('."'16:00'".','."'btn5'".')" type="button">16:00pm - 17:00pm</button></li>
            <li><button id="btn6" onclick="cambiar_hora('."'17:00'".','."'btn6'".')" type="button">17:00pm - 18:00pm</button></li>
        </ul>
        ';
}

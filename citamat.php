<?php
  include_once "conexion.php";

if ($_POST['txtfecha'] == "") {
    echo "Error ingresa la fecha";
    exit();
} else {
    if ($_POST['txthora'] == "00:00") {
        echo "Error Ingresa la hora";
        exit();
    } else {
        $q = "SELECT hora from cita where dia ='" . $_POST['txtfecha'] . "' ";
        $consulta = mysqli_query($conexion, $q);
        while ($array = mysqli_fetch_array($consulta)) {
            if ($array['hora'] == $_POST['txthora']) {
                echo "ya ingresaste la hora";
                exit();
            }
        }
        if ($_POST['txtmotivo'] == "") {
            echo "Error ingresa el motivo";
            exit();
        } else {
            session_start();
            $idcita=rand(100,200);
            $sql = "insert into cita (idcita,idusuario,dia,hora,motivo)
            values({$idcita},{$_SESSION['id']},
            '{$_POST['txtfecha']}' ,'{$_POST['txthora']}','{$_POST['txtmotivo']}')";
            mysqli_query($conexion, $sql);
            echo "registro correcto";
        }
    }
}




// if (isset($_REQUEST['btn_guardar'])) {
//     $idcita = rand(100, 200);
//     $idusuario = rand(100, 200);
//     $fechacita = $_POST['txtfecha'];
//     $horacita = $_POST['txthora'];
//     $motivo = $_POST['txtmotivo'];
//     $sql = "INSERT into cita values('$idcita','$idusuario','$fechacita','$horacita','$motivo')";
//     $ejecutar = mysqli_query($conexion, $sql);



//     if ($ejecutar) {

//         header("location:controlusu.php");
//     }
//}

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
$idmatrimonio=rand(100,200);
$nomnovia=ucwords($_POST['txtnombre']);
$apellidonovia=ucwords($_POST['txtapellido']);
$nomnovio=ucwords($_POST['txtnom']);
$apellidonovio=ucwords($_POST['txtape']);
$fechaboda=$_POST['txtfecha'];
$nommadrina=ucwords($_POST['txtnmad']);
$apellidomadrina=ucwords($_POST['txtamad']);
$nompadrino=ucwords($_POST['txtnpad']);
$apellidopadrino=ucwords($_POST['txtapad']);
    
$sql= "INSERT into matrimonios values('$idmatrimonio','$nomnovia','$apellidonovia','$nomnovio','$apellidonovio','$fechaboda','$nommadrina','$apellidomadrina','$nompadrino','$apellidopadrino')";
$ejecutar=mysqli_query($conexion,$sql);
   
    
    
    if($ejecutar)
    {
        header("location:matrimonios.php");
    }
}


if(isset($_REQUEST['btn_actualizar'])){
$idmatrimonio=$_POST['id'];
$nomnovia=ucwords($_POST['txtnombre']);
$apellidonovia=ucwords($_POST['txtapellido']);
$nomnovio=ucwords($_POST['txtnom']);
$apellidonovio=ucwords($_POST['txtape']);
$fechaboda=$_POST['txtfecha'];
$nommadrina=ucwords($_POST['txtnmad']);
$apellidomadrina=ucwords($_POST['txtamad']);
$nompadrino=ucwords($_POST['txtnpad']);
$apellidopadrino=ucwords($_POST['txtapad']);
    
    
$sql="UPDATE matrimonios SET nomnovia='$nomnovia', apellidonovia='$apellidonovia', nomnovio='$nomnovio', apellidonovio='$apellidonovio' , fechaboda='$fechaboda',nommadrina='$nomnovia', apemadrina='$apellidonovia', nompadrino='$nomnovio', apepadrino='$apellidonovio' WHERE idmatriminio='$idmatrimonio'";

$ejecutar=mysqli_query($conexion,$sql);
   
    
    
    if($ejecutar)
    {
        header("location:matrimonios.php");
    }
}


if(isset($_REQUEST['btn_eliminar'])){

    $idmatrimonio=$_POST['id'];
$sql="DELETE FROM matrimonios WHERE idmatriminio='$idmatrimonio'";
$ejecutar=mysqli_query($conexion,$sql);
   if($ejecutar)
    {
        header("location:matrimonios.php");
    }
}

?>
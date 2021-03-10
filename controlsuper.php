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
$idusuario=rand(100,200);
$nombre=ucwords($_POST['txtnombre']);
$correo=ucwords($_POST['txtcorreo']);
$usuario=ucwords($_POST['txtusuario']);
$password=ucwords($_POST['txtpassword']);
    
$sql= "INSERT into usuario values('$idusuario','$nombre','$correo','$usuario','$password')";
$ejecutar=mysqli_query($conexion,$sql);
   
    
    
    if($ejecutar)
    {
        header("location:usuarios.php");
    }
}


if(isset($_REQUEST['btn_actualizar'])){
$idusuario=$_POST['id'];
$nombre=ucwords($_POST['txtnombre']);
$correo=ucwords($_POST['txtapellido']);
$usuario=ucwords($_POST['txtnom']);
$apellidonovio=ucwords($_POST['txtape']);
$fechaboda=$_POST['txtfecha'];
    
$sql="UPDATE matrimonios SET nomnovia='$nomnovia', apellidonovia='$apellidonovia', nomnovio='$nomnovio', apellidonovio='$apellidonovio' , fechaboda='$fechaboda' WHERE idmatriminio='$idmatrimonio'";

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
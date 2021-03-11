<?php
class Matrimonios extends Controlador
{
    public function __construct()
    {
        $this->modelo = $this->cargarModelo("Matrimonio"); //como este controlador matrimonio ya tiene un modelo matrimonio
        //se le carga el modelo a la variable o atributo modelo, para poder realizar la logica del sistema, registrar, actualizar, etc
    }
    public function registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            verificarSesion(); //se verifica la sesion
            $this->cargarVista("Registrar_matrimonios");// se carga una vista, la primer letra tiene que se mayuscula, y no debe tener la extencion .php
        } else {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $nombreNovia = trim($_POST['txtnombre']);
                $apellidosNovia = trim($_POST['txtapellido']);

                $nombreNovio = trim($_POST["txtnom"]);
                $apellidosNovio = trim($_POST["txtape"]);
                $fecha = trim($_POST['txtfecha']);

                $nombreMadrina = trim($_POST['txtnmad']);
                $apellidosMadrina = trim($_POST['txtamad']);

                $nombrePadrino = trim($_POST['txtapad']);
                $apellidosPadrino = trim($_POST['txtnpad']);

                $ann = $_FILES['actanacimientonovia'];
                $comnovia = $_FILES['comprobantedomicilionovia'];
                $cbanovia = $_FILES['comprobantebautizonovia'];
                $ctdna = $_FILES['certificadoconfirmacionnovia'];
                $actno = $_FILES['actanacimientonovio'];
                $cdno = $_FILES['comprobantedomicilionovio'];
                $cbno = $_FILES['comprobantebautizonovio'];
                $ccno = $_FILES['certificadoconfirmacionnovio'];
                $amp = $_FILES['actamatrimoniopadrinos'];

                echo $this->modelo->registrar( //se le dice al modelo que ejecute su metodo registrar para que registre el matrimonio
                    $nombreNovia,
                    $apellidosNovia,
                    $nombreNovio,
                    $apellidosNovio,
                    $fecha,
                    $nombreMadrina,
                    $apellidosMadrina,
                    $nombrePadrino,
                    $apellidosPadrino,
                    $ann,
                    $comnovia,
                    $cbanovia,
                    $ctdna,
                    $actno,
                    $cdno,
                    $cbno,
                    $ccno,
                    $amp
                );
            }
        }
    }
}

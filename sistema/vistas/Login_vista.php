<?php
    require_once "encabezados/Header.php";
?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
<link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/estilos.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="#" method="post" class="formulario" id="formulario">
    <h1>Iniciar Sesión</h1>
    <div class="contenedor">
        <div class="input-contenedor"><i class="fas fa-envelope icon"></i>
            <input type="text" name="usuario" placeholder="Nombre" required="required">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="password" placeholder="Contraseña" required="required">
        </div>
        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
        <input type="submit" value="INGRESAR" class="button">

        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
        <p>¿No tienes una cuenta? <a class="link" href="<?php ECHO DOMINIO; ?>/home/registrar">Registrarse </a></p>
    </div>
</form>
<script type="text/javascript">
    $().ready(function(){
        $("#formulario").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr("action"),
                type:$(this).attr("method"),
                data:$(this).serialize(),
                success:function(respuesta){
                    alert(respuesta);
                    location.reload();
                }
            });
        });
    });
</script>
<?php
    require_once "encabezados/Footer.php";
?>
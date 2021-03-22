<?php require_once "encabezados/Header.php"; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
<link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/estilos.css" />
<script src="<?php echo DOMINIO;?>/public/assets/librerias/jquery-3.4.0.min.js"></script>

<script src="<?php echo DOMINIO;?>/public/assets/js/registrar_usuario.js"></script>

 <form action="#" method="post" class="formulario" id="formulario">
 
    
    <h1>Registro</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
        <input type="text"  name="nombre"  placeholder="Nombre" autocomplete="off" required>
         
         </div>
         
         <div class="input-contenedor">
          <i class="fas fa-envelope icon"></i>
        <input type="text"  name="email"  placeholder="Correo" autocomplete="off" required>
         </div>
              
    
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
        <input type="text"  name="usuario"  placeholder="Usuario" autocomplete="off" required>
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="password"  placeholder="Contraseña" autocomplete="off" required><br/>     
         
         </div>
        <input type="submit"  value="Registrarse" name="registrarse" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="<?php echo DOMINIO; ?>/home/login">Iniciar Sesion</a></p>
     </div>
     
     
    </form>

<?php require_once "encabezados/Footer.php"; ?>
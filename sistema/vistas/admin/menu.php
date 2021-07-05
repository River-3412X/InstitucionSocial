<style>
  #menu_administrador a:hover {
    background-color: white;
    color: #2F565C;
  }

  #menu_administrador a.active {
    background-color: white;
    color: #2F565C;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#2F565C" id="menu_administrador">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav w-100 justify-content-between">
      <li class="nav-item">
        <a class="nav-link " href="<?php echo DOMINIO; ?>">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo DOMINIO; ?>/bautizos/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Bautizos                                                                                                                        
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="<?php echo DOMINIO; ?>/bautizos/index">Ver Bautizos</a>
          <a class="dropdown-item" href="<?php echo DOMINIO; ?>/bautizos/administrador_registrar">Agregar</a>
     </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo DOMINIO; ?>/administrador/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Citas                                                                                                                        
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"  href="<?php echo DOMINIO; ?>/administrador/index">Ver Citas</a>
          <a class="dropdown-item" href="<?php echo DOMINIO; ?>/administrador/registrar_cita">Agregar</a>
     </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo DOMINIO; ?>/comuniones/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Comuniones                                                                                                                       
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"  href="<?php echo DOMINIO; ?>/comuniones/index">Ver Comuniones</a>
          <a class="dropdown-item" href="<?php echo DOMINIO; ?>/comuniones/adm_registrar">Agregar</a>
     </div>
      </li>

      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo DOMINIO; ?>/confirmaciones/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Confirmaciones                                                                                                                     
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"  href="<?php echo DOMINIO; ?>/confirmaciones/index">Ver confirmaciones</a>
          <a class="dropdown-item" href="<?php echo DOMINIO; ?>/confirmaciones/admin_registrar">Agregar</a>
     </div>
      </li>

     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"href="<?php echo DOMINIO; ?>/matrimonios/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Matrimonios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"  href="<?php echo DOMINIO; ?>/matrimonios/index">Ver matrimonios</a>
          <a class="dropdown-item" href="<?php echo DOMINIO; ?>/matrimonios/admin_registrar">Agregar</a>
     </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?php echo DOMINIO; ?>/home/cerrar_sesion">Cerrar Sesión</a>
      </li>
    </ul>

  </div>
</nav>
<br>
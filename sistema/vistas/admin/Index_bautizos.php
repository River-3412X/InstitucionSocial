<?php
require_once "../sistema/vistas/encabezados/Header.php";

?>
<script src="<?php echo DOMINIO; ?>/public/assets/js/admin/eliminaciones/index.js" type="text/javascript"></script>
<script type="text/javascript">
    $().ready(function() {
        $("#maitem1").addClass("active");
    });
    
    $('.btn-pop').each(function(index,element){
            $(element).click(function(){
                var x=index;
                $('.btn-pop').each(function(index,element){
                    if(!$(element).find(".pop").hasClass("disabled")){
                        if(index!=x){
                            $(element).parent().find(".pop").addClass("disabled");
                        }
                    }
                });
                $(this).parent().find(".pop").toggleClass("disabled");
            });
    $("#formulario_baubuscador").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr("action"),
                method:$(this).attr("method"),
                data:$(this).serialize(),
                success:function(respuesta){
                    $("#tabla_bautizos").html(respuesta);
                }
            });
        });
</script>
<div class="container">
    <?php
    require_once "menu.php";
    ?>
    <h3 class="text-center">Bautizos</h3>
    <div class="buscador">
        <form action="<?php echo DOMINIO;?>/bautizos/buscar" method="post" id="formulario_baubuscador">
            <div class="d-flex justify-content-center mb-3" style="width:100%;">
                <input type="text" name="busca" id="busca" class="form-control mr-1" placeholder="buscar bautizos" style="width:40%;">    
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </div>
        </form>
    </div>

    <div class="overflow-auto">
        <table class="table table-hover table-striped table-sm shadow">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre Madre</th>
                    <th>Nombre Padre</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Padrino</th>
                    <th>Documentos</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tabla_bautizos">
                <?php
                if (isset($parametros['bautizos'])) {
                    echo $parametros['bautizos'];
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>


<?php
require_once "../sistema/vistas/alertas/alertas.php";
require_once "../sistema/vistas/encabezados/Footer.php";
?>
<?php
require_once "../sistema/vistas/encabezados/Header.php";

?>
<script src="<?php echo DOMINIO; ?>/public/assets/js/admin/eliminaciones/index.js" type="text/javascript"></script>
<script type="text/javascript">
    $().ready(function() {
        $("#maitem5").addClass("active");
      
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
        });
        $("#formulario_buscador").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr("action"),
                method:$(this).attr("method"),
                data:$(this).serialize(),
                success:function(respuesta){
                    $("#tabla_matrimonios").html(respuesta);
                }
            });
        });
    });
</script>
<style>
    .btn-pop{
        position: relative;
        display: block;
        cursor: pointer;
        margin-bottom: 5px;
        padding: 2px !important;
        background-color: rgb(47,86,92);
        color: white;
    }
    .btn-pop:hover{
        color: rgb(47,86,92);
        background-color: white;
    }
    .pop{
        position: absolute;
        z-index: 100;
        border-radius: 6px;
        border:1px solid rgba(1,2,1,0.15);
        overflow: hidden;
        transform: translate(-108%,-32px);
        transition: opacity 0.3s;
    }
    .pop-header{
        background-color:rgb(47,86,92);
        padding:8px;
        color: white;
        text-align: center;
    }
    .pop-body{
        padding:8px;   
        background-color: white;
    }
    .disabled{
        opacity:0;
        display: none;
    } 
</style>
<div class="container">
    <?php
    require_once "menu.php";
    ?>
    <h3 class="text-center">Matrimonios</h3>
    <div class="buscador">
        <form action="<?php echo DOMINIO;?>/matrimonios/buscar" method="post" id="formulario_buscador">
            <div class="d-flex justify-content-center mb-3" style="width:100%;">
                <input type="text" name="buscador" id="buscador" class="form-control mr-1" placeholder="buscar matrimonios" style="width:40%;">    
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </div>
        </form>
    </div>

    <div class="overflow-auto">
        <table class="table table-hover table-striped table-sm shadow">
            <thead>
                <tr>
                    <th>Novia</th>
                    <th>Novio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Madrina</th>
                    <th>Padrino</th>
                    <th>Documentos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tabla_matrimonios">
                <?php
                    if (isset($parametros['matrimonios'])) {
                        echo $parametros['matrimonios'];
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
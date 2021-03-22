

$().ready(function(){ // aqui indico cuando esta lista la página (o haya cargado completamente), con nomenclatura de jquery
    // primer cosa selector $("").
    //# : se ocupa para los id
    //.:se ocupa para clases
    $("#formulario").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:$(this).attr("method"), // acceder a una propiedad del formulario
            url:$(this).attr("action"),
            data:$(this).serialize(), //se envian los datos serializados,
            
            success:function(respuesta){
                alert(respuesta); // mostrar respuesta en alerta
                location.reload();//actualizar pagina
            },
            error:function(error){
                console.log("se produjo un error"+error);
            }
        });
    });
});
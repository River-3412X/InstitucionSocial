$().ready(function(){
    $("#formulariocitamat").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            success:function(respuesta){
                alert(respuesta);
                location.reload();
            },
            error:function(respuesta){
                console.log("el error es: "+respuesta);
            }
        });
    });
    $("#date").change(function(){
        console.log("chambio el valor");
        $.ajax({
            type:"post",
            url:$("#boton").attr("href"),
            data:{
                "fecha":$(this).val()
            },
            success:function(respuesta){
                $("#contenedor-hora").html(respuesta);
            },
            error:function(respuesta){
                console.log("el error es: "+respuesta);
            }
        });
    });
});
function cambiar_hora(hora,btn){
    $("#hora").val(hora);
    var array = new Array();
    array=["btn1","btn2","btn3","btn4","btn5","btn6"];
    var i = 0;
    for(i=0; i<6; i++ ){
        if(btn == array[i]){
            $("#"+btn).css("backgroundColor","#21B2F8");
        }
        else{
            $("#"+array[i]).css("backgroundColor","#1A2537");
        }
    }   
    
}
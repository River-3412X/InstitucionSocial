$().ready(function(){ // aqui indico cuando esta lista la página (o haya cargado completamente), con nomenclatura de jquery
    // primer cosa selector $("").
    //# : se ocupa para los id
    //.:se ocupa para clases
    tabs();
    document.getElementById("actadenacimiento").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelactadenacimiento").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelactadenacimiento").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelactadenacimiento").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelactadenacimiento").html("Selecciona un archivo PDF");
        }
    });

    document.getElementById("comprobante").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcomprobante").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelcomprobante").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelcomprobante").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelcomprobante").html("Selecciona un archivo PDF");
        }
    });




    
    $("#formulario").submit(function(e){
        console.log("estas en la funcion");
        e.preventDefault();
        $.ajax({
            type:$(this).attr("method"), // acceder a una propiedad del formulario
            url:$(this).attr("action"),
            data:$(this).serialize(), //se envian los datos serializados,
            
            success:function(respuesta){
                 // mostrar respuesta en alerta
                if(respuesta.indexOf("El Nombre de Usuario ya Existe")!=-1){
                    $("#contenido_modal_danger").html("El nombre de Usuario ya Existe elije otro Por Favor");
                    $("#modal_danger").modal("show");
                }
                else{
                    if(respuesta.indexOf("Error al registrarse")!=-1){
                        $("#contenido_modal_danger").html("Ocurrió un error al Registrar el Usuario");
                        $("#modal_danger").modal("show");
                    }
                    else{
                        $("#contenido_modal_success").html(respuesta);
                        $("#modal_success").modal("show");
                        $('#modal_success').on('hidden.bs.modal', function (e) {
                            location.reload();//actualizar pagina
                        });
                    }
                }
            },
            error:function(error){
                console.log("se produjo un error"+error);
            }
        });
    });

    var array =[
        "#telefono",
        "#fecha_bautizo",
        "#actadenacimiento",
        "#hora_boda",
        "#comprobante",
        "#nombre",
        "#apellidos",
        "#nombre_madre",
        "#apellidos_madre",
        "#nombre_padre",
        "#apellidos_padre",
        "#nombre_madrina",
        "#apellidos_madrina",
    ];
    $("#formulario").submit(function(e){
        e.preventDefault();
        if(!validaciones(array)){
            return false; 
        }
    });
    validar_campos("#nombre");
    validar_campos("#apellidos");
    validar_campos("#nombre_madre");
    validar_campos("#apellidos_madre");
    validar_campos("#nombre_padre");
    validar_campos("#apellidos_padre");
    validar_campos("#nombre_madrina");
    validar_campos("#apellidos_madrina");
});


var arreglo_tabs = [
    "contenido_uno",
    "contenido_dos",
    "contenido_tres",
    "contenido_cuatro"
];
var arreglo_botones=[
    "uno",
    "dos",
    "tres",
    "cuatro"
];
var active=0;
function tabs(){
    $("#"+arreglo_tabs[active]).toggleClass("active");
    $("#"+arreglo_botones[active]).toggleClass("active");
    eventos();
}

function eventos(){
    $("#uno").click(function(){
        cambiar_tab(0);
    });
    $("#dos").click(function(){
        cambiar_tab(1);
    });
    $("#tres").click(function(){
        cambiar_tab(2);
    });
    $("#cuatro").click(function(){
        cambiar_tab(3);
    });
}

function cambiar_tab(id){
    if(id==0){
        $("#button_back").css("display","none");
        $("#button_next").css("display","block");
    }
    else{
        if(id==arreglo_botones.length-1){
            $("#button_next").css("display","none");
            $("#button_back").css("display","block");
        }
        else{
            $("#button_back").css("display","block");
            $("#button_next").css("display","block");
        }
    }
    $("#"+arreglo_tabs[active]).toggleClass("active");
    $("#"+arreglo_botones[active]).toggleClass("active");
    active=id;
    $("#"+arreglo_tabs[active]).toggleClass("active");
    $("#"+arreglo_botones[active]).toggleClass("active");
}

function tab_anterior(){
    let n =active-1;
    cambiar_tab(n);
}
function tab_siguiente(){
    let n=active+1;
    cambiar_tab(n);
}
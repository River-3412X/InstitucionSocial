$().ready(function(){ // aqui indico cuando esta lista la página (o haya cargado completamente), con nomenclatura de jquery
    // primer cosa selector $("").
    //# : se ocupa para los id
    //.:se ocupa para clases

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

    document.getElementById("febautizo").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelfebautizo").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelfebautizo").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelfebautizo").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelfebautizo").html("Selecciona un archivo PDF");
        }
    });

    document.getElementById("CertificadoComunion").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelComunion").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelComunion").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelComunion").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelComunion").html("Selecciona un archivo PDF");
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
});
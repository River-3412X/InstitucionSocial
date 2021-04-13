$().ready(function(){   
    tabs();
    document.getElementById("actanacimientonovia").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelactanacimientonovia").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelactanacimientonovia").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelactanacimientonovia").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelactanacimientonovia").html("Selecciona un archivo PDF");
        }
    });
    document.getElementById("comprobantedomicilionovia").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcomprobantedomicilionovia").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    this.value=null;
                    $("#labelcomprobantedomicilionovia").html("Selecciona un archivo PDF");
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                this.value=null;
                $("#labelcomprobantedomicilionovia").html("Selecciona un archivo PDF");
            }        
        }
        else{
            this.value=null;
            $("#labelcomprobantedomicilionovia").html("Selecciona un archivo PDF");
        }
    });
    document.getElementById("comprobantebautizonovia").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcomprobantebautizonovia").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelcomprobantebautizonovia").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelcomprobantebautizonovia").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelcomprobantebautizonovia").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("certificadoconfirmacionnovia").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcertificadoconfirmacionnovia").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelcertificadoconfirmacionnovia").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelcertificadoconfirmacionnovia").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelcertificadoconfirmacionnovia").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("actanacimientonovio").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelactanacimientonovio").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelactanacimientonovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("Solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelactanacimientonovio").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelactanacimientonovio").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("comprobantedomicilionovio").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcomprobantedomicilionovio").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelcomprobantedomicilionovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelcomprobantedomicilionovio").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelcomprobantedomicilionovio").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("comprobantebautizonovio").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcomprobantebautizonovio").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelcomprobantebautizonovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelcomprobantebautizonovio").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelcomprobantebautizonovio").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("certificadoconfirmacionnovio").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelcertificadoconfirmacionnovio").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelcertificadoconfirmacionnovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelcertificadoconfirmacionnovio").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelcertificadoconfirmacionnovio").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    document.getElementById("actamatrimoniopadrinos").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelactamatrimoniopadrinos").html(this.files[0].name);        
                }
                else{
                    $("#contenido_modal_danger").html("solo puedes agregar archivos menores de 10Mb");
                    $("#modal_danger").modal("show");
                    $("#labelactamatrimoniopadrinos").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
                $("#contenido_modal_danger").html("solo puedes agregar archivos pdf");
                $("#modal_danger").modal("show");
                $("#labelactamatrimoniopadrinos").html("Selecciona un archivo PDF");
                this.value=null;
            }        
        }
        else{
            $("#labelactamatrimoniopadrinos").html("Selecciona un archivo PDF");
            this.value=null;
        }
    });
    $("#formulario").submit(function(e){
        e.preventDefault();
        if(!validaciones()){
            return false;
        }
        else{
            var formData= new FormData(document.getElementById("formulario"));
            var files = $('#actanacimientonovia')[0].files[0];
            formData.append('actanacimientonovia', files);
    
            files = $('#comprobantedomicilionovia')[0].files[0];
            formData.append('comprobantedomicilionovia', files);
    
            files = $('#comprobantebautizonovia')[0].files[0];
            formData.append('comprobantebautizonovia', files);
    
            files = $('#certificadoconfirmacionnovia')[0].files[0];
            formData.append('certificadoconfirmacionnovia', files);
    
            files = $('#actanacimientonovio')[0].files[0];
            formData.append('actanacimientonovio', files);
    
            files = $('#comprobantedomicilionovio')[0].files[0];
            formData.append('comprobantedomicilionovio', files);
    
            files = $('#comprobantebautizonovio')[0].files[0];
            formData.append('comprobantebautizonovio', files);
    
            files = $('#certificadoconfirmacionnovio')[0].files[0];
            formData.append('certificadoconfirmacionnovio', files);
            
            files = $('#actamatrimoniopadrinos')[0].files[0];
            formData.append('actamatrimoniopadrinos', files);
    
    
            $.ajax({
                beforeSend:function(){
                    $("#progress_bar").css("display","flex");
                    $("#btn_register").css("display","none");
                },
                xhr:function(){
                    let xhr= new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress",function(event){
                        if(event.lengthComputable){
                            let porcentaje =Math.floor((event.loaded/event.total)*100);
                            $("#progress_bar_content").css("width",porcentaje+"%");
                            $("#progress_bar_content").html("Registrando: "+porcentaje+"%");
                            console.log("el progreso es: "+porcentaje);
                        }
                    });
                    return xhr;
                },
                url:$(this).attr("action"),
                type:$(this).attr("method"),
                data:formData,
                contentType: false,
                processData: false,
                success:function(respuesta){
                    if(respuesta.indexOf("Se realizó el registro correctamente")!=-1){
                        $("#contenido_modal_success").html(respuesta);
                        $("#modal_success").modal("show");
                        $('#modal_success').on('hidden.bs.modal', function (e) {
                            location.href=$("#ruta").attr("href");
                          });
                    }
                    else{
                        $("#contenido_modal_danger").html(respuesta);
                        $("#modal_danger").modal("show");
                    }
                    
                    
                    $("#progress_bar").css("display","none");
                    $("#btn_register").css("display","block");
                },
                error:function(error){
                    console.log("ocurrio un error");
                    console.log(error);
                }
            });
        }
        
    });
    function validaciones(){
        var array= [
            "#actanacimientonovia",
            "#comprobantedomicilionovia",
            "#comprobantebautizonovia",
            "#certificadoconfirmacionnovia",
            "#actanacimientonovio",
            "#comprobantedomicilionovio",
            "#comprobantebautizonovio",
            "#certificadoconfirmacionnovio",
            "#actamatrimoniopadrinos",
            "#nombre_novia",
            "#apellidos_novia",
            "#nombre_novio",
            "#apellidos_novio",
            "#nombre_madrina",
            "#apellidos_madrina",
            "#nombre_padrino",
            "#apellidos_padrino",
            "#fecha_boda",
            "#hora_boda",
            "#date",
            "#hora",
            "#motivo"
        ];
        var error=true;
        array.forEach(function(valor){
            if( $(valor).val()==""){
               $("#contenido_modal_danger").html("Completa los campos correctamente");
               $("#modal_danger").modal("show");
               error=false;
               return false;
            }
        });
        return error;
    }
});


// alter table matrimonios 
// add actanacimientonovia text,
// add comprobantedomicilionovia text,
// add comprobantebautizonovia text,
// add certificadoconfirmacionnovia text,

// add actanacimientonovio text,
// add comprobantedomicilionovio text,
// add comprobantebautizonovio text,
// add certificadoconfirmacionnovio text,

// add actamatrimoniopadrinos text

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
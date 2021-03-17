$().ready(function(){
    document.getElementById("actanacimientonovia").addEventListener("change",function(){
        var extensiones = /(.pdf|.PDF)$/i;
        if($(this).value!=""){
            if (extensiones.exec(this.value)) {
                if(this.files[0].size < 10240000){
                    $("#labelactanacimientonovia").html(this.files[0].name);        
                }
                else{
                    alert("solo puedes agregar archivos menores de 10Mb");
                    this.value=null;
                    $("#labelactanacimientonovia").html("Selecciona un archivo PDF");
                }
            }
            else{
                alert("solo puedes agregar pdf");
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
                    alert("solo puedes agregar archivos menores de 10Mb");
                    this.value=null;
                    $("#labelcomprobantedomicilionovia").html("Selecciona un archivo PDF");
                }
            }
            else{
                alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelcomprobantebautizonovia").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelcertificadoconfirmacionnovia").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelactanacimientonovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelcomprobantedomicilionovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelcomprobantebautizonovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelcertificadoconfirmacionnovio").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
                   alert("solo puedes agregar archivos menores de 10Mb");
                    $("#labelactamatrimoniopadrinos").html("Selecciona un archivo PDF");
                    this.value=null;
                }
            }
            else{
               alert("solo puedes agregar pdf");
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
            url:$(this).attr("action"),
            type:$(this).attr("method"),
            data:formData,
            contentType: false,
            processData: false,
            success:function(respuesta){
                alert(respuesta);
                location.reload();
            },
            error:function(error){
                console.log("ocurrio un error"+error);
            }
        });
    });
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
$(document).ready(function() { 

    /* Contact Form */
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        let dataString = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            message: $("#message").val()
        }

        function isValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        if (isValidEmail(dataString.email) && (dataString.message.length > 1) && (dataString.name.length > 1)) {
            $.ajax({
                type: "POST",
                // url: "https://recicladosindustriales.co/API/public/ri/Contact/Post",
                url: "../API/public/ri/Contact/Post",
                dataType: "json",
                data: dataString,
                success: function () {
                    $('#contactForm  .success').fadeIn(1000);
                    $('#contactForm  .error').fadeOut(500);
                }
            });
            $('#contactForm  .success').fadeIn(1000);
            document.getElementById("contactForm").reset();
        } else {
            $('#contactForm .error').fadeIn(1000);
            $('#contactForm .success').fadeOut(500);
        }

        return false;
    });

    /* Contact Form */
    $("#subscribe").submit(function (e) {
        e.preventDefault();
        let dataString = { email: $("#emailSubscribe").val() }

        function isValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        if(dataString.email == '') {
            $('#subs-warning').fadeIn(1000);
            setTimeout( function() {
                $('#subs-warning').fadeOut(1000);
            }, 3000);
        } else if (isValidEmail(dataString.email)) {
            $.ajax({
                type: "POST",
                // url: "https://recicladosindustriales.co/API/public/ri/Inscripcion/Post",
                url: "../API/public/ri/Inscripcion/Post",
                dataType: "json",
                data: dataString,
                success: function () {
                    document.getElementById("emailSubscribe").value = '';
                    $('#subs-success').fadeIn(1000);
                    setTimeout( function() {
                        $('#subs-success').fadeOut(1000);
                    }, 2000);
                    setTimeout( function() {
                        $("#subscribe-modal").modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    }, 3000);
                },
                error: function() { 
                    $('#subs-danger').fadeIn(1000);
                    setTimeout( function() {
                        $('#subs-danger').fadeOut(1000);
                    }, 3000);
                }     
            });
            $('#cotizarFormMate .success').fadeIn(1000);            
            document.getElementById("cotizarFormMate").reset();
        } else {
            $('#subs-warningDos').fadeIn(1000);
            setTimeout( function() {
                $('#subs-warningDos').fadeOut(1000);
            }, 3000);
        }
        return false;
    });

      /* Contact Form Materiales */
    $("#cotizarFormMate").submit(function (e) {
        e.preventDefault();

        let dataString = {
        name: $("#name3").val(),
        email: $("#email3").val(),
        material: $("#select3").val(),
        message: $("#message3").val(),
        phone: $("#phone3").val(),
        cantidad: $('#select4').val()
        }

        function isValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        if (isValidEmail(dataString.email) && (dataString.name.length > 1)) {
            $.ajax({
                type: "POST",
                // url: "https://recicladosindustriales.co/API/public/ri/Cotizar/Post",
                url: "../API/public/ri/Cotizar/Post",
                dataType: "json",
                data: dataString,
                success: function () {
                    // $('#cotizarFormMate .success').fadeIn(1000);
                    // $('#cotizarFormMate .error').fadeOut(500);
                }
            });
            $('#cotizarFormMate .success').fadeIn(1000);            
            document.getElementById("cotizarFormMate").reset();
        } else {
            $('#cotizarFormMate .error').fadeIn(1000);
            $('#cotizarFormMate .success').fadeOut(500);
        }
        return false;
    });

    /* Formulario certificados */
    /* Formulario certificados condicional */
    $(function() {
        $('.contratoIdu').hide();

        $('#selContrIdu').change(function() {
            ($(this).val() == "si") ? $('.contratoIdu').show() : $('.contratoIdu').hide();
        });
    });
     /* Fin formulario certificados condicional */
     /* Botón upload Files */
    //  var files;
    $("#inputFile").fileinput({
        browseLabel: 'Subir archivo...',
        previewFileIcon: '<i class="fas fa-file"></i>',
        showUpload:false,
        previewFileType:'any',
        allowedFileExtensions: ["jpg", "png", "jpeg", "pdf", "zip", "rar"],
        elerrorContainer: '#err-block',
        maxFileSize: 10240,
        uploadUrl: '/Files/Certificados',
        enableResumableUpload: true,
        initialPreviewAsData: true,
        fileActionSettings: {
            showZoom: function(config) {
                if (config.type === 'pdf' || config.type === 'image') {
                    return true;
                }
                return false;
            }
        },
        theme: 'explorer',
        language: 'es',
        preferIconPreview: true,
        previewFileIconSettings: {
            'pdf' : '<i class = "fas fa-file-pdf text-danger"> </i>' ,
            'jpg' : '<i class = "fas fa-file-image text-success"> </i>' ,
            'jpeg' : '<i class = "fas fa-file-image text-success"> </i>' ,
            'zip': '<i class="fas fa-file-archive text-muted"></i>',
            'png' : '<i class = "fas fa-file-image text-primary"> </i>'
        },
        previewFileExtSettings: {
            'zip': function(ext) {
                return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
            },
            'jpg': function(ext) {
                return ext.match(/(jp?g|png|gif|bmp)$/i);
            },
            'pdf': function(ext) {
                return ext.match(/(pdf)$/i);
            },
        }
    }).on('fileuploaded', function(event, previewId, index, fileId) {
        console.log('File Uploaded', 'ID: ' + fileId + ', Thumb ID: ' + previewId);
    }).on('fileuploaderror', function(event, previewId, index, fileId) {
        console.log('File Upload Error', 'ID: ' + fileId + ', Thumb ID: ' + previewId);
    }).on('filebatchpreupload', function(event, data) {
        var n = data.files.length, files = n > 1 ? n + ' files' : 'one file';
        if (!window.confirm("Está seguro que desea cargar: " + files + "?")) {
            return {
                message: "Carga cancelada!", // upload error message
                data:{} // any other data to send that can be referred in `filecustomerror`
            };
        }
    }).on('filebatchuploadcomplete', function(event, preview, config, tags, extraData) {
        console.log('File Batch Uploaded', preview, config, tags, extraData);
    });
    /* fin Botón upload Files */
     /* Almacenamiento de archivos */
     var datos = new FormData();
     datos.append('archivo', $('#Vales')[0].files[0]);
     /* Fin Almacenamiento de archivos */
    $("#certifyForm").submit(function (e) {
        e.preventDefault();

        let dataString = {
            email:      $("#emailCert").val(),
            phone:      $("#phoneCert").val(),
            nit:        $("#nit").val(),
            nameCorp:   $("#nameCorp").val(),
            contrato:   $("#contrato").val(),
            proyecto:   $("#proyecto").val(),
            pin:        $('#pin').val(),
            contact:    $('#contact').val(),
            selContrIdu:$('#selContrIdu').val(),
            periodo:    $('#periodo').val(),
            vales:      this.data.files,
            message:    $('#messageContrato').val()
        }

        function isValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        if (isValidEmail(dataString.email) && (dataString.phone.length > 1) && (dataString.nit.length > 1)) {
            $.ajax({
                type: "POST",
                // url: "https://test.recicladosindustriales.co/API/public/ri/Certificar/Post",
                url: "../API/public/ri/Certificar/Post",
                dataType: "json",
                data: dataString,
                success: function () {
                    console.log(dataString);
                }
            });

            $('#certifyForm .success').fadeIn(1000);            
            $("#certifyForm")[0].reset();
            $("#closeBtn").addClass("btn-close-block");
            $("#submitBtn").addClass("btn-close-hidden");
            $("#closeBtn").removeClass("btn-close-hidden");
        } else {
            $('#certifyForm .error').fadeIn(1000);
            $('#certifyForm .success').fadeOut(500);
        }
        return false;
    });
    /* Botón cerrar formulario certificados */
    $('#closeBtn').click(function() {
        $("#submitBtn").removeClass("btn-close-hidden");
        $("#closeBtn").addClass("btn-close-hidden");
        $("#closeBtn").removeClass("btn-close-block");
        $("#modalCertify").css('display','none');
        $(".success").css('display', 'none');
    });
    /* Fin Botón cerrar formulario certificados */
    
    /* fin Formulario certificados */
}); //end document ready

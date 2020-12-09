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
    /* Condicional */
    $(function() {
        $('.contratoIdu').hide();

        $('#selContrIdu').change(function() {
            ($(this).val() == "si") ? $('.contratoIdu').show() : $('.contratoIdu').hide();
        });
    });
     /* Fin Condicional */
     /* Botón upload Files */
    $('#inputFile').fileinput({
        theme: 'explorer-fas',
        language: 'es',
        uploadUrl: '../Files',
        overwriteInitial: false,
        initialPreviewAsData: true,
    });
    /* fin Botón upload Files */
    /* Submit Formulario */
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
            periodoIni: $('#periodoInicio').val(),
            periodoFin: $('#periodoFin').val(),
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
    /* Fin Submit Formulario */
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

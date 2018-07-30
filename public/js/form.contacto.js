
(function ($) {

    var $page = this;

    $(document).ready(function () {
        initMatchesValidation();

        this.rules = {
            in_telefono: {
                matches: "^(\\d|\\s)+$",
                minlength: 7,
                maxlength: 9
            }
        };

        this.validationMessages = {
            in_nombre: {
                required: "Este campo es obligatorio"
            },
            in_apellidos: {
                required: "Este campo es obligatorio"
            },
            in_email: {
                required: "Este campo es obligatorio",
                email: "Ingrese un email válido"
            },
            in_telefono: {
                required: "Este campo es obligatorio",
                matches: "Ingrese un teléfono válido",
                minlength: $.validator.format("Ingrese {0} dígitos como mínimo"),
                maxlength: $.validator.format("Ingrese {0} dígitos como máximo")
            },
            in_distrito: {
                required: "Este campo es obligatorio"
            },
            in_turno: {
                required: "Este campo es obligatorio"
            },
        };

        OpenFancybox();

        InitValidate(this.validationMessages, this.rules);

        //
    });

    function OpenFancybox() {
        //var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        //if (isChrome) {
        //    $("#form-styles").on('load', function () {
        //        $page.fancyInstance = $.fancybox.open({ src: "#form-contacto", type: 'inline' });
        //    });
        //} else {
            $page.fancyInstance = $.fancybox.open({ src: "#form-contacto", type: 'inline' }); 
        //}
    }

    function InitValidate($messages, $rules) {
        $("#contactForm").validate({
            rules: $rules,
            messages: $messages,
            submitHandler: function (form) {
                SendForm($(form))
            }
        });
    }

    function SendForm($form) {
        //var _url = '/bodyskin/formularios/registro-contacto/registro-contacto.php';
        var _url = '/bs_new/public/portal/formulario-contacto';
        var OnSuccess = function (Response) {
            $form.hide();
            $("#contactFormContainer .popup-success").show(500);
            setTimeout(function () {
                $page.fancyInstance.close();
            }, 4000);
            $form.LoadingOverlay("hide");
        };

        var OnError = function (Error) {
            if (Error.status == 422) {
                var msg = "Ocurrieron los siguientes problemas al validar los datos:<br><br>";

                $.each(Error.responseJSON, function (key, errores) {
                    $.each(errores, function (index, value) {
                        msg += '- ' + value + '<br>';
                    });
                });

                $("#contactFormContainer div.popup-error-validation").html(msg);
                $("#contactFormContainer div.popup-error-validation").show(500);
            } else {
                $("#contactFormContainer div.popup-error").show(500);
            }
            $form.LoadingOverlay("hide");
        };

        $.ajax({
            url: _url,
            dataType: "json",
            type: "post",
            data: $form.serialize(),
            beforeSend: function () {
                $("#contactFormContainer div.popup-error").hide();
                $("#contactFormContainer div.popup-error-validation").hide();
                $form.LoadingOverlay("show");
            }
        }).then(OnSuccess, OnError);
    }

    function initMatchesValidation() {
        $.validator.methods.matches = function (value, element, params) {
            var re = new RegExp(params);
            return this.optional(element) || re.test(value);
        }
    }
})(jQuery);


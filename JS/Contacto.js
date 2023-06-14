$(document).ready(function(){
    $('#btnSend').click(function(){
        var errores = '';

        //validacion del nombre
        if($('#names').val() == ''){
            errores += '<p>Escriba un nombre</p>';
            $('#names').css("border-bottom-color", "#f14b4b")
        } else{
            $('#names').css("border-bottom-color", "rgb(68, 118, 212)")   
        }

        //validacion del correo
        if($('#email').val() == ''){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#f14b4b")
        } else{
            $('#email').css("border-bottom-color", "rgb(68, 118, 212)")   
        }

        //validacion de mensajes
        if($('#mensaje').val() == ''){
            errores += '<p>Escriba un mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#f14b4b")
        } else{
            $('#mensaje').css("border-bottom-color", "rgb(68, 118, 212)")   
        }

        //enviando mensaje
        if(errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                        '</div>'+
                                '</div>'
            $('body').append(mensajeModal);
        }
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });
});
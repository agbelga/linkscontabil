$(document).ready(function(){
    $('.botao-responsivo').click(function(){
        if ($(".main-menu").hasClass("d-none")) {
            $(".main-menu").hide().removeClass("d-none").slideDown(1000);
        } else {
            $(".main-menu").slideUp(1000, function(){
                $(".main-menu").addClass("d-none");
            });
        }
    });
});
$(document).ready(function(){
    $('#formcontato').submit(function(){
        var dados = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "envia.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#resultado").text('Enviando mensagem');
                $("#resultado").fadeIn(250);
            },
            success: function(resposta){
                $("#resultado").removeClass("error success").addClass(resposta.tipo);
                $("#resultado").text(resposta.mensagem);
                $("#resultado").fadeIn(250);
            },
            error: function(){
                $("#resultado").removeClass("error success").addClass('error');
                $("#resultado").text('Um erro desconhecido aconteceu e sua mensagem nÃ£o pode ser enviada');
                $("#resultado").fadeIn(250);
            }
        });

        return false;
    });
});
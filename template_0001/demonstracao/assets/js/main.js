$(document).ready(function(){
    $('#formcontato').submit(function(){
        var dados = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "envia.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#result").text('Enviando mensagem');
                $("#result").fadeIn(250);
            },
            success: function(resposta){
                $("#result").removeClass("error success").addClass(resposta.tipo);
                $("#result").text(resposta.mensagem);
                $("#result").fadeIn(250);
            },
            error: function(){
                $("#result").removeClass("error success").addClass('error');
                $("#result").text('Um erro desconhecido aconteceu e sua mensagem nÃ£o pode ser enviada');
                $("#result").fadeIn(250);
            }
        });
        return false;
    });
    $("#mainmenu>.item-submenu>a").bind("click", function(){
        if($(this).next(".sub-menu").is(":hidden")){
            $(".item-submenu>a.ativo").next(".sub-menu").slideUp();
            $(".item-submenu>a.ativo").removeClass("ativo");
            
            $(this).addClass("ativo");
            $(this).next(".sub-menu").slideDown();
        } else {
            $(this).removeClass("ativo");
            $(this).next(".sub-menu").slideUp();
        }
    });
    $(".sub-menu>.item-submenu>a").bind("click", function(){
        if($(this).next(".sub-menu").is(":hidden")){
            $(".sub-menu>.item-submenu>a.ativo").next(".sub-menu").slideUp();
            $(".sub-menu>.item-submenu>a.ativo").removeClass("ativo");
            
            $(this).addClass("ativo");
            $(this).next(".sub-menu").slideDown();
        } else {
            $(this).removeClass("ativo");
            $(this).next(".sub-menu").slideUp();
        }
    });
});
$('.nav-menu').click(function(){
    $('.nav-menu').toggleClass('open');
    if($('.nav-menu').hasClass('open')){
        $("#menu").animate({right: "0"}, "slow");
    } else {
        $("#menu").animate({right: "-100%"}, "slow");
    }
});


// scroll menu e seta up
jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
  event.preventDefault();
  $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600); 
  });
  $('.UP').click(function(){
    $('html, body').animate({ scrollTop: $('.VoltaTopo').offset().top }, 600);
    });
});

window.onscroll = function () {
 if (window.scrollY > 100){
  $(".UP").slideDown(500);
    } else {
  $(".UP").slideUp(500);
 }
}
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


//ACORDION
$(document).ready(function() {
    $('.map').click(function(){
        if($(this).next('.internoMap').is(':visible') == true){
            $(this).children("a").children("i").html("");
            $('.internoMap').slideUp(500);
        } else{
            $('.internoMap').slideUp(500);
            $(this).next('.internoMap').slideDown(500);
            $(".map").children("a").children("i").html("");
            $(this).children("a").children("i").html("");
        }
    });
});

//MODAL
var modal = document.getElementById('modal'); 
var span = document.getElementsByClassName("close")[0];

function janela_modal(janela) { modal.style.display = "flex"; $(".janela_modal").hide(); $(janela).show(); }; 

$(".close").click(function() { modal.style.display = "none"; });

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



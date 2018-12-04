function movimenta(rolar){
	$('html, body').animate({ scrollTop: $(rolar).offset().top }, 1000);
}

//TOPO
$(document).ready(function() {
	$('.up').click(function(){
		$('html, body').animate({ scrollTop: $('.topoAncora').offset().top }, 1000);
	})
})

window.onscroll = function () {
 if (window.scrollY > 100){
  $(".up").slideDown(500);
    } else {
  $(".up").slideUp(500);
 }
}

//MENU
$("#responsivo_abre").click(function(){
    $(".mainMenu").animate({right: 0}, "slow");
    $("#responsivo_fundo").fadeIn();
});

$(".responsivo_fecha, #responsivo_fundo").click(function(){
    $(".mainMenu").animate({right: "-100%"}, "slow");
    $("#responsivo_fundo").fadeOut();
});

//BANNER
$(document).ready(function() {
	$('.banner').cycle({
		timeout:7000,
		speed:1000, 
        slides: '> div.banner-foto'
	});
});

//SLOGAN
$(document).ready(function() {

    $(".owl-slogan").owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        nav: false,
        dots: false
        });      
        
    });

//FORMULARIO
$(document).ready(function(){
    $('.contato').submit(function(){
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
});

//ACORDION
$(document).ready(function() {
    $('.map').click(function(){
        if($(this).next('.internoMap').is(':visible') == true){
            $(this).children("a").children("i").html("keyboard_arrow_down");
            $('.internoMap').slideUp(500);
        } else{
            $('.internoMap').slideUp(500);
            $(this).next('.internoMap').slideDown(500);
            $(".map").children("a").children("i").html("keyboard_arrow_down");
            $(this).children("a").children("i").html("keyboard_arrow_up");
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

//DATA
function escreveData(){
	var data = new Date();
	
	var hora = data.getHours();
	if (hora < 10) hora = "0" + hora;
	var minutos = data.getMinutes();
	if (minutos < 10) minutos = "0" + minutos;
	var segundos = data.getSeconds();
	if (segundos < 10) segundos = "0" + segundos;
	
	var dia = data.getDate(); 
	var semana = data.getDay();
	var mes = data.getMonth(); 
	var ano = data.getFullYear();
	
	var semanaArray = new Array("Domingo","Segunda-feira","TerÃ§a-feira","Quarta-feira","Quinta-feira","Sexta-feira","SÃ¡bado"); 
	var mesArray = new Array("Janeiro","Fevereiro","MarÃ§o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"); 
	
	document.getElementById("data").innerHTML = [hora,minutos,segundos].join(":") + " | " + [dia,mes+1,ano].join("/") + " | " + semanaArray[semana] ; 
}

setInterval(escreveData,1000);
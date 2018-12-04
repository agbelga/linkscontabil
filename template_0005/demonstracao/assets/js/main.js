$(document).ready(function(){
    $(".banner").cycle({
        fx: 'fade',
        speed: 1000,
        timeout: 5000,
        slides: '> .fotos'
    });
});

$(".abre-resp").click(function(){
    $(".mainmenu").animate({right: 0}, 500);
    $(".fd-resp").fadeIn(500);
});
$(".fecha-resp").click(function(){
    $(".mainmenu").animate({right: -290}, 500);
    $(".fd-resp").fadeOut(500);
});
$('.slogan').cycle({
    fx: 'fade',
    speed: 1000,
    timeout: 5000,
    slides: '> .frases-banner'
});

/* MENU RESPONSIVO */
$(".menu-responsivo").click(function(){
    $(".menu").animate({right: 0}, "slow");
    $(".menu-responsivo-fundo").fadeIn();
});
$(".menu-responsivo-fechar, .menu-responsivo-fundo").click(function(){
    $(".menu").animate({right: "-100%"}, "slow");
    $(".menu-responsivo-fundo").fadeOut();
});
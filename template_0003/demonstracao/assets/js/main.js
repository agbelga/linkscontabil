$(document).ready(function() {
    $(".slogan") .owlCarousel({
        autoPlay : 5000,
        stopOnHover : true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
    });

    $(".clientes_slide").owlCarousel({
        slideSpeed : 500,
        paginationSpeed : 1000,
        stopOnHover : true,
        singleItem : true,
        autoPlay : 6000,
        mouseDrag : false,
        pagination: false,
        navigation: true,
        navigationText: ["<",">"]
    });
});
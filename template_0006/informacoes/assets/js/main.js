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



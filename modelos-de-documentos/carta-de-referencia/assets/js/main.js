jQuery(function($){
     $("#data_admissao").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
     $("#data_desligamento").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
     $("#data").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
     $("#data_pagamento").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
     $("#horario_entrada").mask("99:99");
     $("#horario_saida").mask("99:99");
     $("#rg_funcionario").mask("99.999.999-9");
     //$("#numero_id").mask("99.999.999/9999-99");
});


//file
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $(input).next()
        .attr('src', e.target.result)
    };
    reader.readAsDataURL(input.files[0]);
    }
    else {
        var img = input.value;
        $(input).next().attr('src',img);
    }
} 

function verificaMostraBotao(){
    $('input[type=file]').each(function(index){
        if ($('input[type=file]').eq(index).val() != ""){
            readURL(this);
            $('.hide').show();
        }
    });
}

$('input[type=file]').on("change", function(){
  verificaMostraBotao();
});

$('.hide').on("click", function(){
    $(document.body).append($('<input />', {type: "file" }).change(verificaMostraBotao));
    $(document.body).append($('<img />'));
    $('.hide').hide();
});

//cidade e estado
var dados = [];
var url = 'https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json';

$(document).ready(function () {
      
  
    $.getJSON(url, function (data)  { 
      dados = data;
      var option_estado = '<option value="none">Selecione o estado</option>';
      $.each(data.estados, function (i, val) {
          option_estado +=  '<option value="' + val.nome + '">' + val.nome + '</option>';
      });    
      $('#estados').html(option_estado);
    });
  
    $('#estados').change(poulateCidades);
                              
});
        
function poulateCidades(){
  var idx            = $(this)[0].selectedIndex;
  var val            = $(this).val();
  var cidades        = (idx > 0)? dados.estados[idx-1].cidades : ['Selecione o estado'];
  var option_cidades = '';

  $.each(cidades, function(i, val){
    option_cidades  += '<option value="' + val + '">' + val + '</option>';
  });

  $('#cidades').html(option_cidades);
}    

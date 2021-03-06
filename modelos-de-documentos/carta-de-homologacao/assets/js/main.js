jQuery(function($){
   $("#data").mask("99/99/9999",{placeholder:"DD/MM/AAAA"}); 
   $("#data_admissao").mask("99/99/9999",{placeholder:"DD/MM/AAAA"}); 
   $("#data_desligamento").mask("99/99/9999",{placeholder:"DD/MM/AAAA"}); 
   $("#cnpj").mask("99.999.999/9999-9",{placeholder:"00.00.000/0000-0"});
   $("#rg_representante").mask("99.999.999-9",{placeholder:"00.000.000-0"});
   $("#cpf_representante").mask("999.999.999-99",{placeholder:"000.000.000-00"});
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


//valor
$("#remuneracao").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});


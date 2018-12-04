<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Advertência - Documentos Importantes - Link Contábil</title>
    <meta name="language" content="pt-br" />
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="Link Contábil - O seu portal completo sobre contabilidade.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index">
            
    <meta property='og:locale' content='pt_BR' />
    <meta property='og:title' content='Link Contábil - Links de Contabilidade' />
    <meta property='og:description' content='Link Contábil - O seu portal completo sobre contabilidade.' />
    <meta property='og:url' content='' />
    <meta property='og:image' content=''/>
    <meta property='og:type' content='website' />
    <meta property='og:type' content='article' />
    <meta property='og:site_name' content='Link Contábil - Links de Contabilidade' />
    
    <meta property='article:publisher' content='https://www.facebook.com/linkscontabil/' />
    <meta property='article:author' content='' />
    <meta property='facebook:description' content='Link Contábil - O seu portal completo sobre contabilidade.' />
    
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <!-- [if it IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    [endif]-->
    
</head>

<body>
<script language="JavaScript1.2">
<!--
function DoPrinting(){
if (!window.print){
alert("Use o Netscape  ou Internet Explorer \n nas versões 4.0 ou superior!")
return
}
window.print()
}
//-->
</script>

<div id="a4_total">

<input class="img" type="button" name="imprimir" value="" OnClick="javascript:DoPrinting();">



<div id="a4_interno">
<span id="data"><b><?php $cidade_empresa = $_POST['cidade_empresa']; echo "$cidade_empresa" ?>, <?php $data_advertencia = $_POST['data_advertencia']; echo "$data_advertencia" ?></b></span>
<span id="titulo_empregado">Prezado(a) Sr.(a): <b><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></b></span>


<small id="titulo">ADVERTÊNCIA</small><br/><br/>
<p>Através desta, fica o(a) Sr.(a), funcionário desta empresa, advertido(a), de acordo com a C.L.T. (CONSOLIDAÇÃO DAS LEIS DO TRABALHO), pelo seguinte motivo:

<b id="motivo"><?php $texto_advertencia = $_POST['texto_advertencia']; echo "$texto_advertencia" ?></b></p>

<p>Lembramos ao(a) senhor(a) que esta prática pode constituir em rescisão de contrato de trabalho por justa causa, conforme a C.L.T.

Não há vontade, por parte de nossa empresa, chegarmos a este final, e estamos dando-lhe oportunidade para que seu ato não se repita.

Solicitamos a não reincidência do fato, para que não sejam tomadas as medidas contidas na C.L.T.

Sem mais, e em cumprimento da Lei, solicitamos que firme o recebimento desta.

 </p>
<br/><br/>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td class="assinaturas">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="assinaturas">&nbsp;</td>
  </tr>
  <tr>
    <td class="linha"><?php $nome_empregador = $_POST['nome_empregador']; echo "$nome_empregador" ?></td>
    <td>&nbsp;</td>
    <td class="linha"><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="testemunhas">Testemunhas:<br/><br/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="linha2">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="linha2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="menor">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" class="responsavel">Responsável quando menor.</td>
    </tr>
</table>



</div><!--a4_interno-->


</div><!--a4_total-->



</body>
</html>
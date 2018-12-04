<?php 

$extensao = end(explode('.', $_FILES['logotipo']['name']));

$name = rand(). '.'. $extensao;

move_uploaded_file($_FILES['logotipo']['tmp_name'], 'assets/img/' . $name );

?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <title>Carta de Referência - Impressão - Link Contábil</title>
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

    <style type="text/css">
        @charset "utf-8";

        body{ 
            font-size: 19px;
            font-family: 'Arial', 'Helvetica', sans-serif; 
            color:#000; 
            background:#fff;
        }

        p {text-align: left;font-size: 16px;}

        small{font-size: 13px!important;padding-top: 2px;}

        .logotipo img{position: relative;top: 35px;}

        .text-center{text-align: center!important;}

        .container{padding-left: 5%;padding-right: 5%;}

        .btn-print{ 
            width:150px; 
            height:34px; 
            background:url('assets/img/btn-print.png') no-repeat; 
            border:none;
            margin-top:20px;
        }

        .btn-print:hover{ cursor:pointer; }

        .assinaturas{ 
            margin-top: 50px; 
            margin-bottom: 50px;
        }

        .ass{text-transform: uppercase;}

        .sublinhado{
            width: 330px;
            text-align: center!important;
            border-bottom: 1px solid #000;  
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
    
    <!-- [if it IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    [endif]-->

    <script type="text/javascript">
        function DoPrinting(){
            if (!window.print){
            alert("Use o Chrome na versão atualizada!")
            return
            }
        window.print()
        }
    </script>
    
</head>

<body>

    <header class="container header">
        <h4 class="logotipo" align="left">
            <img src="/Link_Contabil/modelos-de-documentos/carta-de-referencia/assets/img/<?php echo $name?>" width=90 height=auto' >
        </h4>

        <h4 class="data" align="right"><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></h4><br /><br />
    </header>

    <section class="container documento">

        <h4 align="center"><strong>CARTA DE REFERÊNCIA</strong></h4><br /><br />

        <p>A empresa <?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?>, sediada a 
        <?php $end_empresa = $_POST['end_empresa']; echo "$end_empresa" ?>. <?php $bairro_empresa = $_POST['bairro_empresa']; echo "$bairro_empresa" ?> - <?php $cidade = $_POST['cidade']; echo "$cidade" ?> | <?php $estado = $_POST['estado']; echo "$estado" ?>. De <?php $id_empresa = $_POST['id_empresa']; echo "$id_empresa" ?> Nº <?php $numero_id = $_POST['numero_id']; echo "$numero_id" ?>, vem por meio desta, através de seu(ua) <?php $cargo_declarante = $_POST['cargo_declarante']; echo "$cargo_declarante" ?> abaixo assinado(a), declarar que o(a) Sr(a). <?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?>, portador(a) do RG <?php $rg_funcionario = $_POST['rg_funcionario']; echo "$rg_funcionario" ?> foi nosso(a) funcionário(a) de <?php $data_admissao = $_POST['data_admissao']; echo "$data_admissao" ?> até <?php $data_desligamento = $_POST['data_desligamento']; echo "$data_desligamento" ?>, exercendo como último cargo a função de <?php $ultimo_cargo = $_POST['ultimo_cargo']; echo "$ultimo_cargo" ?> de <?php $dia_semana1 = $_POST['dia_semana1']; echo "$dia_semana1" ?> a <?php $dia_semana2 = $_POST['dia_semana2']; echo "$dia_semana2" ?> das <?php $horario_entrada = $_POST['horario_entrada']; echo "$horario_entrada" ?> às <?php $horario_saida = $_POST['horario_saida']; echo "$horario_saida" ?> horas. Nada constando em nossos arquivos que o(a) desabone.</p>

        <p>Sem mais para o momento e para que esta seja interpretada como verdadeira, firma-se.</p>
        
    </section>

    <section class="container assinaturas">

        <div class="ass-declarante">
            <p class="text-center">Atenciosamente,</p><br /><br />
            <p align="center" class="sublinhado text-center"></p>
            <p class="text-center ass"><?php $nome_declarante = $_POST['nome_declarante']; echo "$nome_declarante" ?></p>
        </div>

        <button class="btn-print pull-right" type="button" name="imprimir" value="" OnClick="javascript:DoPrinting();"></button>

    </section>

</body>
</html>
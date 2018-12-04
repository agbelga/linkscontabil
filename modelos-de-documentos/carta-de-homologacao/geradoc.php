<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Homologação - Impressão - Link Contábil</title>
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
            font-size: 16px;
            font-family: 'Arial', 'Helvetica', sans-serif; 
            color:#000; 
            background:#fff;
        }

        p {text-align: justify;font-size: 16px;}

        small{font-size: 13px!important;padding-top: 2px;}

        .data{margin-top: -35px;}

        .documento h4{margin-top: 50px;}

        .container{padding-left: 6%;padding-right: 6%;}

        .btn-print{ 
            width:150px; 
            height:34px; 
            background:url('assets/img/btn-print.png') no-repeat; 
            border:none;
            margin-top:20px;
        }

        .btn-print:hover{ cursor:pointer; }

        .assinatura{ 
            margin-top: 45px; 
            margin-bottom: 50px;
        }

        .ass-empresa{position: relative;margin-left: auto;margin-right: auto;}
        .ass-empresa p{ text-align: center; }

        .sublinhado{
            width: 280px;
            position: relative;
            margin-top: 55px;
            margin-right: auto;
            margin-left: auto;
            border-bottom: 1px solid #000;  
        }

        .sublinhado-left{
            width: 280px;
            margin: 30px 0;
            position: relative;
            border-bottom: 1px solid #000;  
        }

        .sublinhado-data{margin: 15px 0 30px 0;}

        .recebimento ul{margin-top: 80px;padding-left: 0!important;}
        .recebimento ul li{list-style: none;}
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
        <button class="btn-print" type="button" name="imprimir" value="" OnClick="javascript:DoPrinting();"></button>
        <h4 class="data" align="right"><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></h4>
    </header>

    <section class="container documento">

        <h4 align="center"><strong>HOMOLOGAÇÃO DE FUNCIONÁRIO</strong></h4><br />
        
        <p>A empresa denominada <strong><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?></strong>, sediada a  <?php $end_empresa = $_POST['end_empresa']; echo "$end_empresa" ?> - <?php $bairro_empresa = $_POST['bairro_empresa']; echo "$bairro_empresa" ?>. <?php $cidade = $_POST['cidade']; echo "$cidade" ?> | <?php $estado = $_POST['estado']; echo "$estado" ?>, <?php $id_empresa = $_POST['id_empresa']; echo "$id_empresa" ?> N° <?php $numero_id = $_POST['numero_id']; echo "$numero_id" ?>, vem por meio desta, através de seu(ua) <?php $cargo_declarante = $_POST['cargo_declarante']; echo "$cargo_declarante" ?> abaixo assinado(a), requerer a homologação do Termo de Rescisão de Contrato de Trabalho do(a) seu(ua) ex-funcionário(a) identificado abaixo:</p>

        <p style="text-transform: uppercase;"><strong><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></strong></p>

        <p><strong>CTPS <?php $ctps = $_POST['ctps']; echo "$ctps" ?> - SÉRIE <?php $serie = $_POST['serie']; echo "$serie" ?> - <?php $uf = $_POST['uf']; echo "$uf" ?></strong></p>

        <p><strong>ADMITIDO(A) EM: <?php $data_admissao = $_POST['data_admissao']; echo "$data_admissao" ?></strong></p>

        <p><strong>DESLIGADO(A) EM: <?php $data_desligamento = $_POST['data_desligamento']; echo "$data_desligamento" ?></strong></p>

        <p><strong>ÚLTIMO CARGO EXERCIDO: <?php $ultimo_cargo = $_POST['ultimo_cargo']; echo "$ultimo_cargo" ?></strong></p>

        <p><strong>REMUNERAÇÃO: R$ <?php $remuneracao = $_POST['remuneracao']; echo "$remuneracao" ?> ( <?php $id_remuneracao = $_POST['id_remuneracao']; echo "$id_remuneracao" ?> )</strong></p>

        <br /><p style="text-align: center!important;">Sendo representada por <?php $nome_representante = $_POST['nome_representante']; echo "$nome_representante" ?>, portador(a) do RG <?php $rg_representante = $_POST['rg_representante']; echo "$rg_representante" ?> e CPF <?php $cpf_representante = $_POST['cpf_representante']; echo "$cpf_representante" ?></p>
    </section>

    <section class="container assinatura">

        <div class="ass-empresa">
            <p>Atenciosamente,</p>
            <p class="sublinhado"></p>
            <p><?php $nome_declarante = $_POST['nome_declarante']; echo "$nome_declarante" ?><br /><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?></p>
        </div>
        
    </section>

</body>
</html>
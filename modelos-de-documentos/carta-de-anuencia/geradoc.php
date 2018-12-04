<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Anuência - Impressão - Link Contábil</title>
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

        p {text-align: justify;font-size: 16px;}

        small{font-size: 16px!important;padding-top: 2px;}

        .data{margin-top: -45px;}

        .documento h3{margin-top: -25px;font-size: 22px!important;letter-spacing: 1px;}

        .container{padding-left: 6%;padding-right: 6%;}

        .btn-print{ 
            width:150px; 
            height:34px; 
            background:url('assets/img/btn-print.png') no-repeat; 
            border:none;
            margin-top:20px;
        }

        .btn-print:hover{ cursor:pointer; }

        .debitos .p-left{text-align: left!important; display: inline-block;}
        .debitos .p-center{text-align: center!important; display: inline-block;}
        .debitos .p-right{text-align: right!important;display: inline-block;}

        .assinatura{ 
            margin-top: 45px; 
            margin-bottom: 50px;
        }

        .assinatura p{text-align: center!important;}

        .sublinhado{
            width: 300px;
            margin-top: 80px;
            margin-right: auto;
            margin-left: auto;
            border-bottom: 1px solid #000;  
        }

        .ass-funcionario{position: relative;float: left;}
        .ass-funcionario p{ text-align: center; }

        
        .ass-empresa p{ text-align: center; }

        .ass-responsavel{margin-top: 80px; margin-bottom: 30px;}

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
        <h4 class="data" align="right"><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></h4><br /><br />
    </header>

    <section class="container documento">

        <h3 align="center"><strong>CARTA DE ANUÊNCIA</strong></h3>
        <h5 align="center"><small>Liberação de Protesto</small></h5><br />

        <p>Ao <?php $nome_cartorio = $_POST['nome_cartorio']; echo "$nome_cartorio" ?> - Cartório de Protesto de Títulos, localizado a <?php $end_cartorio = $_POST['end_cartorio']; echo "$end_cartorio" ?>.</p><br />

        <p><?php $nome_titular = $_POST['nome_titular']; echo "$nome_titular" ?>, declara para os devidos fins que o(a) Sr(a). <?php $cliente_protestado = $_POST['cliente_protestado']; echo "$cliente_protestado" ?>, de CPF Nº <?php $cpf = $_POST['cpf']; echo "$cpf" ?>, efetuou os devidos pagamentos referentes aos títulos discriminados abaixo, levados a protesto por este Cartório.</p><br />

        <div class="debitos">
            <div class="row">
                <p class="p-left col-sm-4 col-md-4"><strong><?php $duplicata_1 = $_POST['duplicata_1']; echo "$duplicata_1" ?></strong></p>
                <p class="p-center col-sm-4 col-md-4"><strong><?php $vencimento_1 = $_POST['vencimento_1']; echo "$vencimento_1" ?></strong></p>
                <p class="p-right col-sm-4 col-md-4"><strong>R$ <?php $valor_1 = $_POST['valor_1']; echo "$valor_1" ?></strong></p>
            </div>
            
            <div class="row">
                <p class="p-left col-sm-4 col-md-4"><strong><?php $duplicata_2 = $_POST['duplicata_2']; echo "$duplicata_2" ?></strong></p>
                <p class="p-center col-sm-4 col-md-4"><strong><?php $vencimento_2 = $_POST['vencimento_2']; echo "$vencimento_2" ?></strong></p>
                <p class="p-right col-sm-4 col-md-4"><strong>R$ <?php $valor_2 = $_POST['valor_2']; echo "$valor_2" ?></strong></p>
            </div>

            <div class="row">
                <p class="p-left col-sm-4 col-md-4"><strong><?php $duplicata_3 = $_POST['duplicata_3']; echo "$duplicata_3" ?></strong></p>
                <p class="p-center col-sm-4 col-md-4"><strong><?php $vencimento_3 = $_POST['vencimento_3']; echo "$vencimento_3" ?></strong></p>
                <p class="p-right col-sm-4 col-md-4"><strong>R$ <?php $valor_3 = $_POST['valor_3']; echo "$valor_3" ?></strong></p>
            </div>
        
            <div class="row">
                <p class="p-left col-sm-4 col-md-4"><strong><?php $duplicata_5 = $_POST['duplicata_5']; echo "$duplicata_5" ?></strong></p>
                <p class="p-center col-sm-4 col-md-4"><strong><?php $vencimento_5 = $_POST['vencimento_5']; echo "$vencimento_5" ?></strong></p>
                <p class="p-right col-sm-4 col-md-4"><strong>R$ <?php $valor_5 = $_POST['valor_5']; echo "$valor_5" ?></strong></p>
            </div>
        </div>
        
    </section>

    <section class="container assinatura">

        <p>Não havendo mais nenhum débito para com nossa empresa, solicitamos baixa dos referidos apontamentos.</p><br />

        <p>Nestes termos, pede deferimento.</p>

        <div class="ass-empresa">
            <p class="sublinhado"></p>
            <p><?php $nome_titular = $_POST['nome_titular']; echo "$nome_titular" ?><br /><?php $id_empresa = $_POST['id_empresa']; echo "$id_empresa" ?> Nº <?php $numero_id = $_POST['numero_id']; echo "$numero_id" ?></p>
        </div>
        
    </section>

</body>
</html>
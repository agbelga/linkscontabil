<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Advertência - Impressão - Link Contábil</title>
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

        small{font-size: 13px!important;padding-top: 2px;}

        .container{padding-left: 6%;padding-right: 6%;}

        .btn-print{ 
            width:150px; 
            height:34px; 
            background:url('assets/img/btn-print.png') no-repeat; 
            border:none;
            margin-top:20px;
        }

        .btn-print:hover{ cursor:pointer; }

        .assinaturas{ 
            text-transform: uppercase;
            margin-top: 100px; 
            margin-bottom: 50px;
        }

        .sublinhado{
            width: 280px;
            text-align: center!important;
            border-bottom: 1px solid #000;  
        }

        .ass-funcionario{position: relative;float: left;}
        .ass-funcionario p{ text-align: center; }

        .ass-empresa{position: relative;float: right;}
        .ass-empresa p{ text-align: center; }

        .ass-responsavel{margin-top: 120px; margin-bottom: 30px;}

        .sublinhado-final{
            margin-right: auto;
            margin-left: auto;
            width: 400px;
            border-bottom: 1px solid #000;  
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
        <button class="btn-print" type="button" name="imprimir" value="" OnClick="javascript:DoPrinting();"></button>
        <h4 class="data" align="right"><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></h4><br />
    </header>

    <section class="container documento">

        <h3 align="center"><strong>ADVERTÊNCIA</strong></h3><br />

        <p>Prezado(a) Sr.(a): <?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></p><br />

        <p>Através desta, fica o(a) Sr.(a), funcionário desta empresa, advertido(a), de acordo com a C.L.T. (Consolidação das Leis do Trabalho), pelo seguinte motivo:</p>

        <p><?php $fatos = $_POST['fatos']; echo "$fatos" ?></p>

        <p>Lembramos o(a) senhor(a) que esta prática pode constituir em rescisão de contrato de trabalho por justa causa, conforme a C.L.T..</p>
        <p>Não há vontade, por parte de nossa empresa, chegarmos a este final, e estamos dando-lhe oportunidade para que seu ato não se repita.</p>
        <p>Solicitamos a não reincidência do fato, para que não sejam tomadas as medidas contidas na C.L.T..</p>
        <p>Sem mais, e em cumprimento da Lei, solicitamos que firme o recebimento desta.</p>
        
    </section>

    <section class="container assinaturas">

        <div class="ass-funcionario">
            <p class="sublinhado"></p>
            <p><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></p>
        </div>

        <div class="ass-empresa">
            <p class="sublinhado"></p>
            <p><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?></p>
        </div>
        
        <br /><br /><h6 align="center">TESTEMUNHAS:</h6><br /><br />

        <div class="ass-funcionario">
            <p class="sublinhado"></p>
            <p><?php $testemunha_um = $_POST['testemunha_um']; echo "$testemunha_um" ?></p>
        </div>

        <div class="ass-empresa">
            <p class="sublinhado"></p>
            <p><?php $testemunha_dois = $_POST['testemunha_dois']; echo "$testemunha_dois" ?></p>
        </div>
        
        <div class="ass-responsavel">
            <h6 class="sublinhado-final" align="center"></h6>
            <h6 align="center">Responável quando menor</h6>
        </div>
    </section>

</body>
</html>
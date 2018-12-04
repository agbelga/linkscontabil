<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contrato de Experiência - Impressão - Link Contábil</title>
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

        .assinaturas{ 
            text-transform: uppercase;
            margin-top: 45px; 
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

        .ass-responsavel{margin-top: 80px; margin-bottom: 30px;}

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
        <h4 class="data" align="right"><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></h4><br /><br />
    </header>

    <section class="container documento">

        <h3 align="center"><strong>CONTRATO DE TRABALHO</strong></h3>
        <h5 align="center"><small>A TÍTULO DE EXPERIÊNCIA</small></h5><br />

        <p>Pelo presente instrumento e na melhor forma de direito, as partes:</p>

        <p><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?>, titular do <?php $id_empresa = $_POST['id_empresa']; echo "$id_empresa" ?> <?php $numero_id = $_POST['numero_id']; echo "$numero_id" ?>, sediada à <?php $end_empresa = $_POST['end_empresa']; echo "$end_empresa" ?>. <?php $bairro_empresa = $_POST['bairro_empresa']; echo "$bairro_empresa" ?>. <?php $cidade_empresa = $_POST['cidade_empresa']; echo "$cidade_empresa" ?> | <?php $uf_empresa = $_POST['uf_empresa']; echo "$uf_empresa" ?>. Pelo presente contrato passa a ser denominado(a) EMPREGADOR;</p>

        <p><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?>, <?php $nacionalidade = $_POST['nacionalidade']; echo "$nacionalidade" ?>, <?php $estado_civil = $_POST['estado_civil']; echo "$estado_civil" ?>, titular do CPF N° <?php $cpf_funcionario = $_POST['cpf_funcionario']; echo "$cpf_funcionario" ?>, RG N° <?php $rg_funcionario = $_POST['rg_funcionario']; echo "$rg_funcionario" ?>, CTPS N° <?php $ctps_funcionario = $_POST['ctps_funcionario']; echo "$ctps_funcionario" ?> doravante denominado(a) EMPREGADO(A);</p>

        <p><strong>CLÁUSULA I</strong></p>
        <p>O EMPREGADO acima designado, obriga-se a prestar seus serviços no quadro de funcionários do EMPREGADOR para exercer as funções de <?php $funcao = $_POST['funcao']; echo "$funcao" ?>, mediante a remuneração de R$ <?php $remuneracao = $_POST['remuneracao']; echo "$remuneracao" ?> , a ser paga mensalmente ao empregado, até o 5º (quinto) dia útil do mês.</p>

        <p><strong>CLÁUSULA II</strong></p>
        <p>A prestação do serviço se dará de <?php $inicio_semana = $_POST['inicio_semana']; echo "$inicio_semana" ?> a <?php $fim_semana = $_POST['fim_semana']; echo "$fim_semana" ?>, no horário de <?php $horario_entrada = $_POST['horario_entrada']; echo "$horario_entrada" ?>hs às <?php $horario_saida = $_POST['horario_saida']; echo "$horario_saida" ?>hs, assegurado o direito a <?php $horario_intervalo = $_POST['horario_intervalo']; echo "$horario_intervalo" ?> de intervalo para a realização de suas refeições.</p>

        <p><strong>CLÁUSULA III</strong></p>
        <p>O EMPREGADO, declara estar recebendo no ato da assinatura deste contrato, o Regulamento Interno da Empresa cujas cláusulas fazem parte do Contrato de Trabalho e que a violação de qualquer delas implicará em sanção, cuja graduação dependerá da gravidade da mesma, podendo culminar na rescisão do Contrato de Trabalho.</p>

        <p><strong>CLÁUSULA IV</strong></p>
        <p>O presente Contrato, terá a vigência de <?php $duracao = $_POST['duracao']; echo "$duracao" ?> dias, sendo celebrado para as partes verificarem reciprocamente, a conveniência ou não de se vincularem em caráter definitivo a um Contrato de Trabalho.</p>

        <p>Fica ressalvada a possibilidade de prorrogação deste Contrato de Experiência, por uma vez, em igual período, respeitado o prazo máximo de 90 dias.</p>

        <p>Por estarem de pleno acordo, as partes, assinam o presente Contrato de Experiência em duas vias, ficando a primeira em poder do EMPREGADOR, e a segunda com o EMPREGADO.</p>
        
    </section>

    <section class="container assinaturas">

        <div class="data">
            <p><?php $cidade = $_POST['cidade']; echo "$cidade" ?>, <?php $data = $_POST['data']; echo "$data" ?> - <?php $estado = $_POST['estado']; echo "$estado" ?></p>
        </div>

        <div class="ass-empresa">
            <p class="sublinhado"></p>
            <p><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?></p>
        </div>

        <div class="ass-funcionario">
            <p class="sublinhado"></p>
            <p><?php $nome_funcionario = $_POST['nome_funcionario']; echo "$nome_funcionario" ?></p>
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
            <h6 align="center">Responável quando menor.</h6>
        </div>
    </section>

</body>
</html>
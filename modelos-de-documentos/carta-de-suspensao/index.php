<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Suspensão - Documentos Importantes - Link Contábil</title>
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
    
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/mascara.js" type="text/javascript"></script>
</head>

<body>

    <section class="container">

        <div class="logo col-md-2">
            <a href=""><img src="assets/img/logotipo.png" alt="Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Carta de Suspensão para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
            <strong style="color:#005cff;">Documento Personalizado</strong>.</small>
        </div><!-- /content-lead -->

        <div class="col-md-12 formulario">
            
            <form action="geradoc.php" method="POST" enctype="multipart/form-data" name="geradoc" autocomplete="off">
                <!-- Campos LEAD -->
                <ul class="campos-lead">
                    <li class="nome-lead">
                        <i style="padding: 8px 10px;" class="fa fa-user"></i>
                        <input class="form-control input-redond" name="nome-lead" type="text" id="nome-lead" placeholder="Qual o seu nome?" required="required" />
                    </li>
                    <li class="email-lead">
                        <i style="padding: 7px;" class="fa fa-envelope"></i>
                        <input class="form-control input-redond" name="email-lead" type="email" id="email-lead" placeholder="Qual o seu e-mail?" required="required" />
                    </li>
                    <li class="cargo-lead">
                        <i style="padding: 8px;" class="fa fa-briefcase"></i>
                        <input class="form-control input-redond" name="cargo-lead" type="text" id="cargo-lead" placeholder="Qual o seu cargo?" required="required" />
                    </li>
                </ul>
                <!-- /Campos LEAD -->

                <h3 align="center">CARTA DE SUSPENSÃO</h3>
                <span class="sublinhado"></span>

                <div class="col-md-3">
                    <label for="data">Data da Suspensão:</label><br />
                    <input class="form-control" name="data" required="required" type="text" id="data" />
                </div>

                <div class="col-md-3">
                    <label for="numero_dias">Número de dias suspensos:</label>
                    <input class="form-control" name="numero_dias" required="required" type="number" min="1" max="30" id="nome_empresa" />
                </div>


                <div class="col-md-6">
                    <label for="cidade">Cidade:</label><br />
                    <input class="form-control" name="cidade" required="required" type="text" id="cidade" />
                </div>

                <div class="col-md-6">
                    <label for="nome_funcionario">Nome do(a) Funcionário(a):</label>
                    <input class="form-control" name="nome_funcionario" required="required" type="text" id="nome_funcionario" />
                </div>

                <div class="col-md-6">
                    <label for="nome_empresa">Nome da Empresa:</label>
                    <input class="form-control" name="nome_empresa" required="required" type="text" id="nome_empresa" />
                </div>

                <div class="col-md-6">
                    <label for="testemunha_um">Testemunha Um:</label>
                    <input class="form-control" name="testemunha_um" required="required" type="text" id="testemunha_um" />
                </div>

                <div class="col-md-6">
                    <label for="testemunha_dois">Testemunha Dois:</label>
                    <input class="form-control" name="testemunha_dois" required="required" type="text" id="testemunha_dois" />
                </div>

                <div class="col-md-12">
                    <label for="fatos">Descreva os fatos que levaram o(a) funcionário(a) a ser suspenso(a):</label><br />
                    <textarea class="form-control" name="fatos" required="required" cols="45" rows="5" id="fatos"></textarea>
                </div>

                <div class="col-md-12 botoes">
                    <button name="enviar" type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-primary btn-gerar pull-right">GERAR DOCUMENTO <i class="fa fa-copy"></i></button>
                    <button name="enviar" type="reset" onclick="this.form.target='_blank';return true;" class="btn btn-primary pull-right btn-limpar">LIMPAR FORMULÁRIO <i class="fa fa-close"></i></button>
                </div>
                
            </form>
            
        </div><!-- /formulario -->
        
    </section>

    

    <script type="text/javascript" src="assets/js/main.js"></script>
    
    <?php include '../../footer.php'; ?>
    

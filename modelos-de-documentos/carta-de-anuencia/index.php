<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Anuência - Documentos Importantes - Link Contábil</title>
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/mascRem.js" type="text/javascript"></script>
    <script src="assets/js/mascara.js" type="text/javascript"></script>
</head>

<body>

    <section class="container">

        <div class="logo col-md-2">
            <a href="http://www.linkscontabil.com.br/desenvolvimento/"><img src="assets/img/logotipo.png" alt="Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Carta de Anuência para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
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

                <h3 align="center">CARTA DE ANUÊNCIA</h3>
                <span class="sublinhado"></span>

                <div class="col-md-6">
                    <label for="data">Data:</label><br />
                    <input class="form-control" name="data" type="text" id="data" required="required" />
                </div>

                <div class="col-md-3 estados">
                    <label for="estados">Estado:</label>
                    <select class="form-control" name="estado" id="estados" required="required"></select>
                </div> 

                <div class="col-md-3 cidades">
                    <label for="cidades">Cidade:</label>
                    <select class="form-control" name="cidade" id="cidades" required="required">
                        <option value="none">Selecione a cidade</option>
                    </select>
                </div> 

                <div class="col-md-6">
                    <label for="nome_cartorio">Nome do Cartório Protestante:</label>
                    <input class="form-control" name="nome_cartorio" type="text" id="nome_cartorio" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="end_cartorio">Endereço do Cartório Protestante:</label>
                    <input class="form-control" name="end_cartorio" type="text" id="end_cartorio" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_titular">Nome do(a) Titular | Empresa:</label>
                    <input class="form-control" name="nome_titular" type="text" id="nome_titular" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="id_empresa">Identificação do(a) Titular | Empresa:</label><br />
                    <select id="options" onchange="optionCheck()" class="form-control select-empresa col-md-2" name="id_empresa" size="1" required="required">
                        <option value="CNPJ">CNPJ</option>
                        <option value="CEI">CEI</option>
                        <option value="CPF">CPF</option>
                    </select>
                    <input name="numero_id" type="text" class="input-id-empresa form-control col-md-10 pull-right" id="numero_id" placeholder="00.000.000/0000-0" required="required" />                
                </div>

                <div class="col-md-6">
                    <label for="cliente_protestado">Nome do(a) Cliente Protestado(a):</label>
                    <input class="form-control" name="cliente_protestado" type="text" id="cliente_protestado" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="cpf">CPF do(a) Cliente(a) Protestado(a):</label>
                    <input class="form-control" name="cpf"  type="text" id="cpf" placeholder="000.000.000-00" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="duplicata_1">Duplicata:</label>
                    <input class="form-control" name="duplicata_1"  type="text" id="duplicata_1" required="required" />
                    <input class="form-control" name="duplicata_2"  type="text" id="duplicata_2" />
                    <input class="form-control" name="duplicata_3"  type="text" id="duplicata_3" />
                    <input class="form-control" name="duplicata_4"  type="text" id="duplicata_4" />
                    <input class="form-control" name="duplicata_5"  type="text" id="duplicata_5" />
                </div>

                <div class="col-md-3">
                    <label for="vencimento_1">Vencimento:</label>
                    <input class="form-control" name="vencimento_1"  type="text" id="vencimento_1" required="required" />
                    <input class="form-control" name="vencimento_2"  type="text" id="vencimento_2" />
                    <input class="form-control" name="vencimento_3"  type="text" id="vencimento_3" />
                    <input class="form-control" name="vencimento_4"  type="text" id="vencimento_4" />
                    <input class="form-control" name="vencimento_5"  type="text" id="vencimento_5" />
                </div>

                <div class="col-md-3">
                    <label for="valor_1">Valor:</label>
                    <input class="form-control" name="valor_1"  type="text" id="valor_1" placeholder="R$" required="required" />
                    <input class="form-control" name="valor_2"  type="text" id="valor_2" placeholder="R$" />
                    <input class="form-control" name="valor_3"  type="text" id="valor_3" placeholder="R$" />
                    <input class="form-control" name="valor_4"  type="text" id="valor_4" placeholder="R$" />
                    <input class="form-control" name="valor_5"  type="text" id="valor_5" placeholder="R$" />
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
    

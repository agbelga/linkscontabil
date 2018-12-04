<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Homologação - Documentos Importantes - Link Contábil</title>
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

</script>

<body>

    <section class="container">

        <div class="logo col-md-2">
            <a href="http://www.linkscontabil.com.br/desenvolvimento/"><img src="assets/img/logotipo.png" alt="Logotipo Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Carta de Homologação de Funcionário para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
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

                <h3 align="center">CARTA DE HOMOLOGAÇÃO DE FUNCIONÁRIO</h3>
                <span class="sublinhado"></span>

                <div class="col-md-6">
                    <label for="data">Data da Declaração:</label>
                    <input class="form-control" name="data" required="required" type="text" id="data" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_funcionario">Nome do(a) funcionário(a):</label>
                    <input class="form-control" name="nome_funcionario" type="text" id="nome_funcionario" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="ctps">CTPS do(a) funcionário(a):</label>
                    <input class="form-control" name="ctps" type="text" id="ctps" required="required" />
                </div>

                <div class="col-md-4">
                    <label for="serie">Série:</label>
                    <input class="form-control" name="serie" type="text" id="serie" required="required" />
                </div>

                <div class="col-md-2">
                    <label for="uf">UF:</label>
                    <select class="form-control" name="uf" id="uf" required="required">
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>

                <div class="col-md-3 data-adm">
                    <label for="data_admissao">Data da Admissão:</label><br />
                    <input class="form-control" name="data_admissao"  type="text" id="data_admissao" required="required" />
                </div>

                <div class="col-md-3">
                    <label for="data_desligamento">Data do Desligamento:</label><br />
                    <input class="form-control" name="data_desligamento"  type="text" id="data_desligamento" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="ultimo_cargo">Último cargo Exercido:</label><br />
                    <input class="form-control" name="ultimo_cargo"  type="text" id="ultimo_cargo" required="required" />
                </div>

                 <div class="col-md-4">
                    <label for="remuneracao">Remuneração:</label><br /> 
                    <input name="remuneracao" type="text" class="form-control" id="remuneracao" required="required" />         
                </div>

                <div class="col-md-2">
                    <label></label>
                    <select style="margin-top: 5px;" id="options" onchange="optionCheck()" class="form-control" name="id_remuneracao" size="1" required="required">
                        <option value="por mês">Por mês</option>
                        <option value="por hora">Por hora</option>
                        <option value="comissão">Comissão</option>
                    </select>      
                </div>

                <div class="col-md-6">
                    <label for="nome_empresa">Empresa:</label>
                    <input class="form-control" name="nome_empresa" type="text" id="nome_empresa" required="required" />
                </div>

                <div class="col-md-2">
                    <label for="id_empresa">Id. da Empresa:</label><br /> 
                    <select id="options" onchange="optionCheck()" class="form-control" name="id_empresa" size="1" required="required">
                        <option value="CNPJ">CNPJ</option>
                        <option value="CPF">CPF</option>
                        <option value="CPF">CEF</option>
                    </select>                
                </div>

                <div class="col-md-4">
                    <label></label>
                    <input style="margin-top: 5px;" name="numero_id" type="text" class="form-control" id="numero_id" placeholder="00.000.000/0000-0" required="required" />
                </div>

                <div class="col-md-4">
                    <label for="end_empresa">Endereço da Empresa:</label>
                    <input class="form-control" name="end_empresa" type="text" id="end_empresa" required="required" />
                </div>

                <div class="col-md-2">
                    <label for="bairro_empresa">Bairro:</label>
                    <input class="form-control" name="bairro_empresa" type="text" id="bairro_empresa" required="required" />
                </div>

                <div class="col-md-3 estados">
                    <label for="estados">Estado:</label>
                    <select class="meu-form form-control" name="estado" id="estados" required="required"></select>
                </div> 

                <div class="col-md-3 cidades">
                    <label for="cidades">Cidade:</label>
                    <select class="meu-form form-control" name="cidade" id="cidades" required="required">
                        <option value="none">Selecione a cidade</option>
                    </select>
                </div>   

                <div class="col-md-3">
                    <label for="nome_declarante">Nome do(a) declarante:</label>
                    <input class="form-control" name="nome_declarante" type="text" id="nome_declarante" required="required" />
                </div>

                <div class="col-md-3">
                    <label for="cargo_declarante">Cargo do(a) declarante:</label>
                    <input class="form-control" name="cargo_declarante" type="text" id="cargo_declarante" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_representante">Representante da Empresa:</label>
                    <input class="form-control" name="nome_representante" type="text" id="nome_representante" required="required" />
                </div>

                <div class="col-md-3">
                    <label for="rg_representante">RG do Representante:</label>
                    <input class="form-control" name="rg_representante" type="text" id="rg_representante" placeholder="00.000.000-0" required="required" />
                </div>

                <div class="col-md-3">
                    <label for="cpf_representante">CPF do Representante:</label>
                    <input class="form-control" name="cpf_representante" type="text" id="cpf_representante" placeholder="000.000.000-00" required="required" />
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
    

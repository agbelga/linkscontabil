<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Correção de Notas Fiscais - Documentos Importantes - Link Contábil</title>
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
    <script type="text/javascript" src="assets/js/mascara.js"></script>
</head>

<body>
    
    <section class="container">

        <div class="logo col-md-2">
            <a href="http://www.linkscontabil.com.br/desenvolvimento/"><img src="assets/img/logotipo.png" alt="Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Carta de Correção de Notas Fiscais para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
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

                <h3 align="center">CARTA DE CORREÇÃO DE NOTAS FISCAIS</h3>
                <span class="sublinhado"></span>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                <h4 align="center">Dados do Destinatário:</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-md-3 estados">
                                    <label for="estados">Estado:</label>
                                    <select class="form-control" name="estados" id="estados"></select>
                                </div> 

                                <div class="col-md-3 cidades">
                                    <label for="cidades">Cidade:</label>
                                    <select class="form-control" name="cidades" id="cidades">
                                        <option value="none">Selecione a cidade</option>
                                    </select>
                                </div> 

                                <div class="col-md-6">
                                    <label for="nome_destinatario">Nome:</label>
                                    <input class="form-control" name="nome_destinatario"  type="text" id="nome_destinatario" required="required" />
                                </div>

                                <div class="col-md-6">
                                    <label for="end_destinatario">Endereço:</label>
                                    <input class="form-control" name="end_destinatario"  type="text" id="end_destinatario" required="required" />
                                </div>

                                <div class="col-md-3">
                                    <label for="bairro_destinatario">Bairro:</label>
                                    <input class="form-control" name="bairro_destinatario"  type="text" id="bairro_destinatario" required="required" />
                                </div>

                                <div class="col-md-3">
                                    <label for="cep">CEP:</label>
                                    <input class="form-control" name="cep_destinatario"  type="text" id="cep" placeholder="00000-000" required="required" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                <h4 align="center">Dados referentes a Nota Fiscal com irregularidade(s):</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-md-2">
                                    <label></label>
                                    <select style="margin-top: 5px;" class="form-control" name="nota_fiscal" id="nota_fiscal" required="required">
                                        <option value="nossa">NOSSA</option>
                                        <option value="sua">SUA</option>
                                    </select>
                                </div> 

                                <div class="col-md-4">
                                    <label for="num_nota"><strong>Nº</strong> da Nota Fiscal:</label>
                                    <input class="form-control" type="text" name="num_nota" id="num_nota" required="required" />
                                </div>

                                <div class="col-md-3">
                                    <label for="serie">Série:</label>
                                    <input class="form-control" type="text" name="serie" id="serie" required="required" />
                                </div>

                                <div class="col-md-3">
                                    <label for="dia_nota">Do dia:</label>
                                    <input class="form-control" type="text" name="dia_nota" id="dia_nota" required="required" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                <h4 align="center">Selecione a(s) irregularidade(s):</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-md-4">
                                    <h4 align="center">
                                        <label for="irregularidades">Irregularidades:</label>
                                    </h4>
                                    <select class="form-control" name="irregularidades_1"  id="irregularidades" size="1" required="required">
                                        <option selected value="">Deixar em Branco</option>
                                        <option value="01">Razão Social</option>
                                        <option value="02">Endereço</option>
                                        <option value="03">Município</option>
                                        <option value="04">Estado</option>
                                        <option value="05">Nº. do CNPJ</option>
                                        <option value="06">Nº. da Inscrição Estadual</option>
                                        <option value="07">Natureza da Operação</option>
                                        <option value="08">CFOP - Código Fiscal da Operação</option>
                                        <option value="09">Via de transporte</option>
                                        <option value="10">Data de Emissão</option>
                                        <option value="11">Data da Saída</option>
                                        <option value="12">Unidade do Produto</option>
                                        <option value="13">Quantidade do Produto</option>
                                        <option value="14">Descrição dos Produtos</option>
                                        <option value="15">Preço Unitário do Produto</option>
                                        <option value="16">Valor do Produto</option>
                                        <option value="17">Classificação Fiscal do Produto</option>
                                        <option value="18">Alíquota do IPI</option>
                                        <option value="20">Base de Cálculo do IPI</option>
                                        <option value="21">Valor Total da Nota</option>
                                        <option value="22">Alíquota do ICMS</option>
                                        <option value="24">Base de Cálculo do ICMS</option>
                                        <option value="25">Nome do Transportador</option>
                                        <option value="26">Endereço do Transportador</option>
                                        <option value="27">Termo de Isenção do IPI</option>
                                        <option value="28">Termo de Isenção do ICMS</option>
                                        <option value="29">Peso Bruto/Líquido</option>
                                        <option value="30">Volumes-Marca/Num/Quant</option>
                                        <option value="31">Rasuras</option>
                                        <option value="32">Situação Tributária</option>
                                        <option value="33">Outros</option>
                                    </select>
                                    <select class="form-control" name="irregularidades_2"  id="irregularidades" size="1">
                                        <option selected value=" ">Deixar em Branco</option>
                                        <option value="01">Razão Social</option>
                                        <option value="02">Endereço</option>
                                        <option value="03">Município</option>
                                        <option value="04">Estado</option>
                                        <option value="05">Nº. do CNPJ</option>
                                        <option value="06">Nº. da Inscrição Estadual</option>
                                        <option value="07">Natureza da Operação</option>
                                        <option value="08">CFOP - Código Fiscal da Operação</option>
                                        <option value="09">Via de transporte</option>
                                        <option value="10">Data de Emissão</option>
                                        <option value="11">Data da Saída</option>
                                        <option value="12">Unidade do Produto</option>
                                        <option value="13">Quantidade do Produto</option>
                                        <option value="14">Descrição dos Produtos</option>
                                        <option value="15">Preço Unitário do Produto</option>
                                        <option value="16">Valor do Produto</option>
                                        <option value="17">Classificação Fiscal do Produto</option>
                                        <option value="18">Alíquota do IPI</option>
                                        <option value="20">Base de Cálculo do IPI</option>
                                        <option value="21">Valor Total da Nota</option>
                                        <option value="22">Alíquota do ICMS</option>
                                        <option value="24">Base de Cálculo do ICMS</option>
                                        <option value="25">Nome do Transportador</option>
                                        <option value="26">Endereço do Transportador</option>
                                        <option value="27">Termo de Isenção do IPI</option>
                                        <option value="28">Termo de Isenção do ICMS</option>
                                        <option value="29">Peso Bruto/Líquido</option>
                                        <option value="30">Volumes-Marca/Num/Quant</option>
                                        <option value="31">Rasuras</option>
                                        <option value="32">Situação Tributária</option>
                                        <option value="33">Outros</option>
                                    </select>
                                    <select class="form-control" name="irregularidades_3"  id="irregularidades" size="1">
                                        <option selected value=" ">Deixar em Branco</option>
                                        <option value="01">Razão Social</option>
                                        <option value="02">Endereço</option>
                                        <option value="03">Município</option>
                                        <option value="04">Estado</option>
                                        <option value="05">Nº. do CNPJ</option>
                                        <option value="06">Nº. da Inscrição Estadual</option>
                                        <option value="07">Natureza da Operação</option>
                                        <option value="08">CFOP - Código Fiscal da Operação</option>
                                        <option value="09">Via de transporte</option>
                                        <option value="10">Data de Emissão</option>
                                        <option value="11">Data da Saída</option>
                                        <option value="12">Unidade do Produto</option>
                                        <option value="13">Quantidade do Produto</option>
                                        <option value="14">Descrição dos Produtos</option>
                                        <option value="15">Preço Unitário do Produto</option>
                                        <option value="16">Valor do Produto</option>
                                        <option value="17">Classificação Fiscal do Produto</option>
                                        <option value="18">Alíquota do IPI</option>
                                        <option value="20">Base de Cálculo do IPI</option>
                                        <option value="21">Valor Total da Nota</option>
                                        <option value="22">Alíquota do ICMS</option>
                                        <option value="24">Base de Cálculo do ICMS</option>
                                        <option value="25">Nome do Transportador</option>
                                        <option value="26">Endereço do Transportador</option>
                                        <option value="27">Termo de Isenção do IPI</option>
                                        <option value="28">Termo de Isenção do ICMS</option>
                                        <option value="29">Peso Bruto/Líquido</option>
                                        <option value="30">Volumes-Marca/Num/Quant</option>
                                        <option value="31">Rasuras</option>
                                        <option value="32">Situação Tributária</option>
                                        <option value="33">Outros</option>
                                    </select>
                                    <select class="form-control" name="irregularidades_4"  id="irregularidades" size="1">
                                        <option selected value=" ">Deixar em Branco</option>
                                        <option value="01">Razão Social</option>
                                        <option value="02">Endereço</option>
                                        <option value="03">Município</option>
                                        <option value="04">Estado</option>
                                        <option value="05">Nº. do CNPJ</option>
                                        <option value="06">Nº. da Inscrição Estadual</option>
                                        <option value="07">Natureza da Operação</option>
                                        <option value="08">CFOP - Código Fiscal da Operação</option>
                                        <option value="09">Via de transporte</option>
                                        <option value="10">Data de Emissão</option>
                                        <option value="11">Data da Saída</option>
                                        <option value="12">Unidade do Produto</option>
                                        <option value="13">Quantidade do Produto</option>
                                        <option value="14">Descrição dos Produtos</option>
                                        <option value="15">Preço Unitário do Produto</option>
                                        <option value="16">Valor do Produto</option>
                                        <option value="17">Classificação Fiscal do Produto</option>
                                        <option value="18">Alíquota do IPI</option>
                                        <option value="20">Base de Cálculo do IPI</option>
                                        <option value="21">Valor Total da Nota</option>
                                        <option value="22">Alíquota do ICMS</option>
                                        <option value="24">Base de Cálculo do ICMS</option>
                                        <option value="25">Nome do Transportador</option>
                                        <option value="26">Endereço do Transportador</option>
                                        <option value="27">Termo de Isenção do IPI</option>
                                        <option value="28">Termo de Isenção do ICMS</option>
                                        <option value="29">Peso Bruto/Líquido</option>
                                        <option value="30">Volumes-Marca/Num/Quant</option>
                                        <option value="31">Rasuras</option>
                                        <option value="32">Situação Tributária</option>
                                        <option value="33">Outros</option>
                                    </select>
                                    <select class="form-control" name="irregularidades_5"  id="irregularidades" size="1">
                                        <option selected value=" ">Deixar em Branco</option>
                                        <option value="01">Razão Social</option>
                                        <option value="02">Endereço</option>
                                        <option value="03">Município</option>
                                        <option value="04">Estado</option>
                                        <option value="05">Nº. do CNPJ</option>
                                        <option value="06">Nº. da Inscrição Estadual</option>
                                        <option value="07">Natureza da Operação</option>
                                        <option value="08">CFOP - Código Fiscal da Operação</option>
                                        <option value="09">Via de transporte</option>
                                        <option value="10">Data de Emissão</option>
                                        <option value="11">Data da Saída</option>
                                        <option value="12">Unidade do Produto</option>
                                        <option value="13">Quantidade do Produto</option>
                                        <option value="14">Descrição dos Produtos</option>
                                        <option value="15">Preço Unitário do Produto</option>
                                        <option value="16">Valor do Produto</option>
                                        <option value="17">Classificação Fiscal do Produto</option>
                                        <option value="18">Alíquota do IPI</option>
                                        <option value="20">Base de Cálculo do IPI</option>
                                        <option value="21">Valor Total da Nota</option>
                                        <option value="22">Alíquota do ICMS</option>
                                        <option value="24">Base de Cálculo do ICMS</option>
                                        <option value="25">Nome do Transportador</option>
                                        <option value="26">Endereço do Transportador</option>
                                        <option value="27">Termo de Isenção do IPI</option>
                                        <option value="28">Termo de Isenção do ICMS</option>
                                        <option value="29">Peso Bruto/Líquido</option>
                                        <option value="30">Volumes-Marca/Num/Quant</option>
                                        <option value="31">Rasuras</option>
                                        <option value="32">Situação Tributária</option>
                                        <option value="33">Outros</option>
                                    </select>
                                </div>

                                <div class="col-md-8">
                                    <h4 align="center">
                                        <label for="retifi">Retificações a serem consideradas:</label>
                                    </h4>
                                    <input class="form-control" type="text" name="retifi_1" id="retifi" required="required" />
                                    <input class="form-control" type="text" name="retifi_2" id="retifi" />
                                    <input class="form-control" type="text" name="retifi_3" id="retifi" />
                                    <input class="form-control" type="text" name="retifi_4" id="retifi" />
                                    <input class="form-control" type="text" name="retifi_5" id="retifi" />
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                <h4 align="center">Dados da sua Empresa:</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    <label for="nome_empresa">Nome:</label>
                                    <input class="form-control" name="nome_empresa"  type="text" id="nome_empresa" required="required" />
                                </div>

                                <div class="col-md-6">
                                    <label for="end_empresa">Endereço:</label>
                                    <input class="form-control" name="end_empresa"  type="text" id="end_empresa" required="required" />
                                </div>

                                <div class="col-md-3">
                                    <label for="bairro_empresa">Bairro:</label>
                                    <input class="form-control" name="bairro_empresa"  type="text" id="bairro_empresa" required="required" />
                                </div>

                                <div class="col-md-3 cep_e">
                                    <label for="cep_e">CEP:</label>
                                    <input type="text" class="form-control" name="cep_e" id="cep_e" placeholder="00000-000" required="required" />
                                </div>

                                <div class="col-md-3 estadose">
                                    <label for="estadose">Estado:</label>
                                    <select class="form-control" name="estadose" id="estadose"></select>
                                </div> 

                                <div class="col-md-3 cidadese">
                                    <label for="cidadese">Cidade:</label>
                                    <select class="form-control" name="cidadese" id="cidadese">
                                        <option value="nonee">Selecione a cidade</option>
                                    </select>
                                </div> 

                                <div class="col-md-3">
                                    <label for="cnpj">CNPJ da Empresa:</label>
                                    <input name="cnpj" type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-0" />             
                                </div>

                                <div class="col-md-3">
                                    <label for="i_estadual">Inscrição Estadual:</label>
                                    <input name="i_estadual" type="text" class="form-control" id="i_estadual" placeholder="000.000.000.000" />             
                                </div>

                                <div class="col-md-6 pull-left">
                                    <label for="data_p">Data do Preenchimento:</label><br />
                                    <input class="form-control" name="data_p"  type="text" id="data_p" required="required" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12 botoes">
                    <button name="enviar" type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-primary btn-gerar pull-right">GERAR DOCUMENTO <i class="fa fa-copy"></i></button>
                    <button name="enviar" type="reset" onclick="this.form.target='_blank';return true;" class="btn btn-primary pull-right btn-limpar">LIMPAR FORMULÁRIO <i class="fa fa-close"></i></button>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
    <?php include '../../footer.php'; ?>
    

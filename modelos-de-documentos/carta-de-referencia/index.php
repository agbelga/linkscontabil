<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Carta de Referência - Documentos Importantes - Link Contábil</title>
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
            <a href=""><img src="assets/img/logotipo.png" alt="Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Carta de Referência para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
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

                <h3 align="center">CARTA DE REFERÊNCIA</h3>
                <span class="sublinhado"></span>

                <div class="col-md-6 pull-left">
                    <label for="data">Data da Declaração:</label><br />
                    <input class="form-control" name="data"  type="text" id="data" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_funcionario">Nome do(a) Funcionário(a):</label>
                    <input class="form-control" name="nome_funcionario"  type="text" id="nome_funcionario" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="rg_funcionario">RG do(a) Funcionário(a):</label>
                    <input class="form-control" name="rg_funcionario"  type="text" id="rg_funcionario" placeholder="00.000.000-00" required="required" />
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

                <div class="col-md-6 trabalho">
                    <label for="dias_semana">Escala de Trabalho:</label><br />
                    <label>De: </label>
                    <select name="dia_semana1" class="select meu-form" id="dias_semana" required="required">
                        <option value="segunda-feira">segunda-feira</option>
                        <option value="terca-feira">terça-feira</option>
                        <option value="quarta-feira">quarta-feira</option>
                        <option value="quinta-feira">quinta-feira</option>
                        <option value="sexta-feira">sexta-feira</option>
                        <option value="sabado">sábado</option>
                        <option value="domingo">domingo</option>
                    </select>
                
                    <label class="trabalho-right">a: </label>
                    <select name="dia_semana2" class="select meu-form" id="dias_semana" required="required">
                        <option value="segunda-feira">segunda-feira</option>
                        <option value="terça-feira">terça-feira</option>
                        <option value="quarta-feira">quarta-feira</option>
                        <option value="quinta-feira">quinta-feira</option>
                        <option value="sexta-feira">sexta-feira</option>
                        <option value="sabado">sábado</option>
                        <option value="domingo">domingo</option>
                    </select>
                </div>

                <div class="col-md-6 trabalho">
                    <label>Horário de Trabalho:</label><br />
                    <label>Das: </label>
                    <input class="meu-form" name="horario_entrada"  type="text" id="horario_entrada" placeholder="00:00" required="required" />
                        
                    <label class="trabalho-right">às: </label>
                    <input class="meu-form" name="horario_saida"  type="text" id="horario_saida" placeholder="00:00" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_empresa">Nome da Empresa:</label>
                    <input class="form-control" name="nome_empresa"  type="text" id="nome_empresa" required="required" />
                </div>

                <div class="col-md-6 input_logotipo">
                    <p>Logotipo da Empresa:</p>
                    <label for="logotipo"><i class="fa fa-download"></i> carregar arquivo</label>
                    <input type="file" name="logotipo" id="logotipo">
                    <img />
                </div>
            
                <div class="col-md-6 id_empresa">
                    <label for="id_empresa">Identificação da Empresa:</label>
                    <select id="options" onchange="optionCheck()" class="meu-form" name="id_empresa" size="1" required="required">
                        <option value="CNPJ">CNPJ</option>
                        <option value="CEI">CEI</option>
                        <option value="CPF">CPF</option>
                    </select>
                    <input name="numero_id" type="text" class="input-id-empresa meu-form" id="numero_id" placeholder="00.000.000/0000-0" required="required" />                
                </div>

                <div class="col-md-6">
                    <label for="end_empresa">Endereço da Empresa:</label>
                    <input class="form-control" name="end_empresa"  type="text" id="end_empresa" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="bairro_empresa">Bairro da Empresa:</label>
                    <input class="form-control" name="bairro_empresa"  type="text" id="bairro_empresa" required="required" />
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
                    <label for="cargo_declarante">Cargo do(a) Declarante:</label>
                    <input class="form-control" name="cargo_declarante"  type="text" id="cargo_declarante" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="nome_declarante">Nome do(a) Declarante:</label>
                    <input class="form-control" name="nome_declarante"  type="text" id="nome_declarante" required="required" />
                </div>

                <div class="col-md-12 botoes">
                    <button name="enviar" type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-primary btn-gerar pull-right">GERAR DOCUMENTO <i class="fa fa-copy"></i></button>
                    <button name="enviar" type="reset" onclick="this.form.target='_blank';return true;" class="btn btn-primary pull-right btn-limpar">LIMPAR FORMULÁRIO <i class="fa fa-close"></i></button>
                </div>  
            </form>
            
        </div><!-- /formulario -->
        
    </section>
    <script src="assets/js/main.js"></script>
    <?php include '../../footer.php'; ?>
    

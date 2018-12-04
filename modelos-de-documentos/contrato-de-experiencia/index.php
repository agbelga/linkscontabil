<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contrato de Experiência - Documentos Importantes - Link Contábil</title>
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
    <script src="assets/js/mascRem.js"></script>
    <script src="assets/js/mascara.js"></script>
</head>

</script>

<body>

    <section class="container">

        <div class="logo col-md-2">
            <a href="http://www.linkscontabil.com.br/desenvolvimento/"><img src="assets/img/logotipo.png" alt="Link Contábil" class="logotipo"></a>
        </div><!-- /logo -->

        <div class="description-doc col-md-10">
            <small>Desenvolvemos este modelo de Contrato de Experiência para facilitar o seu dia-a-dia e contribuir para o sucesso do seu trabalho.</small> <small>Basta preencher os campos abaixo e gerar seu 
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

                <h3 align="center">CONTRATO DE EXPERIÊNCIA</h3>
                <span class="sublinhado"></span>

                <div class="col-md-6">
                    <label for="data">Data da Comunicação:</label>
                    <input class="form-control" name="data" required="required" type="text" id="data" />
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

                <div class="col-md-6">
                    <label for="nome_funcionario">Nome do(a) Funcionário(a):</label>
                    <input class="form-control" name="nome_funcionario" required="required" type="text" id="nome_funcionario" />
                </div>

                <div class="col-md-3">
                    <label for="nacionalidade">Nacionalidade:</label>
                    <input class="form-control" name="nacionalidade" required="required" type="text" id="nacionalidade" />
                </div>

                <div class="col-md-3">
                    <label for="estado_civil">Estado Civil:</label>
                    <select class="meu-form form-control" name="estado_civil" id="estado_civil" required="required">
                        <option value="solteiro">solteiro</option>
                        <option value="casado">casado</option>
                        <option value="divorciado">divorciado</option>
                        <option value="viúvo">viúvo</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="rg_funcionario">RG do(a) Funcionário(a):</label>
                    <input class="form-control" name="rg_funcionario" required="required" type="text" id="rg_funcionario" />
                </div>

                <div class="col-md-6">
                    <label for="cpf_funcionario">CPF do(a) Funcionário(a):</label>
                    <input class="form-control" name="cpf_funcionario" required="required" type="text" id="cpf_funcionario" />
                </div>

                <div class="col-md-6">
                    <label for="ctps_funcionario">CTPS do(a) Funcionário(a):</label>
                    <input class="form-control" name="ctps_funcionario" required="required" type="text" id="ctps_funcionario" />
                </div>

                <div class="col-md-3">
                    <label for="funcao">Função:</label>
                    <input class="form-control" name="funcao" required="required" type="text" id="funcao" />
                </div>

                <div class="col-md-3">
                    <label for="salario">Salário:</label>
                    <input class="form-control" name="salario" required="required" type="text" id="salario" />
                </div>

                <div class="col-md-6 trabalho">
                    <label for="dias_semana">Escala de Trabalho:</label><br />
                    <label>De: </label>
                    <select name="inicio_semana" class="select meu-form" id="dias_semana" required="required">
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

                <div class="col-md-3 trabalho">
                    <label>Horário de Trabalho:</label><br />
                    <label>Das: </label>
                    <input class="meu-form" name="horario_entrada"  type="text" id="horario_entrada" placeholder="00:00" required="required" />
                        
                    <label class="trabalho-right">às: </label>
                    <input class="meu-form" name="horario_saida"  type="text" id="horario_saida" placeholder="00:00" required="required" />
                </div>

                <div class="col-md-3 trabalho">
                    <label>Horário de Intervalo:</label><br />
                    <label>Das: </label>
                    <input class="meu-form" name="horario_entrada_intervalo"  type="text" id="horario_entrada_intervalo" placeholder="00:00" required="required" />
                        
                    <label class="trabalho-right">às: </label>
                    <input class="meu-form" name="horario_saida_intervalo"  type="text" id="horario_saida_intervalo" placeholder="00:00" required="required" />
                </div>

                <div class="col-md-6">
                    <label for="inicio">Início do Contrato:</label>
                    <input class="form-control" name="inicio" required="required" type="text" id="inicio" />
                </div>

                <div class="col-md-6">
                    <label for="duracao">Duração do Contrato:</label>
                    <select class="form-control" name="duracao" required="required" id="duracao">
                        <option value="15 dias">15 dias</option>
                        <option value="30 dias">30 dias</option>
                        <option value="45 dias">45 dias</option>
                        <option value="60 dias">60 dias</option>
                        <option value="90 dias" class="active">90 dias</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="nome_empresa">Nome da Empresa (empregador):</label>
                    <input class="form-control" name="nome_empresa" required="required" type="text" id="nome_empresa" />
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
                    <input class="form-control" name="end_empresa" required="required" type="text" id="end_empresa" />
                </div>

                <div class="col-md-2">
                    <label for="bairro_empresa">Bairro:</label>
                    <input class="form-control" name="bairro_empresa" required="required" type="text" id="bairro_empresa" />
                </div>

                <div class="col-md-3 estados">
                    <label for="estadose">Estado:</label>
                    <select class="meu-form form-control" name="estadose" id="estadose" required="required"></select>
                </div> 

                <div class="col-md-3 cidades">
                    <label for="cidadese">Cidade:</label>
                    <select class="meu-form form-control" name="cidadese" id="cidadese" required="required">
                        <option value="none">Selecione a cidade</option>
                    </select>
                </div>   

                <div class="col-md-6">
                    <label for="testemunha_um">Testemunha Um:</label>
                    <input class="form-control" name="testemunha_um" required="required" type="text" id="testemunha_um" />
                </div>

                <div class="col-md-6">
                    <label for="testemunha_dois">Testemunha Dois:</label>
                    <input class="form-control" name="testemunha_dois" required="required" type="text" id="testemunha_dois" />
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
    

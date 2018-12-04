<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <title>Carta de Correção de Notas Fiscais - Impressão - Link Contábil</title>
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
            font-family: 'Arial', 'Helvetica', sans-serif; 
            color:#000; 
            background:#fff;
        }

        p {text-align: left;font-size: 16px;}

        small{font-size: 13px!important;padding-top: 2px;}

        .logotipo img{position: relative;top: 35px;}

        .header h4{margin-top: -30px;}

        .container{padding-left: 5%;padding-right: 5%;}

        .btn-print{ 
            width:150px; 
            height:34px; 
            background:url('assets/img/btn-print.png') no-repeat; 
            border:none;
            margin-top:20px;
        }

        .btn-print:hover{ cursor:pointer; }

        .documento h4{font-size: 15.3px;}

        .remetente{ 
            margin-top: 20px; 
            margin-bottom: 50px;
        }

        .ass{
            position: relative;
            top:45px;
            font-size: 10px;
            text-transform: uppercase; 
        }

        .table{width:97%;margin-right: 15px!important;}

        thead td th{font-size: 12px!important;}

        .box-remetente{width: 70%;position: relative;float: left;}

        .box-carimbo{width: 30%;position: relative;float: right;margin-top: 15px;}

        .box-carimbo .box-top{
            width: 220px;
            height: 100px;
            border: 1px solid #000;
        }

        .box-carimbo .box{
            width: 220px;
            height: 100px;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
        }

        .box-carimbo .box-bottom{
            width: 220px;
            height: 100px;
            border: 1px solid #000;
        }

        .box-bottom h6{position: relative; top: 70px;}
        .box h6{position: relative; top: 80px;}
                
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
        <h4 class="data" align="right"><?php $cidadese = $_POST['cidadese']; echo "$cidadese" ?>, <?php $data_p = $_POST['data_p']; echo "$data_p" ?> - <?php $estadose = $_POST['estadose']; echo "$estadose" ?></h4><br />
    </header>

    <section class="container documento">

        <p>A <?php $nome_destinatario = $_POST['nome_destinatario']; echo "$nome_destinatario" ?><br />
           <?php $end_destinatario = $_POST['end_destinatario']; echo "$end_destinatario" ?><br />
           <?php $bairro_destinatario = $_POST['bairro_destinatario']; echo "$bairro_destinatario" ?><br />
           <?php $cidades = $_POST['cidades']; echo "$cidades" ?> - <?php $estados = $_POST['estados']; echo "$estados" ?> - CEP: <?php $cep_destinatario = $_POST['cep_destinatario']; echo "$cep_destinatario" ?></p>

        <h4><strong>REF.: CONFERÊNCIA DE DOCUMENTO FISCAL E COMUNICAÇÃO DE INCORREÇÕES</strong></h4>

        <p>Prezado(s) Senhor(es),</p>

        <p>Referente a <?php $nota_fiscal = $_POST['nota_fiscal']; echo "$nota_fiscal" ?> <strong>Nota Fiscal Nº. <?php $num_nota = $_POST['num_nota']; echo "$num_nota" ?>, Série: <?php $serie = $_POST['serie']; echo "$serie" ?>, de <?php $dia_nota = $_POST['dia_nota']; echo "$dia_nota" ?>.</strong></p>

        <p>Em face do que determina a Legislação Fiscal vigente, vimos pela presente comunicar que a <strong>Nota Fiscal em referência</strong> contém a(s) irregularidade(s) apontadas abaixo, cuja correção solicitamos que seja providenciada.</p><br />

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>ESPECIFICAÇÃO</th>
                    <th>COD</th>
                    <th>ESPECIFICAÇÃO</th>
                    <th>COD</th>
                    <th>ESPECIFICAÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Razão Social</td>
                    <td>13</td>
                    <td>Quantidade (produto)</td>
                    <td>25</td>
                    <td>Nome do Transportador</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Endereço</td>
                    <td>14</td>
                    <td>Descrição dos Produtos</td>
                    <td>26</td>
                    <td>Endereço do Transportador</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Município</td>
                    <td>15</td>
                    <td>Preço Unitário</td>
                    <td>27</td>
                    <td>Termo de Isenção do IPI</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Estado</td>
                    <td>16</td>
                    <td>Valor do Produto</td>
                    <td>28</td>
                    <td>Termo de Isenção do ICMS</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Nº. Inscrição no CNPJ</td>
                    <td>17</td>
                    <td>Classificação Fiscal</td>
                    <td>29</td>
                    <td>Peso Bruto / Líquido</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Nº. Inscrição Estadual</td>
                    <td>18</td>
                    <td>Alíquota do IPI</td>
                    <td>30</td>
                    <td>Vol. - Marca / Num. /Quant.</td>
                </tr>
                <tr>
                    <td>07</td>
                    <td>Natureza da Operação</td>
                    <td>19</td>
                    <td>Valor do IPI</td>
                    <td>31</td>
                    <td>Rasuras</td>
                </tr>
                <tr>
                    <td>08</td>
                    <td>Código Fiscal da Operação</td>
                    <td>20</td>
                    <td>Base de Cálculo do IPI</td>
                    <td>32</td>
                    <td>Situação Tributária</td>
                </tr>
                <tr>
                    <td>09</td>
                    <td>Via de Transporte</td>
                    <td>21</td>
                    <td>Valor Total da Nota</td>
                    <td>33</td>
                    <td>Condição de Pagamento</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Data de Emissão</td>
                    <td>22</td>
                    <td>Alíquota do ICMS</td>
                    <td>34</td>
                    <td>Vencimento</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Data da Saída</td>
                    <td>23</td>
                    <td>Valor do ICMS</td>
                    <td>35</td>
                    <td>Desconto</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Unidade (produto)</td>
                    <td>24</td>
                    <td>Base de Cálculo do ICMS</td>
                    <td>36</td>
                    <td>Outros</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>CÓDIGO COM IRREGULARIDADE</th>
                    <th>RETIFICAÇÕES A SEREM CONSIDERADAS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-md-4">
                        <strong><?php $irregularidades_1 = $_POST['irregularidades_1']; echo "$irregularidades_1" ?>
                        </strong>
                    </td>
                    <td class="col-md-8"><?php $retifi_1 = $_POST['retifi_1']; echo "$retifi_1" ?></td>
                </tr>
                <tr>
                    <td class="col-md-4">
                        <strong><?php $irregularidades_2 = $_POST['irregularidades_2']; echo "$irregularidades_2" ?>
                        </strong>
                    </td>
                    <td class="col-md-8"><?php $retifi_2 = $_POST['retifi_2']; echo "$retifi_2" ?></td>
                </tr>
                <tr>
                    <td class="col-md-4">
                        <strong><?php $irregularidades_3 = $_POST['irregularidades_3']; echo "$irregularidades_3" ?>
                        </strong>
                    </td>
                    <td class="col-md-8"><?php $retifi_3 = $_POST['retifi_3']; echo "$retifi_3" ?></td>
                </tr>
                <tr>
                    <td class="col-md-4">
                        <strong><?php $irregularidades_4 = $_POST['irregularidades_4']; echo "$irregularidades_4" ?>
                        </strong>
                    </td>
                    <td class="col-md-8"><?php $retifi_4 = $_POST['retifi_4']; echo "$retifi_4" ?></td>
                </tr>
                <tr>
                    <td class="col-md-4">
                        <strong><?php $irregularidades_5 = $_POST['irregularidades_5']; echo "$irregularidades_5" ?>
                        </strong>
                    </td>
                    <td class="col-md-8"><?php $retifi_5 = $_POST['retifi_5']; echo "$retifi_5" ?></td>
                </tr>
            </tbody>
        </table>

        <br /><p>Para evitar qualquer <strong>sanção fiscal</strong>, solicitamos acusarem o recebimento desta, na cópia que a acompanha, devendo a via principal ficar arquivada junto a Nota Fiscal em questão.</p>
    </section>

    <section class="container remetente">

        <div class="box-remetente" style="padding-left: 0!important;">
            <p>Sem outro motivo para o momento, subscrevemo-nos.</p>
            <p>Atenciosamente,</p><br /><br />
            <p><strong><?php $nome_empresa = $_POST['nome_empresa']; echo "$nome_empresa" ?></strong></p>
            <p><strong><?php $end_empresa = $_POST['end_empresa']; echo "$end_empresa" ?></strong></p>
            <p><strong><?php $bairro_empresa = $_POST['bairro_empresa']; echo "$bairro_empresa" ?></strong></p>
            <p><strong><?php $cidadese = $_POST['cidadese']; echo "$cidadese" ?> - <?php $estadose = $_POST['estadose']; echo "$estadose" ?></strong></p><br />
            <p><strong>CNPJ.: <?php $cnpj = $_POST['cnpj']; echo "$cnpj" ?></strong></p>
            <p><strong>INSCRIÇÃO ESTADUAL: <?php $i_estadual = $_POST['i_estadual']; echo "$i_estadual" ?></strong></p>
        </div>

        <div class="box-carimbo">
            <div class="box-top">
                <h6 align="center">Acusamos o recebimento da 1ª via.</h6>
                <h6 align="center" class="ass">ASSINATURA</h6>
            </div>
            <div class="box" style="margin-top: -15px;">
                <h6 align="center">Local e Data</h6>
            </div>
            <div class="box-bottom">
                <h6 align="center">Carimbo e CNPJ</h6>
            </div>
        </div>
    </section>

</body>
</html>
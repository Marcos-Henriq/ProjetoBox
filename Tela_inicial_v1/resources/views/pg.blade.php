<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="/css/pg.css">
    <title>HOME | BoxDelivery</title>
</head>
<script src="/js/scripts.js"></script>

<body>
    <!-- <header class="header-main">

    </header> -->
        <div class="container-stats">
            <div class="voltar"> <img src="" alt="">
                <h3 onclick="voltar()">Voltar</h3>
            </div>
            <div class="stats">

            </div>
        </div>
<<<<<<< HEAD
    <form   method="GET" action="/form">
        <input name="caminho" value="<?php echo($recebendo);
        ?>" 
        type="hidden">
        <div class="wrapper">
            <div class="container">
                <div class="section-left">
                    <span   class="label" >Nome Completo do funcionario, sem abreviações:</span>
                    <input name="nome_completo" type="text">
                    <span class="label" >CPF do Colaborador "Sem ponto e virgula"</span>
                    <input name="cpf" type="text">
                    <span class="label" >Cargos:</span>
                    <select name="cargo" id="">
                        <option value="ADVOGADO">ADVOGADO</option>
                        <option value="ANALISTA_COMERCIAL">ANALISTA COMERCIAL</option>
                        <option value="ANALISTA_CONTAS_A_PAGAR">ANALISTA CONTAS A PAGAR</option>
                        <option value="ANALISTA_CONTAS_A_RECEBER">ANALISTA CONTAS A RECEBER</option>
                        <option value="ANALISTA_CADASTRO">ANALISTA CADASTRO</option>
                        <option value="ANALISTA_COMPRAS">ANALISTA COMPRAS</option>
                        <option value="ANALISTA_CRM">ANALISTA CRM</option>
                        <option value="ANALISTA_DADOS">ANALISTA DADOS</option>
                        <option value="ANALISTA_DEPARTAMENTO PESSOAL">ANALISTA DEPARTAMENTO PESSOAL</option>
                        <option value="ANALISTA_GENTE_E_CULTURA">ANALISTA GENTE E CULTURA</option>
                        <option value="ANALISTA_IMPLANTAÇÃO">ANALISTA IMPLANTAÇÃO</option>
                        <option value="ANALISTA_MARKETING">ANALISTA MARKETING</option>
                        <option value="ANALISTA_MKT_DIGITAL_E_PERFORMANCE">ANALISTA MKT DIGITAL E PERFORMANCE</option>
                        <option value="ANALISTA_RECRUTAMENTO_E_SELEÇÃO">ANALISTA RECRUTAMENTO E SELEÇÃO</option>
                        <option value="ANALISTA_SUPORTE">ANALISTA SUPORTE</option>
                        <option value="ANALISTA_SUPORTE_BACKOFFICE">ANALISTA SUPORTE BACKOFFICE</option>
                        <option value="ANALISTA_SUPORTE_E_INFRAESTRUTURA">ANALISTA SUPORTE E INFRAESTRUTURA</option>
                        <option value="ANALISTA_FINANCEIRO">ANALISTA FINANCEIRO</option>
                        <option value="ANALISTA_OPERACIONAL">ANALISTA OPERACIONAL</option>
                        <option value="ANALISTA_SQL">ANALISTA SQL</option>
                        <option value="ANALISTA_TECH RECRUITER">ANALISTA TECH RECRUITER</option>
                        <option value="ARQUITETO_SOFTWAR">ARQUITETO SOFTWARE</option>
                        <option value="ASSISTENTE_ADMINISTRATIVO">ASSISTENTE ADMINISTRATIVO</option>
                        <option value="ASSISTENTE_COMERCIAL">ASSISTENTE COMERCIAL</option>
                        <option value="ASSISTENTE_CADASTRO">ASSISTENTE CADASTRO</option>
                        <option value="ASSISTENTE_CONTAS_A_PAGAR">ASSISTENTE CONTAS A PAGAR</option>
                        <option value="ASSISTENTE_CONTAS_A_RECEBER">ASSISTENTE CONTAS A RECEBER</option>
                        <option value="ASSISTENTE_GENTE_E_CULTURA">ASSISTENTE GENTE E CULTURA</option>
                        <option value="ASSISTENTE_LOGÍSTICA">ASSISTENTE LOGÍSTICA</option>
                        <option value="ASSISTENTE_MARKETING">ASSISTENTE MARKETING</option>
                        <option value="AUXILIAR_ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                        <option value="AUXILIAR_LOGÍSTICA">AUXILIAR LOGÍSTICA</option>
                        <option value="AUXILIAR_SECRETARIADO">AUXILIAR SECRETARIADO</option>
                        <option value="AUXILIAR_SERVIÇOS GERAIS">AUXILIAR SERVIÇOS GERAIS</option>
                        <option value="CEO">CEO</option>
                        <option value="CFO">CFO</option>
                        <option value="CINEGRAFISTA">CINEGRAFISTA</option>
                        <option value="COORDENADOR_MARKETING">COORDENADOR MARKETING</option>
                        <option value="COORDENADOR_OPERACIONAL">COORDENADOR OPERACIONAL</option>
                        <option value="COORDENADOR_FINANCEIRO">COORDENADOR FINANCEIRO</option>
                        <option value="CTO">CTO</option>
                        <option value="DATA_SCIENCE">DATA SCIENCE</option>
                        <option value="DESENVOLVEDOR_ANDROID">DESENVOLVEDOR ANDROID</option>
                        <option value="DESENVOLVEDOR_BACKEND">DESENVOLVEDOR BACKEND</option>
                        <option value="DESENVOLVEDOR_FRONTEND">DESENVOLVEDOR FRONTEND</option>
                        <option value="DESENVOLVEDOR_FULLSTACK">DESENVOLVEDOR FULLSTACK</option>
                        <option value="DESENVOLVEDOR_IOS">DESENVOLVEDOR IOS</option>
                        <option value="DESENVOLVEDOR_QUALITY_ASSURANCE">DESENVOLVEDOR QUALITY ASSURANCE</option>
                        <option value="DESIGN_UX/UI">DESIGN UX/UI</option>
                        <option value="DESIGNER">DESIGNER</option>
                        <option value="DESIGNER_MOTION">DESIGNER MOTION</option>
                        <option value="DESIGNER_GRÁFICO">DESIGNER GRÁFICO</option>
                        <option value="DIRETOR_COMERCIAL">DIRETOR COMERCIAL</option>
                        <option value="DIRETOR_TECNOLOGIA">DIRETOR TECNOLOGIA</option>
                        <option value="DIRETOR_JURÍDICO">DIRETOR JURÍDICO</option>
                        <option value="ENCARREGADO">ENCARREGADO</option>
                        <option value="ENGENHEIRO_SOFTWARE">ENGENHEIRO SOFTWARE</option>
                        <option value="ENGENHEIRO_SEGURANÇA">ENGENHEIRO SEGURANÇA</option>
                        <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                        <option value="FACILITADOR_SHOPPPER">FACILITADOR SHOPPPER</option>
                        <option value="GERENTE_COMERCIAL">GERENTE COMERCIAL</option>
                        <option value="GERENTE_CONTAS">GERENTE CONTAS</option>
                        <option value="GERENTE_ESTRATÉGIA">GERENTE ESTRATÉGIA</option>
                        <option value="GERENTE_MARKETING">GERENTE MARKETING</option>
                        <option value="GERENTE_PROCESSOS">GERENTE PROCESSOS</option>
                        <option value="GERENTE_TI">GERENTE TI</option>
                        <option value="GERENTE_FINANCEIRO">GERENTE FINANCEIRO</option>
                        <option value="GERENTE_OPERACIONAL">GERENTE OPERACIONAL</option>
                        <option value="MOBILE_IOS">MOBILE IOS</option>
                        <option value="MOBILE_IOS">MOTORISTA</option>
                        <option value="PRODUCT_MANAGER_(PM)">PRODUCT MANAGER (PM)</option>
                        <option value="PRODUCT_MANAGER_(PO)">PRODUCT MANAGER (PO)</option>
                        <option value="QUALITY_ASSURANCE">QUALITY ASSURANCE</option>
                        <option value="REDATOR">REDATOR</option>
                        <option value="REPRESENTANTE_COMERCIAL_EXTERNO">REPRESENTANTE COMERCIAL EXTERNO</option>
                        <option value="REPRESENTANTE_COMERCIAL_INTERNO">REPRESENTANTE COMERCIAL INTERNO</option>
                        <option value="SECRETÁRIA_EXECUTIVA">SECRETÁRIA EXECUTIVA</option>
                        <option value="SUPERVISOR_COMERCIAL">SUPERVISOR COMERCIAL</option>
                        <option value="SUPERVISOR_GENTE_CULTURA">SUPERVISOR GENTE CULTURA</option>
                        <option value="SUPERVISOR_OPERACIONAL_(EXPANSÃO)">SUPERVISOR OPERACIONAL (EXPANSÃO)</option>
                        <option value="SUPERVISOR_OPERACIONAL_(HUB)">SUPERVISOR OPERACIONAL (HUB)</option>
                        <option value="SUPERVISOR_OPERACIONAL_(OPERAÇÃO)">SUPERVISOR OPERACIONAL (OPERAÇÃO)</option>
                        <option value="TECH_LEAD<">TECH LEAD</option>
                        <option value="TÉCNICOELETRÔNICA">TÉCNICOELETRÔNICA</option>
                    </select>
                        <span class="label" >Senioridade:</span>
                        <select name="senioridade" id="">
                            <option value="Não_se_aplica">Não se aplica</option>
                            <option value="Júnior">Júnior</option>
                            <option value="Pleno">Pleno</option>
                            <option value="Sênior">Sênior</option>
                        </select>
                        <span class="label" >Área:</span>
                        <select name="area" id="">
                            <option value="COMERCIAL">COMERCIAL</option>
                            <option value="DESENVOLVIMENTO">DESENVOLVIMENTO</option>
                            <option value="DIRETORIA_(CEO)">DIRETORIA (CEO)</option>
                            <option value="FINANCEIRO">FINANCEIRO</option>
                            <option value="GENTE_E_CULTURA">GENTE E CULTURA</option>
                            <option value="JURÍDICO">JURÍDICO</option>
                            <option value="MARKETING">MARKETING</option>
                            <option value="OPERACIONAL">OPERACIONAL</option>
                            <option value="PRODUTOS">PRODUTOS</option>
                            <option value="RH">RH</option>
                        </select>
                        <span class="label" >Sub área:</span>
                            <select name="sub_area" id="">
=======
        <form method="GET" action="enviar">
            <input name="caminho" value="<?php echo ($recebendo);
                                            ?>" type="hidden">
            <div class="wrapper">
                <div class="container">
                    <div class="section-left">
                        <div class="input-box">
                            <span class="label">Nome Completo do funcionario, sem abreviações:</span>
                            <input name="nome_completo" type="text">
                        </div>
                        <div class="input-box">
                            <span class="label">CPF do Colaborador "Sem ponto e virgula"</span>
                            <input name="cpf" type="text">
                        </div>
                        <div class="input-box">
                            <span class="label">Cargos:</span>
                            <select name="cargo" id="select_cargos">
                                <option value="ADVOGADO">ADVOGADO</option>
                                <option value="ANALISTA_COMERCIAL">ANALISTA COMERCIAL</option>
                                <option value="ANALISTA_CONTAS_A_PAGAR">ANALISTA CONTAS A PAGAR</option>
                                <option value="ANALISTA_CONTAS_A_RECEBER">ANALISTA CONTAS A RECEBER</option>
                                <option value="ANALISTA_CADASTRO">ANALISTA CADASTRO</option>
                                <option value="ANALISTA_COMPRAS">ANALISTA COMPRAS</option>
                                <option value="ANALISTA_CRM">ANALISTA CRM</option>
                                <option value="ANALISTA_DADOS">ANALISTA DADOS</option>
                                <option value="ANALISTA_DEPARTAMENTO PESSOAL">ANALISTA DEPARTAMENTO PESSOAL</option>
                                <option value="ANALISTA_GENTE_E_CULTURA">ANALISTA GENTE E CULTURA</option>
                                <option value="ANALISTA_IMPLANTAÇÃO">ANALISTA IMPLANTAÇÃO</option>
                                <option value="ANALISTA_MARKETING">ANALISTA MARKETING</option>
                                <option value="ANALISTA_MKT_DIGITAL_E_PERFORMANCE">ANALISTA MKT DIGITAL E PERFORMANCE</option>
                                <option value="ANALISTA_RECRUTAMENTO_E_SELEÇÃO">ANALISTA RECRUTAMENTO E SELEÇÃO</option>
                                <option value="ANALISTA_SUPORTE">ANALISTA SUPORTE</option>
                                <option value="ANALISTA_SUPORTE_BACKOFFICE">ANALISTA SUPORTE BACKOFFICE</option>
                                <option value="ANALISTA_SUPORTE_E_INFRAESTRUTURA">ANALISTA SUPORTE E INFRAESTRUTURA</option>
                                <option value="ANALISTA_FINANCEIRO">ANALISTA FINANCEIRO</option>
                                <option value="ANALISTA_OPERACIONAL">ANALISTA OPERACIONAL</option>
                                <option value="ANALISTA_SQL">ANALISTA SQL</option>
                                <option value="ANALISTA_TECH RECRUITER">ANALISTA TECH RECRUITER</option>
                                <option value="ARQUITETO_SOFTWAR">ARQUITETO SOFTWARE</option>
                                <option value="ASSISTENTE_ADMINISTRATIVO">ASSISTENTE ADMINISTRATIVO</option>
                                <option value="ASSISTENTE_COMERCIAL">ASSISTENTE COMERCIAL</option>
                                <option value="ASSISTENTE_CADASTRO">ASSISTENTE CADASTRO</option>
                                <option value="ASSISTENTE_CONTAS_A_PAGAR">ASSISTENTE CONTAS A PAGAR</option>
                                <option value="ASSISTENTE_CONTAS_A_RECEBER">ASSISTENTE CONTAS A RECEBER</option>
                                <option value="ASSISTENTE_GENTE_E_CULTURA">ASSISTENTE GENTE E CULTURA</option>
                                <option value="ASSISTENTE_LOGÍSTICA">ASSISTENTE LOGÍSTICA</option>
                                <option value="ASSISTENTE_MARKETING">ASSISTENTE MARKETING</option>
                                <option value="AUXILIAR_ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                                <option value="AUXILIAR_LOGÍSTICA">AUXILIAR LOGÍSTICA</option>
                                <option value="AUXILIAR_SECRETARIADO">AUXILIAR SECRETARIADO</option>
                                <option value="AUXILIAR_SERVIÇOS GERAIS">AUXILIAR SERVIÇOS GERAIS</option>
                                <option value="CEO">CEO</option>
                                <option value="CFO">CFO</option>
                                <option value="CINEGRAFISTA">CINEGRAFISTA</option>
                                <option value="COORDENADOR_MARKETING">COORDENADOR MARKETING</option>
                                <option value="COORDENADOR_OPERACIONAL">COORDENADOR OPERACIONAL</option>
                                <option value="COORDENADOR_FINANCEIRO">COORDENADOR FINANCEIRO</option>
                                <option value="CTO">CTO</option>
                                <option value="DATA_SCIENCE">DATA SCIENCE</option>
                                <option value="DESENVOLVEDOR_ANDROID">DESENVOLVEDOR ANDROID</option>
                                <option value="DESENVOLVEDOR_BACKEND">DESENVOLVEDOR BACKEND</option>
                                <option value="DESENVOLVEDOR_FRONTEND">DESENVOLVEDOR FRONTEND</option>
                                <option value="DESENVOLVEDOR_FULLSTACK">DESENVOLVEDOR FULLSTACK</option>
                                <option value="DESENVOLVEDOR_IOS">DESENVOLVEDOR IOS</option>
                                <option value="DESENVOLVEDOR_QUALITY_ASSURANCE">DESENVOLVEDOR QUALITY ASSURANCE</option>
                                <option value="DESIGN_UX/UI">DESIGN UX/UI</option>
                                <option value="DESIGNER">DESIGNER</option>
                                <option value="DESIGNER_MOTION">DESIGNER MOTION</option>
                                <option value="DESIGNER_GRÁFICO">DESIGNER GRÁFICO</option>
                                <option value="DIRETOR_COMERCIAL">DIRETOR COMERCIAL</option>
                                <option value="DIRETOR_TECNOLOGIA">DIRETOR TECNOLOGIA</option>
                                <option value="DIRETOR_JURÍDICO">DIRETOR JURÍDICO</option>
                                <option value="ENCARREGADO">ENCARREGADO</option>
                                <option value="ENGENHEIRO_SOFTWARE">ENGENHEIRO SOFTWARE</option>
                                <option value="ENGENHEIRO_SEGURANÇA">ENGENHEIRO SEGURANÇA</option>
                                <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                                <option value="FACILITADOR_SHOPPPER">FACILITADOR SHOPPPER</option>
                                <option value="GERENTE_COMERCIAL">GERENTE COMERCIAL</option>
                                <option value="GERENTE_CONTAS">GERENTE CONTAS</option>
                                <option value="GERENTE_ESTRATÉGIA">GERENTE ESTRATÉGIA</option>
                                <option value="GERENTE_MARKETING">GERENTE MARKETING</option>
                                <option value="GERENTE_PROCESSOS">GERENTE PROCESSOS</option>
                                <option value="GERENTE_TI">GERENTE TI</option>
                                <option value="GERENTE_FINANCEIRO">GERENTE FINANCEIRO</option>
                                <option value="GERENTE_OPERACIONAL">GERENTE OPERACIONAL</option>
                                <option value="MOBILE_IOS">MOBILE IOS</option>
                                <option value="MOBILE_IOS">MOTORISTA</option>
                                <option value="PRODUCT_MANAGER_(PM)">PRODUCT MANAGER (PM)</option>
                                <option value="PRODUCT_MANAGER_(PO)">PRODUCT MANAGER (PO)</option>
                                <option value="QUALITY_ASSURANCE">QUALITY ASSURANCE</option>
                                <option value="REDATOR">REDATOR</option>
                                <option value="REPRESENTANTE_COMERCIAL_EXTERNO">REPRESENTANTE COMERCIAL EXTERNO</option>
                                <option value="REPRESENTANTE_COMERCIAL_INTERNO">REPRESENTANTE COMERCIAL INTERNO</option>
                                <option value="SECRETÁRIA_EXECUTIVA">SECRETÁRIA EXECUTIVA</option>
                                <option value="SUPERVISOR_COMERCIAL">SUPERVISOR COMERCIAL</option>
                                <option value="SUPERVISOR_GENTE_CULTURA">SUPERVISOR GENTE CULTURA</option>
                                <option value="SUPERVISOR_OPERACIONAL_(EXPANSÃO)">SUPERVISOR OPERACIONAL (EXPANSÃO)</option>
                                <option value="SUPERVISOR_OPERACIONAL_(HUB)">SUPERVISOR OPERACIONAL (HUB)</option>
                                <option value="SUPERVISOR_OPERACIONAL_(OPERAÇÃO)">SUPERVISOR OPERACIONAL (OPERAÇÃO)</option>
                                <option value="TECH_LEAD<">TECH LEAD</option>
                                <option value="TÉCNICOELETRÔNICA">TÉCNICOELETRÔNICA</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="label">Senioridade:</span>
                            <select name="senioridade" id="select_senioridade">
                                <option value="Não_se_aplica">Não se aplica</option>
                                <option value="Júnior">Júnior</option>
                                <option value="Pleno">Pleno</option>
                                <option value="Sênior">Sênior</option>
                            </select>
                        </div>
                        <div class="input-box">

                            <span class="label">Área:</span>
                            <select name="area" id="select_area">
                                <option value="COMERCIAL">COMERCIAL</option>
                                <option value="DESENVOLVIMENTO">DESENVOLVIMENTO</option>
                                <option value="DIRETORIA_(CEO)">DIRETORIA (CEO)</option>
                                <option value="FINANCEIRO">FINANCEIRO</option>
                                <option value="GENTE_E_CULTURA">GENTE E CULTURA</option>
                                <option value="JURÍDICO">JURÍDICO</option>
                                <option value="MARKETING">MARKETING</option>
                                <option value="OPERACIONAL">OPERACIONAL</option>
                                <option value="PRODUTOS">PRODUTOS</option>
                                <option value="RH">RH</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="label">Sub área:</span>
                            <select name="sub_area" id="select_sub_area">
>>>>>>> refs/remotes/origin/main
                                <option value="COMERCIAL_EXTERNO">COMERCIAL EXTERNO</option>
                                <option value="COMERCIAL_INTERNO_(SEDE)">COMERCIAL INTERNO (SEDE)</option>
                                <option value="COMERCIAL_HUB">COMERCIAL HUB</option>
                                <option value="DESENVOLVIMENTO">DESENVOLVIMENTO</option>
                                <option value="DIRETORIA_(CEO)_-_ADMINISTRATIVO">DIRETORIA (CEO) - ADMINISTRATIVO</option>
                                <option value="FINANCEIRO">FINANCEIRO</option>
                                <option value="FINANCEIRO_-_COMPRAS">FINANCEIRO - COMPRAS</option>
                                <option value="FINANCEIRO_-_CONTAS_A_PAGAR">FINANCEIRO - CONTAS A PAGAR</option>
                                <option value="FINANCEIRO_-_CONTAS_A_RECEBER">FINANCEIRO - CONTAS A RECEBER</option>
                                <option value="FINANCEIRO_-_DEPARTAMENTO_PESSOAL">FINANCEIRO - DEPARTAMENTO PESSOAL</option>
                                <option value="GENTE E CULTURA">GENTE E CULTURA</option>
                                <option value="GENTE E CULTURA_-_LIMPEZA">GENTE E CULTURA - LIMPEZA</option>
                                <option value="GENTE E CULTURA_-_R&S">GENTE E CULTURA - R&S</option>
                                <option value="JURÍDICO">JURÍDICO</option>
                                <option value="JURÍDICO_-_CADASTRO">JURÍDICO - CADASTRO</option>
                                <option value="MARKETING">MARKETING</option>
                                <option value="OPERACIONAL_-_DARK STORE">OPERACIONAL - DARK STORE</option>
                                <option value="OPERACIONAL_-_EXPANSÃO_&_SUPORTE">OPERACIONAL - EXPANSÃO & SUPORTE</option>
                                <option value="OPERACIONAL_HUB">OPERACIONAL HUB</option>
                                <option value="OPERACIONAL_-_OPERAÇÃO_(SEDE)">OPERACIONAL - OPERAÇÃO (SEDE)</option>
                                <option value="PRODUTOS">PRODUTOS</option>
                                <option value="RH">RH</option>
                                <option value="TECNOLOGIA">TECNOLOGIA</option>
                            </select>
                        </div>



                    </div>
                    <div class="section-right">
                        <div class="tpContratacao">

                            <span class="label">Tipo de contratação</span>
                            <div class="section-chk">
                                <span class="label">CLT</span><input id="chk" value="CLT" name="chk_box" class="chk" type="radio">
                                <span class="label">PJ</span><input id="chk" value="PJ" name="chk_box" class="chk" type="radio">
                            </div>
                        </div>

                    <div class="input-box">

                        <span class="label">Local de Trabalho:</span>
                        <select name="local_de_trabalho" id="select_local_de_trabalho">
                            <option value="BANGU_SHOPPING">BANGU SHOPPING</option>
                            <option value="BOULEVARD_LONDRINA_SOPPING">BOULEVARD LONDRINA SOPPING</option>
                            <option value="BOULEVARD_SHOPPING_BAURU">BOULEVARD SHOPPING BAURU</option>
                            <option value="BOULEVARD_SHOPPINGBELÉM">BOULEVARD SHOPPINGBELÉM</option>
                            <option value="BOULEVARD_SHOPPING_BELO HORIZONTE">BOULEVARD SHOPPING BELO HORIZONTE</option>
                            <option value="BOULEVARD_SHOPPING_BRASÍLIA">BOULEVARD SHOPPING BRASÍLIA</option>
                            <option value="BOULEVARD_SHOPPING_CAMPOS">BOULEVARD SHOPPING CAMPOS</option>
                            <option value="BOULEVARD_SHOPPING_FEIRA DE SANTANA">BOULEVARD SHOPPING FEIRA DE SANTANA</option>
                            <option value="BOULEVARD_SHOPPING_VILA VELHA">BOULEVARD SHOPPING VILA VELHA</option>
                            <option value="BOULEVARD_SHOPPING_VITÓRIA DA CONQUISTA">BOULEVARD SHOPPING VITÓRIA DA CONQUISTA</option>
                            <option value="CARIOCA_SHOPPING">CARIOCA SHOPPING</option>
                            <option value="CAXIAS_SHOPPING">CAXIAS SHOPPING</option>
                            <option value="DARK_STORE_BETIM">DARK STORE BETIM</option>
                            <option value="DARK_STORE_CASTELO">DARK STORE CASTELO</option>
                            <option value="DARK_STORE_CIDADE NOVA">DARK STORE CIDADE NOVA</option>
                            <option value="DARK_STORE_DARK ITAQUERA">DARK STORE DARK ITAQUERA</option>
                            <option value="DARK_STORE_ELDORADO">DARK STORE ELDORADO</option>
                            <option value="DARK_STORE_EMBÚ DAS ARTES<">DARK STORE EMBÚ DAS ARTES</option>
                            <option value="DARK_STORE_FREGUESIA">DARK STORE FREGUESIA</option>
                            <option value="DARK_STORE_JARDIM_CELESTE">DARK STORE JARDIM CELESTE</option>
                            <option value="DARK_STORE_JARDIM_ESTRELA">DARK STORE JARDIM ESTRELA</option>
                            <option value="DARK_STORE_JUIZ DE FORA">DARK STORE JUIZ DE FORA</option>
                            <option value="DARK_STORE_JUSCELINO">DARK STORE JUSCELINO</option>
                            <option value="DARK_STORE_PADRE EUSTÁQUIO">DARK STORE PADRE EUSTÁQUIO</option>
                            <option value="DARK_STORE_SAVASSI">DARK STORE SAVASSI</option>
                            <option value="EXTERNO">EXTERNO</option>
                            <option value="FRANCA_SHOPPING">FRANCA SHOPPING</option>
                            <option value="HADDOCK_LOBO">HADDOCK LOBO</option>
                            <option value="HOME_OFFICE">HOME OFFICE</option>
                            <option value="MANAUARA_SHOPPING">MANAUARA SHOPPING</option>
                            <option value="MONTES_CLAROS_SHOPPING">MONTES CLAROS SHOPPING</option>
                            <option value="OUTBACK_SHOPPING_ITAQUERA">OUTBACK SHOPPING ITAQUERA</option>
                            <option value="PARQUE_D'_PEDRO_SHOPING">PARQUE D' PEDRO SHOPING</option>
                            <option value="PARQUE_SHOPPING_BAHIA">PARQUE SHOPPING BAHIA</option>
                            <option value="PARQUE_SHOPPING_BELÉM">PARQUE SHOPPING BELÉM</option>
                            <option value="PARQUE_SHOPPING_MACEIO">PARQUE SHOPPING MACEIÓ</option>
                            <option value="PASSEIO_DAS_ÁGUAS_SHOPPING">PASSEIO DAS ÁGUAS SHOPPING</option>
                            <option value="PASSEIO_SHOPPING">PASSEIO SHOPPING</option>
                            <option value="PÁTIO_ALCÂNTARA">PÁTIO ALCÂNTARA</option>
                            <option value="PLAZA_SUL_SHOPPING">PLAZA SUL SHOPPING</option>
                            <option value="RECREIO_SHOPPING">RECREIO SHOPPING</option>
                            <option value="SANTA_CRUZ_SHOPPING">SANTA CRUZ SHOPPING</option>
                            <option value="SANTANA_PARQUE_SHOPPING">SANTANA PARQUE SHOPPING</option>
                            <option value="SÃO_GONÇALO_SHOPPING">SÃO GONÇALO SHOPPING</option>
                            <option value="SHOPPING_CAMPO_LIMPO">SHOPPING CAMPO LIMPO</option>
                            <option value="SHOPPING_BAHIA">SHOPPING BAHIA</option>
                            <option value="SHOPPING_GRANDE_RIO">SHOPPING GRANDE RIO</option>
                            <option value="SHOPPING_LEBLON">SHOPPING LEBLON</option>
                            <option value="SHOPPING_METRÓPOLE">SHOPPING METRÓPOLE</option>
                            <option value="SHOPPING_PARANGABA">SHOPPING PARANGABA</option>
                            <option value="SHOPPING_PRAÇA_NOVA_ARAÇATUBA">SHOPPING PRAÇA NOVA ARAÇATUBA</option>
                            <option value="SHOPPING_PRAÇA_NOVA_SANTA_MARIA">SHOPPING PRAÇA NOVA SANTA MARIA</option>
                            <option value="SHOPPING_TABOÃO">SHOPPING TABOÃO</option>
                            <option value="UBERLANDIA_SHOPPING">UBERLANDIA SHOPPING</option>
                            <option value="VIA PARQUE_SHOPPING">VIA PARQUE SHOPPING</option>
                        </select>
                    </div>
                    <div class="input-box">

                        <span class="label">Cidade estado:</span>
                        <select name="cidade_estado" id="select_cidade_estado">
                            <option value="ARAÇATUBA_-_SP">ARAÇATUBA - SP</option>
                            <option value="BAURU_-_SP">BAURU - SP</option>
                            <option value="BELÉM_-_PA">BELÉM - PA</option>
                            <option value="BELO HORIZONTE_-_MG">BELO HORIZONTE - MG</option>
                            <option value="BRASÍLIA_-_DF">BRASÍLIA - DF</option>
                            <option value="CAMPINAS_-_SP">CAMPINAS - SP</option>
                            <option value="CAMPOS_DOS_GAYTACAZES_-_RJ">CAMPOS DOS GAYTACAZES - RJ</option>
                            <option value="CUIABÁ_-_MT">CUIABÁ - MT</option>
                            <option value="DUQUE_DE_CAXIAS_-_RJ">DUQUE DE CAXIAS - RJ</option>
                            <option value="FEIRA DE SANTANA_-_BA">FEIRA DE SANTANA - BA</option>
                            <option value="FORTALEZA_-_CE">FORTALEZA - CE</option>
                            <option value="FRANCA_-_SP">FRANCA - SP</option>
                            <option value="GOIÂNIA_-_GO">GOIÂNIA - GO</option>
                            <option value="GUARUJÁ_-_SP">GUARUJÁ - SP</option>
                            <option value="HADDOCK_LOBO_-_SP">HADDOCK LOBO - SP</option>
                            <option value="HOME_OFFICE">HOME OFFICE</option>
                            <option value="JUIZ_DE_FORA_-_MG">JUIZ DE FORA - MG</option>
                            <option value="LAURO_DE_FREITAS_-_BA">LAURO DE FREITAS - BA</option>
                            <option value="LONDRINA_-_PR">LONDRINA - PR</option>
                            <option value="MACEIÓ_-_AL">MACEIÓ - AL</option>
                            <option value="MANAUS_-_AM">MANAUS - AM</option>
                            <option value="MONTES_CLAROS_-_MG">MONTES CLAROS - MG</option>
                            <option value="PRAIA_GRANDE_-_SP">PRAIA GRANDE - SP</option>
                            <option value="RIO_JANEIRO_-_RJ">RIO JANEIRO - RJ</option>
                            <option value="SALVADOR_-_BA">SALVADOR - BA</option>
                            <option value="SANTA_MARIA_-_RS">SANTA MARIA - RS</option>
                            <option value="SANTOS_-_SP">SANTOS - SP</option>
                            <option value="SÃO_GONÇALO_-_RJ">SÃO GONÇALO - RJ</option>
                            <option value="SÃO_BERNADO_DO_CAMPO_-_SP">SÃO BERNADO DO CAMPO - SP</option>
                            <option value="SÃO_JOÃO_DO_MERITI_-_RJ">SÃO JOÃO DO MERITI - RJ</option>
                            <option value="SÃO_PAULO_-_SP">SÃO PAULO - SP</option>
                            <option value="SÃO_VICENTE_-_SP">SÃO VICENTE - SP</option>
                            <option value="TABOÃO_DA_SERRA_-_SP">TABOÃO DA SERRA - SP</option>
                            <option value="UBERLÂNDIA_-_MG">UBERLÂNDIA - MG</option>
                            <option value="VILA_VELHA_-_ES">VILA VELHA - ES</option>
                            <option value="VITÓRIA_DA_CONQUISTA_-_BA">VITÓRIA DA CONQUISTA - BA</option>
                        </select>
<<<<<<< HEAD
                        <span class="label" >Expectativas de inicio de atividades</span>
                        <input name="data" placeholder="DD/MM/AAAA" class="inp-date" type="date">    
                        <div  class="div_finalizar">
                            <input type="submit" label="Continuar" onclick="check()" class="btn-finalizar">
                                </input>
                            </div>
                            
=======
                    </div>
                    <div class="input-box">

                        <span class="label">Expectativas de inicio de atividades</span>
                        <input placeholder="DD/MM/AAAA" class="inp-date" type="date">
                    </div>
                        <div class="div_finalizar">
                            <input type="submit" value="Continuar" onclick="check()" class="btn-finalizar">
                            </input>
>>>>>>> refs/remotes/origin/main
                        </div>

                    </div>

                </div>
        </form>
        </div>
        </div>


    </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function check() {
        Swal.fire({
            icon: 'success',
            title: 'Tudo certo!',
            text: 'LOREM IPSUM',
        })
        var valor = document.querySelector('input[name="chk_box"]:checked').value

    }
    $(document).ready(function() {
        $('#select_cargos').select2();
    });
    $(document).ready(function() {
        $('#select_senioridade').select2();
    });
    $(document).ready(function() {
        $('#select_area').select2();
    });
    $(document).ready(function() {
        $('#select_sub_area').select2();
    });
    $(document).ready(function() {
        $('#select_local_de_trabalho').select2();
    });
    $(document).ready(function() {
        $('#select_cidade_estado').select2();
    });
</script>
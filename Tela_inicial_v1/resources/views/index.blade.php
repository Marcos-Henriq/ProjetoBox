<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="https://backoffice.internal-tools.develop.boxdelivery.com.br/favicon.ico">
    <link rel="stylesheet" href="/css/style.css" />

    <title>Suporte | BoxDelivery</title>
</head>
<script src="/js/scripts.js">
</script>

<body>
    <div class="header-form">
        
        <a href="/" id="linkHome" class="header-link"><img width="25px" src="/img/bi_arrow-left-short.svg" alt=""><span>Inicio</span></a>
        <div class="container-route" id="containerRoute">
        </div>
    </div>



    <!-- INICIO -- Tela Inicial -->


    <div id="inicial" class="wrapper">
        <div class="container">
            <div onclick="troca('inicial','appEntregador')" class="card">
                <div class="card_yellow">
                    <img src="/img/TelaInicialInicio/Mobile, Devices.svg" alt="">
                </div>
                <h3 class="title-card">APP Entregador</h3>
            </div>
            <div onclick="troca('inicial', 'sisComerciante')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Shop.svg"></div>
                <h3 class="title-card">Sistema Comerciante</h3>
            </div>
            <div onclick="troca('inicial', 'back')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/cimputer-share-signal.svg" alt=""></div>
                <h3 class="title-card">BackOffice</h3>
            </div>
            <div onclick="troca('inicial', 'sistemaBox')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Browser, Internet, Web, Network, Code.svg" alt=""></div>
                <h3 class="title-card">Sistema Box</h3>
            </div>
            <div onclick="troca('inicial', 'googleWorkspace')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Vector.svg" alt=""></div>
                <h3 class="title-card">Google WorkSpace</h3>
            </div>
            <div onclick="troca('inicial', 'suporteHardware')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/chip-microchip.svg" alt=""></div>
                <h3 class="title-card">Suporte Hardware</h3>
            </div>
            <div onclick="troca('inicial', 'suporteSoftware')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Group.svg" alt=""></div>
                <h3 class="title-card">Suporte Software</h3>
            </div>
            <div onclick="troca('inicial', 'cloud')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Group-1.svg" alt=""></div>
                <h3 class="title-card">Acesso Cloud</h3>
            </div>
            <div onclick="troca('inicial', 'suporteInfra')" class="card">
                <div class="card_yellow"><img src="/img/TelaInicialInicio/Chat, Messages, Bubble, Question.svg" alt=""></div>
                <h3 class="title-card">Acesso Infraestrutura</h3>
            </div>
            <div onclick="troca('inicial', 'proAdmin')" class="card">
                <div class="card_yellow"> <img src="/img/TelaInicialInicio/user-profile.14.svg" alt=""></div>
                <h3 class="title-card">Processos Administrativos</h3>
            </div>
        </div>

    </div>

    <!-- FINAL -- Tela Inicial -->

    <!-- INICIO -- Tela APP Entregador -->

    <div id="appEntregador" class="wrapper" id="appEntregador">
        <div class="APP_Entregador">
            <div onclick="troca('appEntregador', 'falha')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorInicio/Vector.svg" alt=""></div>
                <h3 class="title-card">Falha</h3>
            </div>
            <div onclick="troca('appEntregador', 'financeiro')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorInicio/Dollar.svg"></div>
                <h3 class="title-card">Financeiro</h3>
            </div>
            <div onclick="troca('appEntregador', 'cadastro')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorInicio/Group-1.svg" alt=""></div>
                <h3 class="title-card">Cadastro</h3>
            </div>
        </div>
    </div>

    <!-- FALHA -->
    <div id="falha" class="wrapper">
        <div  class="container_falha">
            <div onclick="troca('falha', 'fim','app Não funciona')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/Mobile, Devices.svg" alt=""></div>
                <h3 class="title-card">App não funciona</h3>
            </div>
            <div onclick="troca('falha', 'fim','App não notifica o pedido')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/mobile-cross-delete_1.svg"></div>
                <h3 class="title-card">App não notifica pedido</h3>
            </div>
            <div onclick="troca('falha', 'fim','app não recebe pedidos')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/mobile-lock.svg" alt=""></div>
                <h3 class="title-card">App não recebe pedidos</h3>
            </div>
            <div onclick="troca('falha', 'fim','Pedido não finaliza')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/basket-delete-cross.svg" alt=""></div>
                <h3 class="title-card">Pedido não finaliza</h3>
            </div>
            <div onclick="troca('falha', 'fim','não é possivel fica')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/Mobile, Devices, Wifi.svg" alt=""></div>
                <h3 class="title-card">Não é possivel ficar online </h3>
            </div>
            <div onclick="troca('falha', 'fim','Falha na utilização do app')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/mobile-hand.svg" alt=""></div>
                <h3 class="title-card">Falha na utilização do app</h3>
            </div>
            <div onclick="troca('falha', 'fim','Cobrança indevida')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorFalha/Hand, Arm, Coins.svg" alt=""></div>
                <h3 class="title-card">Cobrança indevida</h3>
            </div>
            <div onclick="troca('falha', 'fim','Falha na retirada do saldo')" class="card">
                <div class="card_yellow"> <img src="/img/AppEntregadorFalha/arcticons_google.svg" alt=""></div>
                <h3 class="title-card">Falha na retirada do saldo</h3>
            </div>
        </div>
    </div>

    <!-- CADASTRO -->
    <div id="cadastro" class="wrapper">
        <div class="container_cadastro">
            <div onclick="troca('cadastro', 'fim','Alteração de dados do entregador')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorCadastro/single-user-edit-pen.svg" alt=""></div>
                <h3 class="title-card">Alteração de dados do entregador</h3>
            </div>
            <div onclick="troca('cadastro', 'fim','Alteração de senha do entregador')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorCadastro/single-user-key-protection.svg"></div>
                <h3 class="title-card">Alteração de senha do entregador</h3>
            </div>
            <div onclick="troca('cadastro', 'fim','ajuste no ranking')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorCadastro/cup-2.svg" alt=""></div>
                <h3 class="title-card">Ajuste no Ranking</h3>
            </div>
            <div onclick="troca('cadastro', 'fim','Ajuste nos pontos')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorCadastro/Medal, Prize, Reward.svg" alt=""></div>
                <h3 class="title-card">Ajuste nos pontos</h3>
            </div>
            <div onclick="troca('cadastro', 'fim','Vinculo de novos dispositvos')" class="card">
                <div class="card_yellow"><img src="/img/AppEntregadorCadastro/Group.svg" alt=""></div>
                <h3 class="title-card">Vinculo de novos dispositivos</h3>
            </div>
        </div>
    </div>

    <!-- FINANCEIRO -->
    <div id="financeiro" class="wrapper">
        <div class="container_financeiro">
            <div onclick="troca('financeiro', 'fim','Retirada simples')" class="card">
                <div class="card_yellow"><img src="/img/FinanceiroInicio/Dollar.svg" alt=""></div>
                <h3 class="title-card">Retirada simples</h3>
            </div>

            <div onclick="troca('financeiro', 'fim','Retirada simples')" class="card">
                <div class="card_yellow"><img src="/img/FinanceiroInicio/Group-1.svg"></div>
                <h3 class="title-card">Retirada rapida</h3>
            </div>
        </div>
    </div>
    <!-- FINAL -- Tela APP Entregador -->



    <!-- Sistema comerciante -->
    <div id="sisComerciante" class="wrapper">
        <div class="container_comerciante">

            <div onclick="troca('sisComerciante', 'comercianteFalha')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteInicio/erro.svg"></div>
                <h3 class="title-card">Falha</h3>
            </div>

            <div onclick="troca('sisComerciante', 'sistemaComercianteCadastro')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteInicio/cadastro.svg"></div>
                <h3 class="title-card">Cadastro</h3>
            </div>

            <div onclick="troca('sisComerciante', 'comerciante_outros')"  class="card">
                <div class="card_yellow"><img src="/img/ComercianteInicio/menu-dots.svg" alt=""></div>
                <h3 class="title-card">Outros</h3>
            </div>

        </div>
    </div>

    <!-- Sistema comerciante Cadastro -->
    <div id="sistemaComercianteCadastro" class="wrapper">
        <div class="container_cadastro_comer">
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Nova integração')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/users-profile-group.svg" alt=""></div>
                <h3 class="title-card">Nova Integração</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Configuração de integração')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/User, Profile.svg"></div>
                <h3 class="title-card">Configuração de Integração</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Redefinição de senha')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/store-key-lcok.svg" alt=""></div>
                <h3 class="title-card">Redefinição de senha
                    do usuário da loja</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Criação de usuario')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/store-user.svg" alt=""></div>
                <h3 class="title-card">Criação de usuário
                    da loja</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Alteração de dados')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/store-refresh-arrows.svg" alt=""></div>
                <h3 class="title-card">Alteração de dados
                    básico do comércio</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Aleração do endereço do comercio')" class="card">
                <div class="card_yellow"><img src="/img/ComercianteCadastro/store-pin.svg" alt=""></div>
                <h3 class="title-card">Alteração do endereço do comércio</h3>
            </div>
        </div>
    </div>


    <!-- Sistema comerciante Falha-->
    <div id="comercianteFalha" class="wrapper">
        <div class="container_falha_comer">
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Sistema comerciante não funciona')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/Browser, Internet, Web, Network, Window, Warning.svg" alt=""></div>
                <h3 class="title-card">Sistema Comerciante
                    não funciona</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Lentidão no sistema comerciante')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/arcticons_clock.svg"></div>
                <h3 class="title-card">Lentidão no
                    Sistema Comerciante</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Falja na integraçao')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/users-profile-group-delete.svg" alt=""></div>
                <h3 class="title-card">Falha na integração</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Falha na criação de pedidos manuais')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/users-profile-group-delete.svg" alt=""></div>
                <h3 class="title-card">Falha na criação de
                    pedido manuais</h3>
            </div>
            <div  onclick="troca('sistemaComercianteCadastro', 'fim','Falha na inserção de dados')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/money-banknote-arrow.svg" balt=""></div>
                <h3 class="title-card">Falha na inserção de saldo</h3>
            </div>
            <div onclick="troca('sistemaComercianteCadastro', 'fim','Falha na utilização dos sistemas')" class="card">
                <div class="card_yellow"><img src="/img/SistemaComercianteFalha/Server, Databases, Failure, Delete.svg" alt=""></div>
                <h3 class="title-card">Falha na utilização dos Sistemas</h3>
            </div>
        </div>
    </div>

    <!-- FINAL sistema do comerciante -->

    <!-- INICIO -- Google Workspace -->
    <div id="googleWorkspace" class="wrapper">
        <div class="container_Workspace">
            <div class="card" onclick="troca('googleWorkspace', 'fim','Criação de usuario Google')">
                <div class="card_yellow"><img src="/img/GoogleWorkspaceInicio/user-profile-add-circle.svg" alt=""></div>
                <h3 class="title-card">Criação de usuário google</h3>
            </div>
            <div class="card" onclick="troca('googleWorkspace', 'fim','Exclusão de usuario Google')">
                <div class="card_yellow"><img src="/img/GoogleWorkspaceInicio/single-user-minus-delete-remove.svg"></div>
                <h3 class="title-card">Exclusão de usuário google </h3>
            </div>
            <div class="card" onclick="troca('googleWorkspace', 'fim','Definição grupos do usuario')">
                <div class="card_yellow"><img src="/img/GoogleWorkspaceInicio/user-profile-group.svg" alt=""></div>
                <h3 class="title-card">Definição grupos do usuário</h3>
            </div>
            <div class="card" onclick="troca('googleWorkspace', 'fim','Criação de email processo')">
                <div class="card_yellow"><img src="/img/GoogleWorkspaceInicio/Email, @,.svg" alt=""></div>
                <h3 class="title-card">Criação de e-mail processo</h3>
            </div>
            <div class="card" onclick="troca('googleWorkspace', 'fim','Exclusão de email processo')">
                <div class="card_yellow"><img src="/img/GoogleWorkspaceInicio/Email, Mail, Disable, Delete.svg" balt=""></div>
                <h3 class="title-card">Exclusão de e-mail de processo</h3>
            </div>
        </div>
    </div>
    <!-- FINAL -- Workspace -->

    <!-- INICIO -- Suporte Hardware -->
    <div id="suporteHardware" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('suporteHardware', 'fim','Mouse')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/Mouse.svg" alt=""></div>
                <h3 class="title-card">Mouse</h3>
            </div>

            <div class="card" onclick="troca('suporteHardware', 'fim','Teclado')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/Keyboard.svg"></div>
                <h3 class="title-card">Teclado</h3>
            </div>
            <div class="card" onclick="troca('suporteHardware', 'fim','Monitor')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/monitor.svg" alt=""></div>
                <h3 class="title-card">Monitor</h3>
            </div>
            <div class="card" onclick="troca('suporteHardware', 'fim','CPU')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/Iphone, Mobile, Phone.svg" alt=""></div>
                <h3 class="title-card">CPU</h3>
            </div>
            <div class="card" onclick="troca('suporteHardware', 'fim','Notebook')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/laptop.svg" alt=""></div>
                <h3 class="title-card">Notebook</h3>
            </div>
            <div class="card" onclick="troca('suporteHardware', 'fim','Celular')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/iphone.svg" alt=""></div>
                <h3 class="title-card">Celular</h3>
            </div>
            <div class="card" onclick="troca('suporteHardware', 'fim','Tablet')">
                <div class="card_yellow"><img src="/img/SuporteHardwareInicio/ipad.svg" alt=""></div>
                <h3 class="title-card">Tablet</h3>
            </div>
        </div>

    </div>

    <!-- FINAL -- Hardware -->

    <!-- INICIO -- Suporte Software -->
    <div id="suporteSoftware" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('suporteSoftware', 'fim','Lentidão no sistema')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/arcticons_clock.svg" alt=""></div>
                <h3 class="title-card">Lentidão no sistema</h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Configurações diversas')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/Settings.svg"></div>
                <h3 class="title-card">Configurações diversas</h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Instalação software')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/Download, Save, Upload.svg" alt=""></div>
                <h3 class="title-card">Instalação software </h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Instalação de impressoras')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/printer.svg" alt=""></div>
                <h3 class="title-card">Instalação de
                    impressoras</h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Celular-software')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/mobile-checkmark.svg" alt=""></div>
                <h3 class="title-card">Celular - Software</h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Tablet software')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/ipad.svg" alt=""></div>
                <h3 class="title-card">Tablet - Software</h3>
            </div>
            <div class="card" onclick="troca('suporteSoftware', 'fim','Outros software')">
                <div class="card_yellow"><img src="/img/SuporteSoftwareInicio/menu-dots.svg" alt=""></div>
                <h3 class="title-card">Outros - Software</h3>
            </div>
        </div>
    </div>

    <!-- FINAL -- Software -->

    <!-- INICIO -- Acesso cloud -->

    <div id="cloud" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('cloud', 'fim','Liberação a acesso a pastas compartilhadas')">
                <div class="card_yellow"><img src="/img/AcessoCloudInicio/Folder, Edit, Rename.svg" alt=""></div>
                <h3 class="title-card">Liberação a acesso a pastas compartilhadas</h3>
            </div>
            <div class="card" onclick="troca('cloud', 'fim','Bloqueio ao acesso a pastas compartilhadas')">
                <div class="card_yellow"><img src="/img/AcessoCloudInicio/folder-lock.svg"></div>
                <h3 class="title-card">Bloqueio ao acesso a pastas compartilhadas</h3>
            </div>
        </div>
    </div>

    <!-- FINAL -- cloud -->

    <!-- INICIO --Suporte Infraestrutura -->

    <div id="suporteInfra" class="wrapper">
        <div class="container_infra">
            <div class="card" onclick="troca('suporteInfra', 'fim','TV')">
                <div class="card_yellow"><img src="img/SuporteHardwareInicio/monitor.svg" alt=""></div>
                <h3 class="title-card">TV</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Chromecast')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/applewatch.svg"></div>
                <h3 class="title-card"> Chromecast</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Case Notebook')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/Computer, Laptop.svg" alt=""></div>
                <h3 class="title-card">Case Notebook </h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/mac-pro.svg" alt=""></div>
                <h3 class="title-card">Suporte Notebook</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','FIltro de linha')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/cable-charging.svg" alt=""></div>
                <h3 class="title-card">Filtro de Linha</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Extensão Elétrica')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/Group.svg" alt=""></div>
                <h3 class="title-card">Extensão Elétrica</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Cabo HDMI')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/usb-cable-1.svg" alt=""></div>
                <h3 class="title-card">Cabo HDMI</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Cabo VGA')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/cable-usb.svg" alt=""></div>
                <h3 class="title-card">Cabo VGA</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Aptador HDMI x VGA')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/Group.svg" alt=""></div>
                <h3 class="title-card">Adaptador <br>
                    “HDMI x VGA”</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Mouse Pad')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/image 1.svg" alt=""></div>
                <h3 class="title-card">Mouse Pad</h3>
            </div>
            <div class="card" onclick="troca('suporteInfra', 'fim','Cabo de energia desktop')">
                <div class="card_yellow"><img src="img/SuporteInfraInicio/cable-charging-1.svg" alt=""></div>
                <h3 class="title-card">Cabo de Energia Desktop</h3>
            </div>
        </div> 
        
    </div> 
    <!-- FINAL -- Infra --> 
    

    <!-- INICIO -- Processos Administrativos -->
    <div id="proAdmin" class="wrapper">
        <div class="container_adm">
            <div  onclick="troca('proAdmin', 'pg','Colaborador Admissão')" class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/User,Profile.svg" alt=""></div>
                <h3 class="title-card">Colaborador / Admissão</h3>
            </div>
            <div onclick="troca('proAdmin', 'pg','Colaborador desligamento')"  class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/User,Profile-1.svg"></div>
                <h3 class="title-card">Colaborador / Desligamento</h3>
            </div>
            <div onclick="troca('proAdmin', 'pg','Colaborador Movimentação')" class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/Single, User, Enter.svg" alt=""></div>
                <h3 class="title-card">Colaborador / Movimentação </h3>
            </div>
            <div onclick="troca('proAdmin', 'pg','Solicitações')" class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/Messages, Chat.svg" alt=""></div>
                <h3 class="title-card">Solicitações </h3>
            </div>
            <div onclick="troca('proAdmin', 'pg','Devoluções')" class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/Messages, Chat-1.svg" alt=""></div>
                <h3 class="title-card">Devoluções</h3>
            </div>
            <div onclick="troca('proAdmin', 'pg','Movimentação')" class="card">
                <div class="card_yellow"><img src="img/Processos AdministrativosInicio/Arrows.svg" alt=""></div>
                <h3 class="title-card">Movimentação</h3>
            </div>
        </div>
    </div>
    <!-- FINAL -- ADM -->

    <!-- INICIO -- Sistema box -->

    <div id="sistemaBox" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('sistemaBox', 'sistemaBoxFalha')">
                <div class="card_yellow"><img src="img/SistemaBoxInicio/fluent_error-circle-20-regular.svg" alt=""></div>
                <h3 class="title-card">Falha</h3>
            </div>
            <div class="card" onclick="troca('sistemaBox', 'sistemaBoxOutros')">
                <div class="card_yellow"><img src="img/SistemaBoxInicio/menu-dots.svg"></div>
                <h3 class="title-card">Outros</h3>
            </div>
        </div>
    </div>

    <!-- FALHA -- Sistema box -->

    <div id="sistemaBoxFalha" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('sistemaBoxFalha', 'fim','Sistema não funciona')">
                <div class="card_yellow"><img src="img/BackOfficeFalha/Browser, Internet, Web, Network, Window, Warning.svg" alt=""></div>
                <h3 class="title-card">Sistema não funciona</h3>
            </div>
            <div class="card" onclick="troca('sistemaBoxFalha', 'fim','Lentidão no sistema')">
                <div class="card_yellow"><img src="img/SistemaBoxFalha/arcticons_clock.svg"></div>
                <h3 class="title-card">Lentidão no sistema</h3>
            </div>
        </div>
    </div>

    <!-- OUTROS -- Sistema box -->

    <div id="sistemaBoxOutros" class="wrapper">
        <div class="container_hardware">
            <div class="card" onclick="troca('sistemaBoxOutros', 'fim','Apoio técninco em negociação comercial')">
                <div class="card_yellow"><img src="img/SItemaBoxOutros/checklist-pen-checkmark.svg" alt=""></div>
                <h3 class="title-card">Apoio técnico em negociação comercial</h3>
            </div>
            <div class="card" onclick="troca('sistemaBoxOutros', 'fim','Nova funcionalidade do sistema')">
                <div class="card_yellow"><img src="img/SItemaBoxOutros/sticker-add-plus.svg" alt=""></div>
                <h3 class="title-card">Nova funcionalidade do sistema</h3>
            </div>
            <div class="card" onclick="troca('sistemaBoxOutros', 'fim','Novo parceiro para integraçao')">
                <div class="card_yellow"><img src="img/SItemaBoxOutros/user-profile-add-circle.svg" alt=""></div>
                <h3 class="title-card">Novo parceiro para integração</h3>
            </div>
            <div class="card" onclick="troca('sistemaBoxOutros', 'fim','Duvidas sobre o funcionamento do sistema')">
                <div class="card_yellow"><img src="img/SItemaBoxOutros/Messages, Chat, Question.svg"></div>
                <h3 class="title-card">Dúvidas sobre o funcionamento do sistema</h3>
            </div>
        </div>
    </div>

    <!-- FINAL -- Sistema box -->

    <!--INICIO --   office -->

    <div id="back" class="wrapper">
        <div class="container_hardware">

            <div onclick="troca('back', 'backofficeFalha')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeInicio/fluent_error-circle-20-regular.svg" alt=""></div>
                <h3 class="title-card">Falha</h3>
            </div>

            <div onclick="troca('back', 'backofficeCadastro')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeInicio/Group.svg" alt=""></div>
                <h3 class="title-card">Cadastro</h3>
            </div>

            <div onclick="troca('back', 'backofficeConfig')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeInicio/Setting, Edit, Filter, Gear.svg" alt=""></div>
                <h3 class="title-card">Configuração</h3>
            </div>

            <div onclick="troca('back', 'backofficeOutros')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeInicio/menu-dots.svg"></div>
                <h3 class="title-card">Outros</h3>
            </div>

        </div>
    </div>

    <!-- Backoffice - Falha -->

    <div id="backofficeFalha" class="wrapper">
        <div class="container_back_falha">
            <div onclick="troca('backofficeFalha', 'fim','Backoffice não funciona')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeFalha/Browser, Internet, Web, Network, Window, Warning.svg" alt=""></div>
                <h3 class="title-card">Backoffice não funciona</h3>
            </div>

            <div onclick="troca('backofficeFalha', 'fim','Lentidão no backoffice')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeFalha/arcticons_clock.svg" alt=""></div>
                <h3 class="title-card">Lentidão no Backoffice</h3>
            </div>
            <div onclick="troca('backofficeFalha', 'fim','Pedido não encontrado')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeFalha/users-profile-group-delete.svg" alt=""></div>
                <h3 class="title-card">Pedido não encontrado</h3>
            </div>
            <div onclick="troca('backofficeFalha', 'fim','Comercio não encontrado')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeFalha/basket-delete-cross.svg" alt=""></div>
                <h3 class="title-card">Comércio não encontrado</h3>
            </div>
            <div onclick="troca('backofficeFalha', 'fim','Falha na utilizaçãp do backoffice')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeFalha/money-banknote-arrow.svg"></div>
                <h3 class="title-card">Falha na utilização do Backoffice</h3>
            </div>
        </div>
    </div>
    
    <!-- Backoffice - Cadastro -->


    <div id="backofficeCadastro" class="wrapper">
        <div class="container_hardware">
            <div onclick="troca('backofficeCadastro', 'fim','Criação de usuario')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeCadastro/users-profile-group.svg" alt=""></div>
                <h3 class="title-card">Criação de usuário</h3>
            </div>
            <div onclick="troca('backofficeCadastro', 'fim','Alteração de acessos')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeCadastro/User, Profile.svg" alt=""></div>
                <h3 class="title-card">Alteração de acessos</h3>
            </div>
            <div onclick="troca('backofficeCadastro', 'fim','Exclusão de usuarios')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeCadastro/single-user-minus-delete-remove.svg" alt=""></div>
                <h3 class="title-card">Exclusão de usuários</h3>
            </div>
            <div onclick="troca('backofficeCadastro', 'fim','Redefiniçãp de senha')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeCadastro/Key.svg"></div>
                <h3 class="title-card">Redefinição de senha</h3>
            </div>
        </div>
    </div>

    <!-- Backoffice - Configurações -->

    <div id="backofficeConfig" class="wrapper">
        <div class="container_hardware">
            <div onclick="troca('backofficeConfig', 'fim','Configurações da tabela de destino')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Grid, Layout.svg" alt=""></div>
                <h3 class="title-card">Configurações da tabela de destino</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuraçções da tabela de taxas')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Grid, Layout-1.svg" alt=""></div>
                <h3 class="title-card">Configurações da tabela de taxas</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de flags de acessos')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Flag.svg" alt=""></div>
                <h3 class="title-card">Configuração de Flags de acessos</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de blacklist')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/List, Numbers.svg" alt=""></div>
                <h3 class="title-card">Configuração de Blacklist</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de whitelist')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/List, Do list, Checkmark.svg" alt=""></div>
                <h3 class="title-card">Configuração de Whitelist</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de ranking')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Сup.svg" alt=""></div>
                <h3 class="title-card">Configuração de Ranking</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de roleta premiada')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Medal, Prize, Reward.svg" alt=""></div>
                <h3 class="title-card">Configuração de Roleta Premiada</h3>
            </div>
            <div onclick="troca('backofficeConfig', 'fim','Configuração de pontos')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeConfigurações/Medal, Prize, Reward-1.svg"></div>
                <h3 class="title-card">Configuração de Pontos</h3>
            </div>
        </div>
    </div>

    <!-- Backoffice - Outros -->

    <div id="backofficeOutros" class="wrapper">
        <div class="container_hardware">
            <div onclick="troca('backofficeOutros', 'fim','Financeiro entregador')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Coins.svg" alt=""></div>
                <h3 class="title-card">Financeiro entregador</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Operador Logistico/Clã')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Сup.svg" alt=""></div>
                <h3 class="title-card">Operador logístico/Clã</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Disparo de SMS')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Chat, Messages.svg" alt=""></div>
                <h3 class="title-card">Disparo de SMS</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Disparo de Pushs no app')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Chat, Messages, Add.svg" alt=""></div>
                <h3 class="title-card">Disparo de Pushs no App</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Solicitação de relatorios')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Calendar, Schedule.svg" alt=""></div>
                <h3 class="title-card">Solicitação de relatórios</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Financeiro loja')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/money-banknote-bank.svg" alt=""></div>
                <h3 class="title-card">Financeiro loja</h3>
            </div>
            <div onclick="troca('backofficeOutros', 'fim','Registro de ocorrencias')" class="card">
                <div class="card_yellow"><img src="img/BackOfficeOutros/Chat, Messages, Bubble, Circle.svg"></div>
                <h3 class="title-card">Registro de ocorrências</h3>
            </div>
        </div>
    </div>
    <div id="comerciante_outros" class="wrapper">
        <div class="container_outros">
            <div onclick="troca('comerciante_outros', 'fim','Configuraçao de roterização')" class="card">
                <div class="card_yellow"><img src="img/SistemaComercianteOutros/presentation-board-text-chart.svg" alt=""></div>
                <h3 class="title-card">Configuração de roteirização</h3>
            </div>
            <div onclick="troca('comerciante_outros', 'fim','Configuração de agrupamento')" class="card">
                <div class="card_yellow"><img src="img/SistemaComercianteOutros/Basket, Pack.svg" alt=""></div>
                <h3 class="title-card">Configuração de agrupamento</h3>
            </div>
            <div onclick="troca('comerciante_outros', 'fim','Configuração de despacho')" class="card">
                <div class="card_yellow"><img src="img/SistemaComercianteOutros/Basket, Pack, Enter.svg" alt=""></div>
                <h3 class="title-card">Configuração de despacho</h3>
            </div>
            <div onclick="troca('comerciante_outros', 'fim','Opções de confirmação de retirada')" class="card">
                <div class="card_yellow"><img src="img/SistemaComercianteOutros/Basket.svg"></div>
                <h3 class="title-card">Opções de confirmação de retirada </h3>
            </div>
            <div onclick="troca('comerciante_outros', 'fim','Opções de confirmação de entrega')" class="card">
                <div class="card_yellow"><img src="img/SistemaComercianteOutros/Basket , Check mark.svg" alt=""></div>
                    <h3 class="title-card">Opções de confirmação de entrega</h3>
            </div>
        </div>
    </div>
     
    <!-- FINAL -- BackOffice -->
<div class="wrap-footer">
   
    
    <footer class="footer-main">
        <div class="div-footer">
            <p>
                O nome, Foto e o E-mail associados à sua Conta serão registrados ao enviar este formulário.
                exemplo@boxdelivery.com <a href="">Alterar Conta</a>
            </p>
        </div>  
    </footer>
    <form   id="formulario" onsubmit="trocar()" method="GET"  action="form">
    <input id="teste" value="111" name="inp"  type="hidden">
    <input id="pg_use" value="111" name="pg"  type="hidden">
    <input  id="but" class="segredo" value="Proximo" type="submit">
    </form>
</div>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleForm.css">
    <title>HOME | BoxDelivery</title>
</head>

<body>
    <header class="header-main">

    </header>

    </head>

    <body>
        <img src="img form/Right, Arrow.svg" alt="">
        <h3>Voltar</h3>
        <h1 class="one">Processos administrativos</h1>
        <h1 class="barra">|</h1>
        <h1 class="two">Colaborador/admissão</h1>
        <div class="wrapper">
            <div class="container">
                <div class="card">
                    <h1 class="name">Nome completo do funcionario, sem abreviações (tudo em caixa alta):</h1> <br>
                    <input type="text" class="inp_text">

                    <h1 class="cpf">CPF do Colaborador "sem ponto nem vírgula":</h1> <br>
                    <input type="number" class="inp_cpf">

                    <h1 class="cargo">Cargo:</h1>
                    <select class="cargo_select" id="cargo">
                          <option value="0">Selecione o cargo</option>
                          <option value="1">Tecnologia</option>
                          <option value="2">Financeiro</option>
                          <option value="3">Administração</option>
                          <option value="4">RH</option>
                          <option value="5">Operação</option>
                          <option value="6">Juridico</option>
                          <option value="7">Produto</option>
                    </select>

                    <h1 class="senioridade">Senioridade:</h1>
                    <select class="senioridade_select" id="senioridade">
                          <option value="0">Selecione sua senioridade</option>
                          <option value="1">Junior</option>
                          <option value="2">pleno</option>
                          <option value="3">Senior</option>
                    </select>


                    <h1 class="Local_de_trabalho">Local de trabalho:</h1>
                    <select class="Local_de_trabalho_select" id="Local_de_trabalho">
                          <option value="0">Selecione sua Local de trabalho</option>
                          <option value="1">Paulista</option>
                          <option value="2">Itapevi</option>
                          <option value="3">São Vicente</option>
                    </select>

                    <h1 class="cidade">Cidade / Estado:</h1>
                    <select class="cidade_select" id="cidade">
                          <option value="0">Selecione sua Cidade / Estado:</option>
                          <option value="1">SP</option>
                          <option value="2">RJ</option>
                          <option value="3">DF</option>
                    </select>

                    <h1 class="contratacao">Tipo de contratação:</h1>
                    <h1 class="contrat_um">CLT</h1> <input class="check_um" type="checkbox">
                    <h1 class="contrat_dois">PJ</h1> <input class="check_dois" type="checkbox">
                  
                    <h1 class="Área">Área:</h1>
                    <select class="Área_select" id="Área">
                          <option value="0">Selecione sua Área:</option>
                          <option value="1">tech</option>
                          <option value="2">jurid</option>
                          <option value="3">RH</option>
                    </select>

                    <h1 class="Sub_Área"> Sub Área:</h1>
                    <select class="Sub_Área_select" id="Sub_Área">
                          <option value="0">Selecione a Sub Área:</option>
                          <option value="1">estagio</option>
                          <option value="2">gerente</option>
                          <option value="3">dono</option>
                    </select>

                    <h1 class="date">Expectativa de inicio das atividades:</h1> <br>
                    <input type="date" class="inp_data">

                    <button class="botao">Proximo <img class="img_prox" src="img form/Right, Arrow.svg" alt=""></button>


                </div>
            </div>
        </div>


    </body>

</html>
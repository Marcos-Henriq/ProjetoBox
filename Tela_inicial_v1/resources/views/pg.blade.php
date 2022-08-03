<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="/css/pg.css">
    <title>HOME | BoxDelivery</title>
</head>
<script src="/js/scripts.js"></script>

<body>
    <header class="header-main">

    </header>

    </head>

    <body>
        <div class="container-stats">
            <div class="voltar"> <img src="" alt="">
            <h3 onclick="voltar()">Voltar</h3></div>
            <div class="stats">
               
            </div>
        </div>
    <form   method="GET" action="enviar">
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
                    <select name="cargo" id=""></select>
                        <span class="label" >Senioridade:</span>
                        <select name="senioridade" id=""></select>
                        <span class="label" >Local de Trabalho:</span>
                        <select name="local_trabalho" id=""></select>
                        <span class="label" >Cidade estado:</span>
                        <select name="cidade_estado" id=""></select>
                        
                        
                    </div>
                    <div class="section-left">
                        <span class="label" >Tipo de contratação</span>
                        <div class="section-chk">
                            <span class="label" >CLT</span><input id="chk"  value="CLT" name="chk_box" class="chk" type="radio">
                            <span  class="label" >PJ</span><input id="chk" value="PJ" name="chk_box" class="chk" type="radio">
                        </div>
                        <span class="label" >Local de Trabalho:</span>
                        <select name="" id=""></select>
                        <span class="label" >Cidade estado:</span>
                        <select name="" id=""></select>
                        <span class="label" >Expectativas de inicio de atividades</span>
                        <input placeholder="DD/MM/AAAA" class="inp-date" type="date">    
                        <div  class="div_finalizar">
                            <input type="submit" label="Continuar" onclick="check()" class="btn-finalizar">
                                </input>
                            </div>
                            
                        </div>

                    </div>
      </form>
            </div>
        </div>

        
    </body>
    
    </html>
    
    <script>
        function check(){
            var valor= document.querySelector('input[name="chk_box"]:checked').value
        }
    </script>
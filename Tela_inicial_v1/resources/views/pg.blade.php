<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="/css/pg.css">
    <title>HOME | BoxDelivery</title>
</head>

<body>
    <header class="header-main">

    </header>

    </head>

    <body>
        <?php
    $recebendo=explode(",",$recebendo);     
        ?>
        <div class="container-stats">
           <div class="voltar"> <img src="img/Right, Arrow.svg" alt="">
            <h3>Voltar</h3></div>
            <div class="stats">
 
               
            </div>
        </div>
        <form action="">
        <div class="wrapper">
            <div class="container">
                <div class="section-left">
                    <span class="label" >Nome Completo do funcionario, sem abreviações:</span>
                    <input type="text">
                    <span class="label" >CPF do Colaborador "Sem ponto e virgula"</span>
                    <input type="text">
                    <span class="label" >Cargos:</span>
                    <select name="" id=""></select>
                        <span class="label" >Senioridade:</span>
                        <select name="" id=""></select>
                        <span class="label" >Local de Trabalho:</span>
                        <select name="" id=""></select>
                        <span class="label" >Cidade estado:</span>
                        <select name="" id=""></select>
                        
                        
                    </div>
                    <div class="section-left">
                        <span class="label" >Tipo de contratação</span>
                        <div class="section-chk">
                            <span class="label" >CLT</span><input id="chk"  value="CLT" name="seila" class="chk" type="radio">
                            <span  class="label" >PJ</span><input id="chk" value="PJ" name="seila" class="chk" type="radio">
                        </div>
                        <span class="label" >Local de Trabalho:</span>
                        <select name="" id=""></select>
                        <span class="label" >Cidade estado:</span>
                        <select name="" id=""></select>
                        <span class="label" >Expectativas de inicio de atividades</span>
                        <input placeholder="DD/MM/AAAA" class="inp-date" type="date">    
                        <div  class="div_finalizar">
                            <button onclick="reita()" class="btn-finalizar">Continuar
                                </button>
                            </div>
                            
                        </div>

                    </div>
                </form>
            </div>
        </div>

        
    </body>
    
    </html>
    
    <script>
        function reita(){
            var valor= document.getElementById("chk").value
        alert(valor)
        }
    </script>
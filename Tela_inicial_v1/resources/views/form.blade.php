<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário</title>
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <script src="/js/scripts.js"></script>
  <link rel="stylesheet" href="/css/style.css" />

</head>

<body >
  <?php

  $casos=['googleWorkspace','suporteHardware','suporteSoftware','cloud','suporteInfra','proAdmin'];
  $type2=false;
    $recebendo=explode(",",$recebendo);     
  if(in_array($recebendo[0],$casos)){
    $um=$recebendo[0];
    $dois=$recebendo[1];
    $tres=$recebendo[count($recebendo)-1];
    $type2=true;
  }else if(count($recebendo)>= 3){
    $um=$recebendo[0];
    $dois=$recebendo[1];
    $tres=$recebendo[count($recebendo)-1];

  };
  
  ?><br>

  <?php
  class Caminho {
    public $parteUm;
    public $parteDois;
    public $parteTres;

    public function __construct($parteUm,$parteDois,$parteTres){
      $this->parteUm = $parteUm;
      $this->parteDois = $parteDois;
      $this->parteTres = $parteTres;
    }
    public function mostrarDados(){
      return $this->parteUm.$this->parteDois.$this->parteTres;
    }

    /* 'parte_um' => $recebendo[0],
    'parte_dois' => $recebendo[1],
    'parte_tres' => $recebendo[count($recebendo)-1] */
  };

  $caminho = new Caminho(
    $um,
    $dois,
    $tres
  );
  
  ?>

  <!--Header-->
  <div class="header"></div>
  <!--Banner-->
<div id="caminho" ></div>
<span  onclick="voltar()" class="voltar_form" >Voltar</span> 
  <div class="wrapper">

    <main class="content-main">
      
      <div class="header-form">
        <a href="" class="header-link"><img width="25px" src="../Telas/img src/bi_arrow-left-short.svg" alt=""><span> Voltar</span></a>
        <div class="container-route">
  
        </div>
      </div>
      <div class="container-form">
      <span class="text-path">

      @if($type2)
      {{$caminho->parteUm}} >
      {{$caminho->parteTres}} 
      @else
      {{$caminho->parteUm}} >
      {{$caminho->parteDois}} >
      {{$caminho->parteTres}}
      @endif

    </span>
        <div class="input-box">
          <label for="idDesc" class="title-text-form">Adicionar observação :</label>
          <textarea class="textarea" name="" id="idDesc" cols="30" rows="10"   placeholder="Escreva aqui..."></textarea>
        </div>

        <p class="title-text-form">Arquivos (opcional)</p>
        <form action="upload.php" class="dropzone" id="meuPrimeiroDropzone">
          <div class="fallback">
            <input name="fileToUpload"   type="file" multiple />
          </div>
        </form>
        <button class="btn_finalizar">Finalizar</button>
      </div>
    </main>
  </div>



</body>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

</html>

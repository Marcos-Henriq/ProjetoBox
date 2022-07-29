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

<body>
  <?php
  $recebendo=explode(",",$recebendo);
  echo $recebendo[0];?><br>
  <?php
  echo $recebendo[1];
  ?>

  <!--Header-->
  <div class="header"></div>
  <!--Banner-->
<div id="caminho" ></div>
  <div class="wrapper">

    <main class="content-main">
      <div class="header-form">
        <a href="" class="header-link"><img width="25px" src="../Telas/img src/bi_arrow-left-short.svg" alt=""><span> Voltar</span></a>
        <div class="container-route">
  
        </div>
      </div>
      <div class="container-form">
        <div class="input-box">
          <label for="idDesc" class="title-text-form">Adicionar observação :</label>
          <textarea class="textarea" name="" id="idDesc" cols="30" rows="10"   placeholder="Escreva aqui..."></textarea>
        </div>

        <p class="title-text-form">Arquivos (opcional)</p>
        <form action="upload.php" class="dropzone" id="meuPrimeiroDropzone">
          <div class="fallback">
            <input name="fileToUpload" type="file" multiple />
          </div>
        </form>
        <button class="btn btn-primary-80">Finalizar</button>
      </div>
    </main>
  </div>



</body>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

</html>
<script>
  var caminho= sessionStorage.getItem('caminho')
  caminho=JSON.parse(caminho)
  var item_um=sessionStorage.caminho 
  caminho.  innerHTML=caminho[0]  
  caminho.innerHTML=caminho[0]
</script>


  
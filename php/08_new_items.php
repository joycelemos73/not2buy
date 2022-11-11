<?php

    include 'barra_lateral.php';
    $item = new BarraLateral();
    $barra_lateral = $item->exibirTodos()

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOT2BUY</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="body_cadastros">

  <header>
    <div class="barra-menu">
    <img class="logo-branca" src="logo-branca.png" alt="Logo da Not2Buy">
      <ul class="links-menu">
        <li class="item-menu"><a href="04_pagina_inicial_logada.php">Home</a></li>
        <li class="item-menu"><a href="05_itens.php">Categorias</a></li>
        <li class="item-menu"><a href="06_carrinho.php">Carrinho</a></li>
      </ul>
    </div>
  </header>

  <section class="barra-lateral-navegacao">
      <nav class="navegacao_lateral">
          <ul>
              <?php foreach ($barra_lateral as $item) : ?>
                  <li>
                      <a href="<?php echo $item['link']; ?>">
                          <?php echo $item['titulo']; ?>
                      </a>
                  </li>
              <?php endforeach; ?>
          </ul>
      </nav>
    
    <article class="descricao-pagina">
      <h1>Cadastrar novos itens</h1>
      <p>Aqui você poderá cadastrar novos itens que você queira emprestar para outras pessoas</p>

        <form class=formulario-cadastrar-item action="formulario-perfil-cadastrar-item.php" method="post">
   
          <label for="descricao-item">Descrição do item<label>
          <input type="" id="descricao-item" name="descricao-item" class="input-padrao-perfil" required placeholder="Descrição do item"/>
    
          <label for="valor">Valor<label>
          <input type="number" id="valor" name="valor" class="input-padrao-perfil" required placeholder="R$0,00"/>
    
          <label for="foto-item-cadastro">Foto do item<label>
          <input type="file" id="foto-item-cadastro" class="input-padrao-perfil" required placeholder="Adicione uma foto ao item"/>
    
          <div class="botoes-pronto">
            <input type="submit" value="Pronto!" class="pronto" />
          </div>
        </form>

    </article>
  </section>

  </body>
  </html>
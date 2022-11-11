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
      <h1>Atualizar dados</h1>
      <p>Aqui você poderá alterar seus dados cadastrais como endereço de entrega, dados do seu cartão de crédito e telefone</p>

        <form class=formulario-perfil action="formulario-perfil-atualizar-dados.php" method="post">
   
          <label for="nomecompleto">Nome completo<label>
          <input type="text" id="nomecompleto" name="nomecompleto" class="input-padrao-perfil" required placeholder="Nome completo"/>
    
          <label for="endereco">Endereço<label>
          <input type="text" id="endereco" name="endereco" class="input-padrao-perfil" required placeholder="Endereço"/>
    
          <label for="cpf">Telefone<label>
          <input type="number" id="telefone" name="telefone" class="input-padrao-perfil" required placeholder="Telefone"/>
    
          <label for="email">Email<label>
          <input type="email" id="email" name="email" class="input-padrao-perfil" required placeholder="seuemail@dominio.com" />
    
          <label for="senha">Cartão de crédito<label>
          <input type="number" id="cartao_credito" name="cartao_credito" class="input-padrao-perfil" required placeholder="**** **** **** ****"/>
   
          <div class="botoes-pronto">
            <input type="submit" value="Pronto!" class="pronto" />
          </div>
        </form>

    </article>
  </section>

  </body>
  </html>
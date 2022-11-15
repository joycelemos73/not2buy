<?php

    require "includes/autentica.php";

    include "includes/topo.php";

    include 'includes/barra_lateral.php';

?>


<body class="body_cadastros">

<header>
    <div class="barra-menu">
        <img class="logo-branca" src="logo-branca.png" alt="Logo da Not2Buy">
        <ul class="links-menu">
            <li class="item-menu"><a href="04_pagina_inicial_logada.php">Home</a></li>
            <li class="item-menu"><a href="05_itens.php">Categorias</a></li>
            <li class="item-menu"><a href="06_carrinho.php">Carrinho</a></li>
            <li class="item-menu"><a href="08_new_items.php">Perfil</a></li>
        </ul>
    </div>
</header>

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>


      <article class="descricao-pagina">
      <h1>Cadastrar novos itens</h1>
      <p>Aqui você poderá cadastrar novos itens que você queira emprestar para outras pessoas</p>

        <form enctype="multipart/form-data" class=formulario-cadastrar-item action="08_new_items_formulario.php" method="post">

            <label for="descricao-item">Título<label>
            <input type="text" id="titulo_item" name="titulo_item" class="input-padrao-perfil" required placeholder="Título do item"/>

            <label for="descricao-item">Descrição do item<label>
            <input type="text" id="descricao_item" name="descricao_item" class="input-padrao-perfil" required placeholder="Descrição do item"/>
    
              <label for="valor">Valor<label>
              <input type="number" id="preco_item" name="preco_item" class="input-padrao-perfil" required placeholder="R$0,00"/>

              <label for="foto-item-cadastro">Foto do item<label>
              <input type="file" id="foto-item-cadastro" class="input-padrao-perfil" placeholder="Adicione uma foto ao item"/>
    
          <div class="botoes-pronto">
              <button type="submit" class="pronto">Pronto! </button>
          </div>
        </form>

    </article>
  </section>

  </body>
  </html>
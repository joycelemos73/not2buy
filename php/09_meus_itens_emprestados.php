<?php

    require "includes/autentica.php";

    include "includes/topo.php";


    include 'includes/barra_lateral.php';

?>

<body>
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
      <h1>Meus itens emprestados</h1>
      <p>Aqui você poderá ver os seus itens que foram emprestados e quando irá recebê-los de volta</p>
            <table class="meus_itens_emprestados-tabela">
              <thead>
                <tr>
                  <td>Seu item</td>
                  <td>Quem pegou emprestado</td>
                  <td>Quando será a devolução</td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>David Abreu</td>
                  <td>Até o dia 3/11</td>
                </tr>

                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>Joana Claudia</td>
                  <td>Até o dia 15/11</td>
                </tr>

                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>João Silva</td>
                  <td>Até o dia 23/11</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" align="right"> <td><a href="#" class="botao-entrar-em-contato">Entre em contato</a></td></td>
                </tr>
              </tfoot>
            </table>
    </article>
  </section>

</body>
</html>
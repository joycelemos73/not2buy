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
            <li class="item-menu"><a href="07_atualizar_dados.php">Perfil</a></li>
        </ul>
    </div>
</header>

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>


      <article class="descricao-pagina">
      <h1>Devolução</h1>
      <p>Aqui você poderá ver os itens que você pegou emprestado e quando terá que devolvê-los</p>
            <table class="meus_itens_emprestados-tabela">
              <thead>
                <tr>
                  <td>Item</td>
                  <td>Quem é  o(a) dono(a)?</td>
                  <td>Quando será a devolução</td>
                  <td></td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>Ana Santos</td>
                  <td>Até o dia 3/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>

                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>Bianca Silva</td>
                  <td>Até o dia 15/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>

                <tr>
                  <td><img src="" class="meus_itens_emprestados-img"></td>
                  <td>Carla Pereira</td>
                  <td>Até o dia 23/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>
              </tbody>
            </table>
    </article>
  </section>


</body>
</html>
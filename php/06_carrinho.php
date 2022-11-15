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
      <h1>Meu carrinho</h1>
            <table class="carrinho-tabela">
              <thead>
                <tr>
                  <td></td>
                  <td>Produto</td>
                  <td>Preço</td>
                  <td>Devolução</td>
                  <td></td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><img src="" class="carrinho-item-imagem"></td>
                  <td>Casaco laranja</td>
                  <td>R$ 15,00</td>
                  <td>1 mês a partir da data do recebimento</td>
                  <td><a href="#" class="botao-remover-item">Remover item</a></td>
                </tr>

                <tr>
                  <td><img src="" class="carrinho-item-imagem"></td>
                  <td>Poncho</td>
                  <td>R$ 8,00</td>
                  <td>1 mês a partir da data do recebimento</td>
                  <td><a href="#" class="botao-remover-item">Remover item</a></td>
                </tr>

                <tr>
                  <td><img src="" class="carrinho-item-imagem"></td>
                  <td>Camiseta azul</td>
                  <td>R$ 8,00</td>
                  <td>2 meses a partir da data do recebimento</td>
                  <td><a href="#" class="botao-remover-item">Remover item</a></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" align="right">Total</td>
                  <td>R$ 31,00</td>
                </tr>
              </tfoot>
            </table>
            <div class="botao-confirmar-emprestimo">
              <input type="submit" value="Confirmar empréstimo" class="confirmar-emprestimos" />
            </div>
    </article>
  </section>

<?php

include "includes/rodape.php";

?>
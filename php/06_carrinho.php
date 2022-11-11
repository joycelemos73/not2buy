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

<body>
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
                  <td><img src="Rectangle10.png" class="carrinho-item-imagem"></td>
                  <td>Casaco laranja</td>
                  <td>R$ 15,00</td>
                  <td>1 mês a partir da data do recebimento</td>
                  <td><a href="#" class="botao-remover-item">Remover item</a></td>
                </tr>

                <tr>
                  <td><img src="Rectangle11.png" class="carrinho-item-imagem"></td>
                  <td>Poncho</td>
                  <td>R$ 8,00</td>
                  <td>1 mês a partir da data do recebimento</td>
                  <td><a href="#" class="botao-remover-item">Remover item</a></td>
                </tr>

                <tr>
                  <td><img src="Rectangle12.png" class="carrinho-item-imagem"></td>
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

   <footer class="rodape">
    <img src="logo-preta.png">
    <ul class="lista-rodape">
      <li class="rodape__titulo">Sobre nós</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
  </ul>

    <ul class="lista-rodape">
      <li class="rodape__titulo">Dúvidas Frequentes</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
    </ul>

    <ul class="lista-rodape">
      <li class="rodape__titulo">Fale Conosco</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
      <li class="rodape__item">Lorem ipsum</li>
    </ul>
  </footer>
</body>
</html>
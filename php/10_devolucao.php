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
                  <td><img src="Rectangle04.png" class="meus_itens_emprestados-img"></td>
                  <td>Ana Santos</td>
                  <td>Até o dia 3/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>

                <tr>
                  <td><img src="Rectangle05.png" class="meus_itens_emprestados-img"></td>
                  <td>Bianca Silva</td>
                  <td>Até o dia 15/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>

                <tr>
                  <td><img src="Rectangle06.png" class="meus_itens_emprestados-img"></td>
                  <td>Carla Pereira</td>
                  <td>Até o dia 23/11</td>
                  <td><input type="submit" value="Devolver agora" class="botao-devolver-agora"></td>
                </tr>
              </tbody>
            </table>
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
<?php

    include "includes/topo.php";
    include "includes/conecta.php";
    require "includes/autentica.php";

    //Monta o comando SQL para obter todos os itens
    $sql = "SELECT titulo_item, preco_item FROM cadastro_novos_itens";

    //Envia o código SQL para o MySQL
    $res = mysqli_query($conn, $sql);

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

  <section>
    <div class="banner-itens">
      <ul class="banner__titulo-itens">
        <li>Crie o seu próprio estilo </li>
        <li>e seja consciente</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="itens-disponiveis">
        <ul>
            <?php

            while ($row = mysqli_fetch_assoc($res))
            {

                echo
                    "<li>
                        <h1>". $row['titulo_item'] ."</h1>
                        <p class='itens-disponiveis_valor'>". $row['preco_item'] ."</p>
                        <input type='submit' value='Adicionar ao carrinho' class='add_cart' />
                        <a href='#' class='itens-disponiveis_detalhes'>Detalhes</a>
                        </li>";

            }

            ?>
        </ul>
    </div>
  </section>

<?php

include "includes/rodape.php";

?>
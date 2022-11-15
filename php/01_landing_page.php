<?php

    include "includes/topo.php";

?>

<body>
  <header>
    <div class="barra-menu">
    <img class="logo-branca" src="logo-branca.png" alt="Logo da Not2Buy">
      <ul class="links-menu">
        <li class="item-menu"><a href="01_landing_page.php">Home</a></li>
        <li class="item-menu"><a href="#">Categorias</a></li>
        <li class="item-menu"><a href="02_sign-up.php">Entrar</a></li>
      </ul>
    </div>
  </header>

  <section>
    <div class="banner">
      <ul class="banner__titulo">
        <li>Moda boa para seu bolso</li>
        <li>e para o planeta</li>
      </ul>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
      <a href="02_sign-up.php" class="botao-criar-conta-banner">Criar conta</a>
    </div>
  </section>

  
  
  <section class="blocos">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">A NOT2BUY é uma iniciativa 100% brasileira de 
        consumo consciente e moda sustentável</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
    </div>
    <img  src="brazil.png" alt="Desenho do mapa do Brasil" class="blocos__img">
  </section>
  
  <section class="blocos_imagem_background">
    <img src="#">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">O Brasil é o nono país do mundo entre os que mais gastam com compras de roupas e acessórios</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
      <a href="02_sign-up.php" class="botao-criar-conta">Criar conta</a>
    </div>
  </section>
  
  <section class="blocos">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">Compre menos, escolha melhor, e faça durar. O planeta vai agradecer.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
    </div>
    <img  src="planet-earth.png" alt="Desenho do planeta Terra rodeado por uma folha de planta" class="blocos__img">
  </section>

  <section class="newsletter">
    <div class="contato__descricao">
      <h2 class="contato__titulo">Se cadastre em nossa newsletter</h2>
      <p class="contato__texto">E receba dicas de como levar uma vida mais verde</p>
    </div>
    <form>
      <input
        type="text"
        id="first-name"
        class="standardinput"
        required
        placeholder="Primeiro nome"/>

      <input
        type="text"
        id="second-name"
        class="standardinput"
        required
        placeholder="Último nome"/>

      <input
        type="email"
        id="email"
        class="standardinput"
        required
        placeholder="Email"
      />
      <input type="submit" value="Inscrever" class="signup-newsletter" />
    </form>
  </section>

<?php

    include "includes/rodape.php";

?>

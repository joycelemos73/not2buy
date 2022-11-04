<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOT2BUY</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="barra-menu">
    <img class="logo-branca" src="/pictures/logo-branca.png" alt="Logo da Not2Buy">
      <ul class="links-menu">
        <li class="item-menu"><a href="01_landing_page.html">Home</a></li>
        <li class="item-menu"><a href="#">Categorias</a></li>
        <li class="item-menu"><a href="02_sign-up.html">Entrar</a></li>
      </ul>
    </div>
  </header>

  <main>
    <section class="signup">

     <form class=formulario-signup action="formulario-cadastro-incial">
      <h2>Cadastre - se</h2>

      <label for="nomecompleto">Nome completo<label>
      <input type="text" id="nomecompleto" class="input-padrao" required placeholder="Digite aqui o seu nome completo"/>

      <label for="endereco">Endereço<label>
      <input type="text" id="endereco" class="input-padrao" required placeholder="Digite aqui o seu endereço completo"/>

      <label for="cpf">CPF<label>
      <input type="number" id="cpf" class="input-padrao" required placeholder="Digite aqui o seu número de CPF"/>

      <label for="email">Email<label>
      <input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com" />

      <label for="senha">Senha<label>
      <input type="text" id="senha" class="input-padrao" required placeholder="Digite aqui a senha que quer criar"/>

      <div class="botoes-signup">
      <input type="submit" value="Criar conta" class="botao-criar-conta" />
      <p>Já é cadastrado?</p>
      <a href="03_login.html">Faça seu login</a>
      </div>
     </form>
    </section>
  </main>
</body>

</html>
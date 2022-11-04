<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOT2BUY</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="barra-menu">
    <img class="logo-branca" src="pictures/logo-branca.png" alt="Logo da Not2Buy">
      <ul class="links-menu">
        <li class="item-menu"><a href="01_landing_page.php">Home</a></li>
        <li class="item-menu"><a href="#">Categorias</a></li>
        <li class="item-menu"><a href="02_sign-up.php">Entrar</a></li>
      </ul>
    </div>
  </header>

  <main>
    <section class="signup">

     <form class=formulario-signup action="formulario-cadastro-incial.php" method="post">
      <h2>Login</h2>

         <label for="email">Email<label>
                 <input type="email" name="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com" />

         <label for="senha">Senha<label>
                 <input type="text" name="senha" id="senha" class="input-padrao" required placeholder="Digite aqui a senha que quer criar"/>

     <div class="botoes-signup">
          <input type="submit" value="Entrar" class="botao-criar-conta" />
          <p>Não é cadastrado?</p>
          <a href="02_sign-up.php">Crie sua conta</a>
     </div>

     </form>
    </section>
  </main>
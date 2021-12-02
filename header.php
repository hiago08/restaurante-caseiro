<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante Caseiro da Tereza</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="grid-4 logo">
        <a href="index.php"><img src="img/logo.svg" alt="Restaurante caseiro da tereza"></a>
      </div>
      <nav class="grid-8 menu">
        <ul>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="cardapio.php">Cardápio</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><?php 
            if(!isset($_SESSION['logado'])):
              echo('<a href="logar.php">Login</a>');
            else:
              echo('<a href="logout.php">Sair</a>');
              //echo('<a href="logout.php">Sair2</a>');
            endif;
          ?></li>
          <li><?php if(isset($_SESSION['logado'])) echo('<a href="administradores.php">Admistradores</a>'); ?></li>
          <li><?php if(isset($_SESSION['logado'])) echo('<a href="cardapio-restrito.php">Produtos</a>'); ?></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="introducao">
    <div class="container">
      <h1>Comida Caseira Nordestina</h1>
      <p data-animation="bottom">Comida de qualidade e um sabor único a um preço acessível</p>
      <a data-animation="bottom" href="cardapio.php" class="btn-intro">Confira nossos sabores</a>
  </section>
<?php include('header.php'); ?>

  
<section class="container quem-somos" data-animacao="left">
    <h2 class="titulo">Quem Somos</h2>
    <div class="grid-4">
      <div class="img-restaurante">
        <img src="img/restaurante.png" alt="imagem do restaurante">
      </div>
    </div>
    <div class="grid-8 descricao-restaurante">
      <h3>Restaurante Caseiro da Tereza</h3>
      <p>Fundado em 2019 por Tereza Carmo, o Restaurante Caseiro de Tereza é uma empresa familiar localizada em Feira de Santana - BA, que visa a qualidade e o compromisso em fornecer comida de qualidade. Temos um típico e amplo cardapio de comida caseira nordestina, fornecendo café da manhã e almoço, uma variedade de pratos a variados preços...</p>
      <a class="btn" href="sobre.php">Saiba Mais</a>
    </div>
  </section>

  <section class="cardapio">
    <div class="container" >
      <h2 class="titulo-claro" data-animacao="right">Cardápio</h2>

      <div class="produtos" data-animacao="right">
        <div class="grid-3"></div>
        <div class="grid-5 img-produtos">
          <img src="img/img-bebidas.png" alt="imagem de bebidas">
        </div>

        <div class="grid-4 descricao-prod" data-animacao="right">
          <h3>Bebidas</h3>
          <p>Uma variedade de bebidas disponíveis a fim de atender a todos os gostos, desde aguas minerais e refrigerantes a bebidas álcoolicas. </p>
          <a class="btn-claro" href="cardapio.php">Saiba Mais</a>
        </div>
      </div>

      <div class="clear"></div>

      <div class="produtos" data-animacao="right">
        <div class="grid-3"></div>
        <div class="grid-5 img-produtos">
          <img src="img/img-alimentos.png" alt="imagem de alimentos">
        </div>

        <div class="grid-4 descricao-prod" data-animacao="right">
          <h3>Alimentos</h3>
          <p>Uma variedade de alimentos disponíveis a fim de atender a todos os gostos, desde café da manhã a almoços e jantares com um sabor nordestino. </p>
          <a class="btn-claro" href="cardapio.php">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section>

  <section class="container contato" >
    <h2 class="titulo" data-animacao="left">Contato</h2>
    <div class="grid-4" data-animacao="left">
      <div class="img-mapa">
        <img src="img/mapa.png" alt="imagem do restaurante">
      </div>
    </div>
    <div class="grid-8 descricao-contato" data-animacao="left">
      <h3>Fale com a gente</h3>
      <p>Estamos localizados na cidade de Feira de Santana - BA,  na BR 324 ao lado da Tecmar Transportes. Entre em contato conosco e tire duas dúvidas, mande feedbacks e sugestões ao nosso restaurante e teremos o maior prazer em atendê-los.</p>
      <a class="btn" href="contato.php">Saiba Mais</a>
    </div>
  </section>

  <script src="script/animacao.js"></script>
<?php include('footer.php'); ?>
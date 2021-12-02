<script type="text/javascript" src="script/script.js"> </script>


<?php include('header.php');?>

  
<section class="container contato" data-animacao="top">
    <h2 class="titulo">Contato</h2>
    <div class="grid-6 form" data-animacao="left">
      <h2>Fale Conosco</h2>
      <form action="envia-email.php" method="POST" class="form_contato" id="form" name="form" >
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="email">Email:</label>
        <input type="text" id="msgemail" name="email" onblur="checarEmail()" required >
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(99)99999-9999" onkeypress="mascara(this, tel);" onblur="mascara(this, tel); required"  >
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required ></textarea>
        <button id="enviar" name="enviar" type="submit" class="btn" onclick="return validar()" >Enviar</button>  
    </div>

    <div class="grid-6 dados" data-animacao="right">
      <h2>Dados</h2>
      <div class="info">
        <div class="info-img">
          <img src="img/whatsapp.svg" alt="telefone">
        </div>
        <span>75 3223 - 5541</span>
      </div>

      <div class="info" >
        <div class="info-img">
          <img src="img/Localizacao.svg" alt="Localização">
        </div>
        <span>BR-324 - Sentido Salvador - Feira</span>
      </div>

      <div class="info">
        <div class="info-img">
          <img src="img/Localizacao.svg" alt="Localização">
        </div>
        <span>Ao lado da Tecmar Transportes</span>
      </div>

      <div class="info">
        <div class="info-img">
          <img src="img/relogio.svg" alt="Horário">
        </div>
        <span>Seg à Sáb - de 06:00h às 18:00h</span>
      </div>
    

      <div class="info">
        <div class="info-img">
          <img src="img/email.svg" alt="Email">
        </div>
        <span>restaurantedatereza@gmail.com</span>
      </div>
    </div>
  </section>


  <section class="container localizacao" >
    <h2 class="titulo">Localização</h2>
    <div class="grid-12 mapa" id="mapa">
      <!-- <img src="img/mapa.jpg" alt="mapa"> -->
      <script>

        let map;
        let marker;

        function initMap() {
          map = new google.maps.Map(document.getElementById("mapa"), {
            center: { lat: -12.293238, lng: -38.907618 },
            zoom: 15,
          });

          marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(-12.293132, -38.907588) })
        }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAss5QIsOlRVyS6bXHKyglH-oVQUUm8jsQ&callback=initMap&libraries=&v=weekly" async></script>
    </div>
  </section>


  <script src="script/animacao.js"></script> 
<?php include('footer.php'); ?>
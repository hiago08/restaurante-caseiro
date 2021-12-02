<?php include('verificacao-login.php'); ?>
<?php include('verificacao-super.php'); ?>

<?php include('header.php'); ?>

<section class="container sessao-crud">
  <h2 class="titulo">Adicionar Administrador</h2>
  <div class="area-crud">
    <div class="logo-login">
      <img src="img/logo.svg" alt="Restaurante caseiro da tereza">
    </div>
    <form class="form-crud" action="adc-adm.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required>
      <label for="login">Login:</label>
      <input type="text" name="login" required>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>
      <label for="user">Super Administrador:</label>
      <select id="user" name="user" class="select-opcoes">
        <option value="1">sim</option>
        <option value="0">nao</option>
      </select>
      <button type="submit" name="btn-enviar-adm" class="btn-claro"> Adicionar </button>
    </form>

    </form>
  </div>
</section>

<?php include('footer.php'); ?>
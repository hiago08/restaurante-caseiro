<?php include('verificacao-login.php'); ?>
<?php include('verificacao-super.php'); ?>

<?php

  require_once 'db_connect.php';
  $id_adm = $_GET['id'];
  $consulta_adm = "SELECT * FROM usuarios WHERE id = $id_adm";
  $result_cons_adm = mysqli_query($connect, $consulta_adm);

  $dados_cons_adm = mysqli_fetch_assoc($result_cons_adm);
?>


<?php include('header.php'); ?>

<section class="container sessao-crud">
  <h2 class="titulo">Alterar Administrador</h2>
  <div class="area-crud">
    <div class="logo-login">
      <img src="img/logo.svg" alt="Restaurante caseiro da tereza">
    </div>
    <form class="form-crud" action="alt-adm.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" value="<?php echo $dados_cons_adm['nome']?>" required>
      <label for="login">Login:</label>
      <input type="text" name="login" value="<?php echo $dados_cons_adm['login']?>" required>
      <label for="senha">Senha:</label>
      <input type="password" name="senha">
      <label for="user">Super Administrador:</label>
      <select id="user" name="user" class="select-opcoes">
        <option value="1" <?php if($dados_cons_adm['super'] == 1) echo 'selected'; ?>>Sim</option>
        <option value="0" <?php if($dados_cons_adm['super'] == 0) echo 'selected'; ?>>Não</option>
      </select>
      <input type="hidden" name="id" value="<?php echo $dados_cons_adm['id']?>">
      <button type="submit" name="btn-alterar-adm" class="btn-claro"> Alterar </button>
    </form>

    </form>
  </div>
</section>

<?php include('footer.php'); ?>
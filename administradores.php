<?php include('verificacao-login.php'); ?>

<?php 
  require_once 'db_connect.php';
  $consulta_user = "SELECT * FROM usuarios";
  $result_user = mysqli_query($connect, $consulta_user);
?>

<?php include('header.php'); ?>

<section class="sessao-administradores">
  <div class="container">
    <h2 class="titulo-claro">Administradores</h2>

    <div class="botao-central">
      <a class="btn-claro" href="adicionar-adm.php">Adicionar</a>
    </div>

    <?php while($dado_user = mysqli_fetch_array($result_user)){?>
      <div class="administradores">
        <div class="grid-8 dados">
          <div class="img-user">
            <img src="img/user.svg" alt="user">
          </div>
          <h5>Nome:</h5>
          <p><?php echo $dado_user['nome']?></p>
          <h5>Login:</h5>
          <p><?php echo $dado_user['login']?></p>
          <h5>Super Admin:</h5>
          <p><?php echo($dado_user['super'] == 0 ? "Não" : "Sim");?></p>
        </div>
        <div class="grid-4 botoes-admin">
          <a class="btn-claro" href="alterar-adm.php?id=<?php echo $dado_user['id']?>">Alterar</a>
          <a class="btn-claro" href="excluir-adm.php?id=<?php echo $dado_user['id']?>">Excluir</a>
        </div>
      </div>
    <?php }?>

  </div>
</section>


<?php include('footer-claro.php'); ?>

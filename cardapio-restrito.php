<?php include('verificacao-login.php'); ?>

<?php 
  require_once 'db_connect.php';
  $consulta_prod = "SELECT * FROM produtos";
  $result_prod = mysqli_query($connect, $consulta_prod);
  $result_prod2 = mysqli_query($connect, $consulta_prod);
?>


<?php include('header.php'); ?>

  <section class="sessao-cardapio">
    <div class="container">
      <h2 class="titulo-claro">Cardápio</h2>

      <div class="botao-central">
        <a class="btn-claro" href="adicionar-produto.php">Adicionar</a>
      </div>

      <div class="clear"></div>


      <div class="bebidas">
        <h2>Bebidas</h2>
        <?php while($dado = mysqli_fetch_array($result_prod)){?>
          <?php if($dado['categoria_produto'] == 'bebidas'): ?>
            <div class="bebidas-prod">
              <div class="grid-5">
                <img src="upload/<?php echo $dado['imagem_produto']?>" alt="<?php echo $dado['titulo_produto']?>">
              </div>
              <div class="grid-4 bebidas-desc">
                <h3><?php echo $dado['titulo_produto']?></h3>
                <p><?php echo $dado['descricao_produto']?></p>
                <span>Valor: R$ <?php echo $dado['valor']?></span>
              </div>
              <div class="grid-3">
                <div class="botoes-alt-dir">
                  <a class="btn-claro" href="alterar-produto.php?id=<?php echo $dado['id']?>">Alterar</a>
                  <a class="btn-claro" href="excluir-produto.php?id=<?php echo $dado['id']?>">Excluir</a>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php }?>
      </div>

      

      <div class="alimentos">
        <h2>Alimentos</h2>
        <?php while($dado_al = mysqli_fetch_array($result_prod2)){?>
          <?php if($dado_al['categoria_produto'] == 'alimentos'): ?>
            <div class="alimentos-prod">
              <div class="grid-3">
                <div class="botoes-alt-esq">
                  <a class="btn-claro" href="alterar-produto.php?id=<?php echo $dado_al['id']?>">Alterar</a>
                  <a class="btn-claro" href="excluir-produto.php?id=<?php echo $dado_al['id']?>">Excluir</a>
                </div>
              </div>
              <div class="grid-5 alimentos-img">
                <img src="upload/<?php echo $dado_al['imagem_produto']?>" alt="<?php echo $dado_al['titulo_produto']?>">
              </div>
              <div class="grid-4 alimentos-desc">
                <h3><?php echo $dado_al['titulo_produto']?></h3>
                <p><?php echo $dado_al['descricao_produto']?></p>
                <span>Valor: R$ <?php echo $dado_al['valor']?></span>
              </div>
            </div>
          <?php endif; ?>
        <?php }?>
        
      </div>

    </div>
  </section>
<?php include('footer-claro.php'); ?>

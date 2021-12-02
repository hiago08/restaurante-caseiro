<?php include('verificacao-login.php'); ?>

<?php

  require_once 'db_connect.php';
  $id_produto = $_GET['id'];
  $consulta_produto = "SELECT * FROM produtos WHERE id = $id_produto";
  $consulta_categoria = "SELECT * FROM categoria";
  $result_cons_prod = mysqli_query($connect, $consulta_produto);
  $result_cons_cat = mysqli_query($connect, $consulta_categoria);

  $dados_cons_prod = mysqli_fetch_assoc($result_cons_prod);
?>

<?php include('header.php'); ?>

<section class="container sessao-crud">
  <h2 class="titulo">Alterar Produto</h2>
  <div class="area-crud">
    <div class="logo-login">
      <img src="img/logo.svg" alt="Restaurante caseiro da tereza">
    </div>
    <form enctype="multipart/form-data" class="form-crud" action="modificar-produto.php" method="post">
      <label for="categoria">Categoria:</label>
      <select id="categoria" name="categoria" class="select-opcoes">
        <?php while($dado_cat = mysqli_fetch_array($result_cons_cat)){?>
        <option value="<?php echo $dado_cat['nome_categoria']?>" <?php if($dado_cat['nome_categoria'] == $dados_cons_prod ['categoria_produto']) echo 'selected';?> ><?php echo $dado_cat['nome_categoria']?></option>
        <?php }?>
      </select>
      <label for="titulo">Titulo:</label>
      <input type="text" name="titulo" value="<?php echo $dados_cons_prod['titulo_produto']?>" required>
      <label for="imagem">Imagem:</label>
      <input type="file" name="imagem-alt">
      <label for="descricao-prod">Descrição:</label>
      <textarea id="descricao-prod" name="descricao-prod" required ><?php echo $dados_cons_prod['descricao_produto']?></textarea>
      <label for="valor">Valor:</label>
      <input type="text" name="valor" value="<?php echo $dados_cons_prod['valor']?>" required>
      <input type="hidden" name="id" value="<?php echo $dados_cons_prod['id']?>">
      <button type="submit" name="btn-alterar" class="btn-claro"> Alterar </button>
    </form>

    </form>
  </div>
</section>

<?php include('footer.php'); ?>
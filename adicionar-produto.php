<?php include('verificacao-login.php'); ?>

<?php 
  require_once 'db_connect.php';
  $consulta = "SELECT * FROM categoria";
  $result = mysqli_query($connect, $consulta);
?>

<?php include('header.php'); ?>

<section class="container sessao-crud">
  <h2 class="titulo">Adicionar Produto</h2>
  <div class="area-crud">
    <div class="logo-login">
      <img src="img/logo.svg" alt="Restaurante caseiro da tereza">
    </div>
    <form enctype="multipart/form-data" class="form-crud" action="enviar-produto.php" method="post">
      <label for="categoria">Categoria:</label>
      <select id="categoria" name="categoria" class="select-opcoes">
        <?php while($dado = mysqli_fetch_array($result)){?>
        <option value="<?php echo $dado['nome_categoria']?>"><?php echo $dado['nome_categoria']?></option>
        <?php }?>
      </select>
      <label for="titulo">Titulo:</label>
      <input type="text" name="titulo" required>
      <label for="imagem">Imagem:</label>
      <input type="file" name="imagem" required>
      <label for="descricao-prod">Descrição:</label>
      <textarea id="descricao-prod" name="descricao-prod" required ></textarea>
      <label for="valor">Valor:</label>
      <input type="text" name="valor" required>
      <button type="submit" name="btn-enviar" class="btn-claro"> Adicionar </button>
    </form>

    </form>
  </div>
</section>

<?php include('footer.php'); ?>
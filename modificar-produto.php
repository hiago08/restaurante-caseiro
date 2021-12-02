<?php 

  require_once 'db_connect.php';
  

  function limparformatacao($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/", "/(ç)/","/(Ç)/",),explode(" ","a A e E i I o O u U n N c C"), str_replace(" ", "", $string));
  }

  if(isset($_POST['btn-alterar'])):
    $categoria_alt = $_POST['categoria'];
    $titulo_alt = $_POST['titulo'];
    $descricao_alt = $_POST['descricao-prod'];
    $valor_alt = $_POST['valor'];
    $id_alt = $_POST['id'];
    $foto= isset( $_FILES['imagem-alt'] ) ? $_FILES['imagem-alt'] : null;

    if(empty($foto)):
      $alteracao = "UPDATE produtos SET categoria_produto = '$categoria_alt', titulo_produto = '$titulo_alt', descricao_produto = '$descricao_alt', valor = '$valor_alt' WHERE id = $id_alt";
    else:
      $extensao_alt = substr($_FILES['imagem-alt']['name'], -4);
      $novo_nome_alt = limparformatacao($titulo_alt).$extensao_alt;
      $_UP['pasta'] = 'upload/';
      move_uploaded_file($_FILES['imagem-alt']['tmp_name'], $_UP['pasta'].$novo_nome_alt);
      $alteracao = "UPDATE produtos SET categoria_produto = '$categoria_alt', titulo_produto = '$titulo_alt', imagem_produto = '$novo_nome_alt', descricao_produto = '$descricao_alt', valor = '$valor_alt' WHERE id = $id_alt";
    endif;

    // mysqli_query($connect, $insercao);
    $alterar = mysqli_query($connect,$alteracao);

    if($alterar == true){
      echo "<script type='text/javascript'>alert('Produto alterado com sucesso!!');	
      location.href='./cardapio-restrito.php';</script>";
    } else{
      echo "<script type='text/javascript'>alert('Erro ao alterar produto');	
      location.href='./cardapio-restrito.php';</script>";
    }

    //$linhas = mysqli_affected_rows($connect);
    
    // if($linhas == 1){
    //   // print"<h3>Sucesso! Formulario Enviado: <h3> <br>";
    //   echo "<script type='text/javascript'>alert(Formulario enviado);</script>";
    //   header('Location: cardapio-restrito.php');
    // }
  endif;
?>
<?php 
  require_once 'db_connect.php';
  $id_ex = $_GET['id'];

  $deletar = "DELETE FROM produtos WHERE id = '$id_ex'";
  $res_delete = mysqli_query($connect,$deletar);

  if ($res_delete == true){
    echo "<script type='text/javascript'>alert('Produto excluído com sucesso!!');	
		location.href='./cardapio-restrito.php';</script>";
  }else{
    echo "<script type='text/javascript'>alert('Erro ao excluir produto');	
		location.href='./cardapio-restrito.php';</script>";
  }

?>

<?php

  session_start();

  if(!isset($_SESSION['super'])):
    echo "<script type='text/javascript'>alert('Você não tem permissão para esta funcionalidade!!');	
		location.href='./administradores.php';</script>";
  else:
    require_once 'db_connect.php';
    $id_adm = $_GET['id'];

    $deletar_adm = "DELETE FROM usuarios WHERE id = '$id_adm'";
    $res_delete_adm = mysqli_query($connect,$deletar_adm);

    if ($res_delete_adm == true){
      echo "<script type='text/javascript'>alert('Usuário excluído com sucesso!!');	
      location.href='./administradores.php';</script>";
    }else{
      echo "<script type='text/javascript'>alert('Erro ao excluir usuário');	
      location.href='./administradores.php';</script>";
    }
  endif;

?>


<?php 

  require_once 'db_connect.php';
  

  if(isset($_POST['btn-alterar-adm'])):
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $super = $_POST['user'];
    $id = $_POST['id'];

    if($_POST['senha'] != null){
      $senha = md5($_POST['senha']);
      $alterar = "UPDATE usuarios SET nome = '$nome', login = '$login', senha = '$senha', super = b'$super' WHERE id = $id";
    } else{
      $alterar = "UPDATE usuarios SET nome = '$nome', login = '$login', super = b'$super' WHERE id = $id";
    }

    $save = mysqli_query($connect,$alterar);
    $line = mysqli_affected_rows($connect);
    
    if($line == 1){
      echo "<script type='text/javascript'>alert('Usuário alterado com sucesso!!');	
      location.href='./administradores.php';</script>";
    }else{
      echo "<script type='text/javascript'>alert('Erro ao alterar usuário');	
      location.href='./alterar-adm.php?id=$id.php';</script>";
    }
  endif;
?>
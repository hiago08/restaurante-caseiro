<?php 

  require_once 'db_connect.php';
  

  if(isset($_POST['btn-enviar-adm'])):
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $super = $_POST['user'];
    
    $inserir = "INSERT INTO usuarios VALUES(null,'$nome','$login','$senha', b'$super')";
    // mysqli_query($connect, $insercao);
    $save = mysqli_query($connect,$inserir);
    $line = mysqli_affected_rows($connect);
    
    if($line == 1){
      echo "<script type='text/javascript'>alert('Usuário cadastrado com sucesso!!');	
      location.href='./administradores.php';</script>";
    }else{
      echo "<script type='text/javascript'>alert('Erro ao cadastrar usuário');	
      location.href='./administradores.php';</script>";
    }
  endif;
?>
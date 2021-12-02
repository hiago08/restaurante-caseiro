<?php
    require_once 'db_connect.php';

    session_start();

    if(!isset($_SESSION['logado'])):
        header('Location: logar.php');
    endif;

    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id' ";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    //mysqli_close($connect);
?> 
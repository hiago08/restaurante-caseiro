<?php include('header.php');?>

<?php 

require_once 'db_connect.php';

session_start();

if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisam ser preenchido </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):

            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' "; 
            $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    if($dados['super'] == 1){
                        $_SESSION['super'] = true;
                    }
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: cardapio-restrito.php');
                else:
                    $erros = "<li> usuario e senha não conferem </li>";
                endif;
        else:
            $erros[] = "<li> usuario inexistente </li>";
        endif;
    endif;
endif;
?>



<?php

if (!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>


<section class="container login">
  <h2 class="titulo">Login</h2>
  <div class="area-login">
    <div class="logo-login">
      <img src="img/logo.svg" alt="Restaurante caseiro da tereza">
    </div>
    <form class="form-login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="login">Login:</label>
      <input type="text" name="login" required>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>
      <button type="submit" name="btn-entrar" class="btn-claro"> Entrar </button>
    </form>

    </form>
  </div>
</section>

<?php include('footer.php');?>
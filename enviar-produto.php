<?php 

  require_once 'db_connect.php';
  

  function limparformatacao($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/", "/(ç)/","/(Ç)/",),explode(" ","a A e E i I o O u U n N c C"), str_replace(" ", "", $string));
  }

  if(isset($_POST['btn-enviar'])):
    $categoria = $_POST['categoria'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao-prod'];
    $valor = $_POST['valor'];
    
    if(isset($_FILES['imagem'])){
      /*
      $altura = "240";
      $largura = "470";

      switch($_FILES['imagem']['type']):
        case  'image/jpeg';
        case 'image/pjpeg';
          $imagem_temp = imagecreatefromjpeg($_FILES['imagem']['tmp_name']);
          $largura_orig = imagex($imagem_temp);
          $altura_orig = imagey($imagem_temp);

          $nova_larg = $largura ? $largura : floor (($largura_orig / $largura_orig) * $largura);
          $nova_alt = $altura ? $altura : floor (($altura_orig / $altura_orig) * $altura);

          $imagem_redimen = imagecreatetruecolor($nova_larg, $nova_alt);
          imagecopyresampled($imagem_redimen, $imagem_temp, 0, 0, 0, 0, $nova_larg, $nova_alt, $largura_orig, $altura_orig);
          imagejpeg($imagem_redimen, 'upload/' . $_FILES['imagem']['name']);
        break;
      endswitch; 
    */



      $extensao = substr($_FILES['imagem']['name'], -4);
      $novo_nome = limparformatacao($titulo).$extensao;
      $_UP['pasta'] = 'upload/';
      //mkdir($_UP['pasta'], 0777);
      //$diretorio = "upload/";

      move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'].$novo_nome);

    }
    $insercao = "INSERT INTO produtos VALUES(null,'$categoria','$titulo','$novo_nome','$descricao','$valor')";
    // mysqli_query($connect, $insercao);
    $salvar = mysqli_query($connect,$insercao);
    $linhas = mysqli_affected_rows($connect);
    
    if($linhas == 1){
      echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso!!');	
      location.href='./cardapio-restrito.php';</script>";
    }else{
      echo "<script type='text/javascript'>alert('Erro ao cadastrar produto');	
      location.href='./cardapio-restrito.php';</script>";
    }
  endif;
?>
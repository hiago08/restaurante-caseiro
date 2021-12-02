<?php 

  if(!isset($_SESSION['super'])):
    echo "<script type='text/javascript'>alert('Você não tem permissão para esta funcionalidade!!');	
		location.href='./administradores.php';</script>";
  endif;

?>
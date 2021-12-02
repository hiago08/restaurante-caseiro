<?php

$nome = UTF8_decode($_POST['nome']);
$email = UTF8_decode($_POST['email']);
$telefone = UTF8_decode($_POST['telefone']);
$mensagem = UTF8_decode($_POST['mensagem']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail -> isSMTP();
$mail->Charset = 'UTF-8';

$mail ->Host = "smtp.gmail.com";
$mail ->Port = "587";
$mail ->SMTPSecure = "tls";
$mail ->SMTPAuth= "true";
$mail ->Username= "restaurantedatereza1@gmail.com";
$mail ->Password= "restaurante";


$mail->setFrom($mail->Username, "Site Restaurante");
$mail->addAddress('restaurantedatereza1@gmail.com');
$mail->Subject = "Fale Conosco";


$conteudo_email = "
Voc&ecirc; recebeu uma mensagem de $nome ($email):
<br><br>
Telefone: $telefone
<br>
Mensagem: $mensagem
";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if ( $mail->send()){
    echo "<script type='text/javascript'>alert('Mensagem enviada com sucesso!!');	
		location.href='./contato.php';</script>";
} else{
    echo "<script type='text/javascript'>alert('Erro no envio de sua mensagem!!');	
    location.href='./contato.php';</script>";
}

// header('Location: contato.php');

?>
<?php
 
// Inclui o arquivo class.phpmailer.php 
require_once("php-mailer/class.phpmailer.php");
// require_once("php-mailer/class.smtp.php");
require_once("php-mailer/PHPMailerAutoload.php"); 

session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];
global $erro;
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.jorgemendes.com.br';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "jorge";
$mail->Password = "r2d2@c3po";

$mail->setFrom("jorge@jorgemendes.com.br", "E-mail do Site Jorge Mendes");
$mail->addAddress("jorge@jorgemendes.com.br");
$mail->Subject = "Email de contato do site";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>assunto: {$assunto}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nassunto:{$assunto}\nmensagem: {$mensagem}";

if($mail->send()) {
    $sucesso = "Mensagem enviada com sucesso";
    // header("Location: /index.php");
    echo $sucesso;
} else {
   $erro = "Erro ao enviar mensagem <br/>" . $mail->ErrorInfo;
    echo $erro;
}
die();


?>
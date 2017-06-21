<?php

//Recebe variáveis do formulário
$nome  		= $_POST["nome"];
$email 		= $_POST["email"];
$texto 		= $_POST["texto"];
$assunto	= $_POST["assunto"];

//Inclusão do arquivo do phpmailer
include("class.phpmailer.php");
include("class.smtp.php");

//Inicia a classe PHPMailer
$mail = new PHPMailer();

//Informação de remetente
$mail->From 	= $email;
$mail->FromName = $nome;

//Informação de destinatário
$mail->AddAddress('yagosenhorini30@gmail.com', 'Yago Senhorini');

//Informação do dado técnico da mensagem
$mail->IsHTML(true);

//Informação de mensagem e assunto
$mail->Subject = $assunto;
$mail->Body    = $texto;

//Envio do email
$enviado = $mail->Send();
if($enviado){
	echo "Enviado com Sucesso";
}else{
	$mail->ErrorInfo;
}
?>

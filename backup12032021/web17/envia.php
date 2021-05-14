<?php
// carrega classe na aplicação
require_once "phpmailer/phpmailer.php";

$nome =  ($_POST['nome']);
$titulo = ($_POST['titulo']);
$email = ($_POST['email']);
$mensagem = ($_POST['mensagem']);

// Inicializa classe
$mail = New PHPMailer();
$mail->CharSet = 'UTF-8';
// Parâmetros da Odara
$mail->IsSMTP();
$mail->Host = "smtp.odara.com.br";
$mail->Port = "587";
$mail->SMTPSecure = "TLS";
$mail->SMTPAuth = true;

// Parâmetros do cliente
$mail->Username = "site@chassileyzer.com.br";
$mail->Password = "*Chassi2020";
$mail->From = "site@chassileyzer.com.br"; // sempre use o mesmo email para autenticar e enviar
$mail->FromName = "Contato ChassiLeyzer"; // não obrigatório
$mail->AddAddress("contato@chassileyzer.com.br"); // esse campo deve ser usado apenas uma vez
$mail->Subject = "Formulário de Orçamento do Site";
$mail->IsHTML(true);
$mail->Body = ("
Você recebeu uma mensagem de $nome ($email):
<br><br>
Título:<br>
$titulo
<br><br>
Mensagem:<br>
$mensagem
"); // no formato HTML


if ( $mail->send()){
	
	
	echo "<script>
	alert('E-mail Enviado com Sucesso!!'); location= '../index.html';
	</script>";


 
}else{
	echo "Falha ao enviar o e-mail: " . $mail->ErrorInfo;
}

//if ($mail->Send()) 
//echo "Sua mensagem foi enviada com sucesso";
//else echo "Sua mensagem não foi enviada. Erro: [".$mail->ErrorInfo."]";

?>
<?php


require_once('../PHPMailer/class.phpmailer.php');


$nome=  ($_POST['nome']);
$titulo= ($_POST['titulo']);
$email= ($_POST['email']);
$mensagem= ($_POST['mensagem']);




$mail = new PHPMailer;
$mail->isSMTP();
//Correção de acentuação.
$mail->CharSet = 'UTF-8';
//Configurações do servidor de email
$mail->Host="smtp.odara.com.br";
$mail->Port="587";
$mail->SMPTSecure="tls";
$mail->SMTPAuth="true";
$mail->Username="site@chassileyzer.com.br"; // SEU EMAIL
$mail->Password="*Chassi2020"; // SUA SENHA
$mail->Body = ("

Você recebeu uma mensagem de $nome ($email):
<br><br>
Título:<br>
$titulo
<br><br>
Mensagem:<br>
$mensagem
");
$mail->IsHTML(true);




//Configurações de mensagem
$mail->setFrom($mail->Username,""); //remetente
$mail->addAddress('flavio@odara.com.br'); //Destinatário 
$mail->Subject = "Formulário de Orçamento do Site"; // Assunto do e-mail


if ( $mail->send()){
	
	
	echo "<script>
	alert('E-mail Enviado com Sucesso!!'); location= '../index.html';
	</script>";


 
}else{
	echo "Falha ao enviar o e-mail: " . $mail->ErrorInfo;
}
?>
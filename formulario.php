<?php // template name : formulario post ?>
<html>
<head></head>
<body>
<?php 

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$assunto = $_GET['assunto'];
	$mensagem = $_GET['mensagem'];

	$to = 'contato@realcetecnologia.com.br';
	$subject = $assunto;
	$mensagem = "<strong>Nome:</strong>" .$nome."<br/>
				<strong>E-mail:</strong>" .$email."<br/>
				<strong>Telefone:</strong>" .$telefone."<br/>
				<strong>Assunto:</strong>" .$assunto."<br/>
				<strong>Mensagem:</strong>" .$mensagem."<br/>";

	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/html; charset=utf-8\n";
	$headers .= "From:".$email."\n"; // remetente
	$headers .= "Return-Path:".$email."\n"; // return-path
	$enviarMensagem = mail($to, $assunto, $mensagem, $headers, "-r".$to);

	if($enviarMensagem) {
		echo "Mensagem enviada com sucesso";
	} else{
		echo "A mensagem não pode ser enviada";
	} 


 ?>		
</body>
</html>
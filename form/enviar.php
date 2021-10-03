<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do Site';
$remetente = 'contato@israel.com.br';

$conteudo = utf8_decode('Nome: ' .$nome. "\r\n"."\r\n" . 'Email: ' .$email. "\r\n"."\r\n" .'Nome: ' .$mensagem. "\r\n"."\r\n");

$cabecalhos = "From: ".$email;
mail($remetente, $assunto, $mensagem, $cabecalhos);
?>
<script>alert('Enviado com suceso');</script>
<meta http-equiv="refresh" content="0; url=index.php">

<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato-Retalhos Arte';
$message = $_GET['mensagem'];
$dest = $_GET['email'];
$headers = "From:" .$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0"; url=contato>
<?php 
session_start();
print_r($_POST);
$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$destinatario = "poorfiriof@gmail.com";

$assunto = "Novo contato do formulário";
  $headers = "De: $email\r\n";
  $headers .= "Para: $destinatario\r\n";
  $headers .= "Content-type: text/html\r\n"; // Para envio de e-mail HTML
   
    $body = "
      <html>
      <body>
        <h1>$nome -> Entrou em contato</h1>
        <p><b>Nome:</b> $nome</p>
        <p><b>Email:</b> $destinatario</p>
        <p><b>Telefone:</b> $telefone</p>
        <p><b>Mensagem:</b> $mensagem</p>
      </body>
      </html>
    ";

  if (mail($destinatario, $assunto, $body, $headers)) {
    echo "E-mail enviado com sucesso!";
  } else {
    echo "Houve um erro ao enviar o e-mail.";
  }

?>
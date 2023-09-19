<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    //pega os atributos do form
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $telefone = @trim(stripslashes($_POST['telefone'])); 
        $message = @trim(stripslashes($_POST['message'])); 


    $email_from = $email;
    $email_to = 'info@solutioip.com.br';//email remetente

    //elabora o texto 
    $body = 'Nome: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telefone: ' . $telefone . "\n\n" . 'Messagem: ' . $message;

    //envia o email
    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    //verifica se foi enviado e redireciona para a página
  echo '
    <script>
        alert("Mensagem enviada com sucesso!");
        window.location.href = "index.html";
    </script>
';
       ?>
<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS);
$messages = filter_input(INPUT_POST, 'message',FILTER_SANITIZE_SPECIAL_CHARS);

//echo $name.'<br>'.$email.'<br>'.$telefone.'<br>'.$messages;

$destinoEmail = 'brunoferrazsabino@gmail.com';
$assuntoEmail = "Pergunta do Contato";
$corpoEmail = "Nome: ".$name." - E-mail: ".$email." - Telefone: ".$telefone ." - Mensagem: ".$messages;
$cabecalho = "From: contato@bfsdesenvolvimento.com"."\r\n". 
              "Reply-To: ".$email."\r\n". 
              "X-Mailer: PHP/".phpversion();


if($name && $email && $messages) {

    mail($destinoEmail, $assuntoEmail, $corpoEmail, $cabecalho);

    echo '<h3>Email enviado com sucesso</h3>';
    exit;


} else {
    header("Location: index.html");
}
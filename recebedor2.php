<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS);
$messages = filter_input(INPUT_POST, 'message',FILTER_SANITIZE_SPECIAL_CHARS);

//echo $name.'<br>'.$email.'<br>'.$telefone.'<br>'.$messages;

$destinoEmail = 'brunoferrazsabino@gmail.com';
$assuntoEmail = "Mensagem do BFS Desenvolvimento";
$corpoEmail = "Nome: ".$name." - E-mail: ".$email." - Telefone: ".$telefone ." - Mensagem: ".$messages;
$cabecalho = "From: contato@bfsdesenvolvimento.com"."\r\n". 
              "Reply-To: ".$email."\r\n". 
              "X-Mailer: PHP/".phpversion();




if($name && $email && $messages) {

    mail($destinoEmail, $assuntoEmail, $corpoEmail, $cabecalho);

    $_SESSION['flash'] = 'Mensagem encaminhada com sucesso!<br> Logo retornaremos.';
    header("Location: index.php");
    //echo '<script>window.alert("E-mail enviado com sucesso! Logo retornaremos.")</script>';
} 

?>
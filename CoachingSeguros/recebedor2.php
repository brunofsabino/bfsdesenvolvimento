<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular',FILTER_SANITIZE_SPECIAL_CHARS);


// echo $operadoraEscolhida.'<br>'.$selecionarPlano.'<br>'.$possuirCNPJ.'<br>'.$name.'<br>'
// .$email.'<br>'.$dddCelular.'<br>'.$celular.'<br>'.$dddFixo.'<br>'.$telefoneFixo.'<br>'.$infoAdicionais.'<br>';

$destinoEmail = 'brunoferrazsabino@gmail.com, icalocoaching@gmail.com, vansantanaa@gmail.com';
$assuntoEmail = "Contato de um Cliente pelo formulário do site Coaching Seguros";
$corpoEmail = "Nome: ".$name."\r\nE-mail: ".$email."\r\nCelular: ".$celular;
$cabecalho = "From: contato@coachingseguros.com.br"."\r\n". 
              "Reply-To: ".$email."\r\n". 
              "X-Mailer: PHP/".phpversion();


if($name && $email ) {

    mail($destinoEmail, $assuntoEmail, $corpoEmail, $cabecalho);

    $_SESSION['flash'] = 'Mensagem encaminhada com sucesso!<br> Logo retornaremos.';
    header("Location: index.php");
    
} 
            

?>
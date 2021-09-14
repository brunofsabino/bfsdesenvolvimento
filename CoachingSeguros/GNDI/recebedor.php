<?php
session_start();

$numeroDeVidas = filter_input(INPUT_POST, 'numero-vidas');
$possuirCNPJ = filter_input(INPUT_POST, 'possui-cnpj');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
$idades = filter_input(INPUT_POST, 'idades', FILTER_SANITIZE_SPECIAL_CHARS);


switch($numeroDeVidas){
    case 0:
        $numeroDeVidas = "Não selecionou nenhuma opção";
    break;
    case 1:
        $numeroDeVidas = "1 Vida";
    break;
    case 2:
        $numeroDeVidas = "2 Vidas";
    break;
    case 3:
        $numeroDeVidas = "3 Vidas";
    break;
    case 4:
        $numeroDeVidas = "4 Vidas";
    break;
    case 5:
        $numeroDeVidas = "5 Vidas";
    break;
    case 6:
        $numeroDeVidas = "6 Vidas";
    break;
    case 7:
        $numeroDeVidas = "7 Vidas";
    break;
    case 8:
        $numeroDeVidas = "8 Vidas";
    break;
    case 9:
        $numeroDeVidas = "9 Vidas";
    break;
    case 10:
        $numeroDeVidas = "10 Vidas";
    break;
    case '+10':
        $numeroDeVidas = " Mais de 10 Vidas";
    break;
}
switch($possuirCNPJ){
    case 0:
        $possuirCNPJ =  "Não selecionou nenhuma opção";
    break;
    case 1:
        $possuirCNPJ = "Sim, possuo CNPJ";
    break;
    case 2:
        $possuirCNPJ = "Não possuo CNPJ";
    break;
}

// echo $operadoraEscolhida.'<br>'.$selecionarPlano.'<br>'.$possuirCNPJ.'<br>'.$name.'<br>'
// .$email.'<br>'.$dddCelular.'<br>'.$celular.'<br>'.$dddFixo.'<br>'.$telefoneFixo.'<br>'.$infoAdicionais.'<br>';

$destinoEmail = 'coachingsegurosebeneficios@gmail.com';
$assuntoEmail = "Contato de um Cliente LEAD da Campanha do INSTAGRAN/FACEBOOK";
$corpoEmail = "Nome: ".$name."\r\nE-mail: ".$email."\r\n Telefone: ".$telefone."-" ."\r\nPossui CNPJ? ".$possuirCNPJ."\r\nNúmero de Vidas: ".$numeroDeVidas."\r\nIdades: ".$idades;
$cabecalho = "From: contato@coachingseguros.com.br"."\r\n". 
              "Reply-To: ".$email."\r\n". 
              "X-Mailer: PHP/".phpversion();

if($name && $email ) {

    mail($destinoEmail, $assuntoEmail, $corpoEmail, $cabecalho);

    $_SESSION['flash'] = 'Mensagem encaminhada com sucesso!<br> Logo retornaremos.';
    header("Location: index.php");
    
} else {
    header("Location: index.php");
}
            

?>
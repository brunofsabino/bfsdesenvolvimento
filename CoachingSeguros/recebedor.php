<?php
session_start();

$operadoraEscolhida = filter_input(INPUT_POST, 'operadora-escolhida');
$selecionarPlano = filter_input(INPUT_POST, "selecionar-plano");
$possuirCNPJ = filter_input(INPUT_POST, 'possui-cnpj');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$dddCelular = filter_input(INPUT_POST, 'dddcelular',FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST, 'celular',FILTER_SANITIZE_SPECIAL_CHARS);
$dddFixo = filter_input(INPUT_POST, 'dddfixo',FILTER_SANITIZE_SPECIAL_CHARS);
$telefoneFixo = filter_input(INPUT_POST, 'telefone-fixo',FILTER_SANITIZE_SPECIAL_CHARS);
$infoAdicionais = filter_input(INPUT_POST, 'info-adicionais', FILTER_SANITIZE_SPECIAL_CHARS);

switch($selecionarPlano){
    case 0:
        $selecionarPlano = "Não escolheu nenhum plano";
    break;
    case 1:
        $selecionarPlano = "Plano Individual";
    break;
    case 2:
        $selecionarPlano = "Plano Familiar";
    break;
    case 3:
        $selecionarPlano = "Plano Empresarial";
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

$destinoEmail = 'brunoferrazsabino@gmail.com, icalocoaching@gmail.com, vansantanaa@gmail.com';
$assuntoEmail = "Contato de um Cliente pelo formulário do site Coaching Seguros";
$corpoEmail = "Nome: ".$name."\r\nE-mail: ".$email."\r\nCelular: ".$dddCelular."-" .$celular ."\r\nTelefone Fixo: ".$dddFixo."-".$telefoneFixo. 
"\r\nOperadora escolhida: ".$operadoraEscolhida."\r\nPlano: ".$selecionarPlano."\r\nPossui CNPJ? ".$possuirCNPJ."\r\nMensagem adicional: ".$infoAdicionais;
$cabecalho = "From: contato@coachingseguros.com.br"."\r\n". 
              "Reply-To: ".$email."\r\n". 
              "X-Mailer: PHP/".phpversion();

if($name && $email ) {

    mail($destinoEmail, $assuntoEmail, $corpoEmail, $cabecalho);

    $_SESSION['flash'] = 'Mensagem encaminhada com sucesso!<br> Logo retornaremos.';
    header("Location: index.php");
    
} 
            

?>
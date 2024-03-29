<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMIL</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flash">
        <?php
            $flash = "";
            if($_SESSION['flash']) {
                $flash = $_SESSION['flash'];
                echo $flash;
                $_SESSION['flash'] = "";
            } 
        ?>
    </div>
    <img src="assets/images/bg-01.svg" alt="" class="bg-01">
    <header>
        <div class="header-menu">
            <div class="header-menu-logo">
                <img src="assets/images/logo-amil.png" alt="Logo AMIL">
            </div>
            <div class="header-menu-nav">
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Sobre</a></li>
                        <li><a href="/">Calcular Plano</a></li>
                        <li><a href="/">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="section-01">
        <div class="section-01-bg">
            <div class="section-01-bg-escuro">
                <div class="section-01-content">
                    <div class="section-01-content-text">
                        <div class="section-01-text">
                            <h1>Preencha os campos e receba os valores dos planos da AMIL</h1><br>
                            <h1>Central de Relacionamento <br>(11) 2539-6687</h1>
                            <a class="area-button--whats" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                                <div class="button--whats">
                                    <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                                    FALAR COM A AMIL
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="section-01-content-formulario">
                        <div class="section-01-formulario">
                            <form action="recebedor.php" method="POST">
                                <p>Digite seus dados:</p><br>
                                <label for="">Nome:<br>
                                    <input type="text" class="input-text" placeholder="Digite seu nome" name="name">
                                </label>
                                <label for="">DDD + Telefone:<br>
                                    <input type="text" class="input-text" placeholder="Digite seu DDD e telefone" name="telefone">
                                </label>
                                <label for="">E-mail:<br>
                                    <input type="email" class="input-text" placeholder="Digite seu e-mail" name="email">
                                </label>
                                <label for="">Você tem CNPJ?:<br>
                                    <select name="possui-cnpj" id="">
                                        <option value="0">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="2">Não</option>
                                    </select>
                                </label>
                                <label for="">Número de Vidas:<br>
                                    <select name="numero-vidas" id="">
                                        <option value="0">Selecione</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10"> 10</option>
                                        <option value="+10"> + de 10</option>
                                    </select>
                                </label>
                                <label for="">Idades:<br>
                                    <input type="text" class="input-text" placeholder="Digite as Idades" name="idades">
                                </label><br>
                                <button>Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-02">
        <div class="section-02-area1">
            <div class="section-02-area1-icons">
                <div class="section-02-area1-icon">
                    <img src="assets/images/icons8-saco-de-dinheiro-50 (1).png" alt="desconto">
                </div>
                <h4>DESCONTO COM CNPJ</h4>
                <p>Pague menos usando seu CNPJ</p>
            </div>
            <div class="section-02-area1-icons">
                <div class="section-02-area1-icon">
                    <img src="assets/images/icons8-confiança-50.png" alt="carência">
                </div>
                <h4>REDUÇÃO DE CARÊNCIA</h4>
                <p>Com portabilidade de um outro plano</p>
            </div>
            <div class="section-02-area1-icons">
                <div class="section-02-area1-icon">
                    <img src="assets/images/icons8-clínica-50.png" alt="Farmácia">
                </div>
                <h4>DESCONTO EM FARMÁCIAS</h4>
                <p>Mais de 30.000 Medicamentos</p>
            </div>
            <div class="section-02-area1-icons">
                <div class="section-02-area1-icon">
                    <img src="assets/images/icons8-gosto-disso-50.png" alt="Qualidade">
                </div>
                <h4>SEM PERDER A QUALIDADE</h4>
                <p>Garantia de Cobertura</p>
            </div>
        </div>
        <div class="section-02-area2">
            <div class="section-02-area2-icons">
                <div class="section-02-area2-icon">
                    <img src="assets/images/icons8-whatsapp-48.png" alt="Whatsapp">
                </div>
                <h4>COTAÇÂO POR WHATSAPP</h4>
                <span>Receba todas as informações sobre o plano de saúde AMIL diretamente no seu smartphone ou tablet. Clique no botão  e inicie uma conversa agora mesmo.</span>
                <a class="button--whats-02" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                    <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                    FALAR COM A AMIL
                </a>
            </div>
            <div class="section-02-area2-icons">
                <div class="section-02-area2-icon">
                    <img src="assets/images/icons8-coração-com-pulso-50.png" alt="Saúde">
                </div>
                <h4>O MELHOR PLANO DE SAÚDE</h4>
                <span>O plano de saúde AMIL oferece os melhores benefícios por um preço acessível. Você, sua família e sua empresa merecem.  Clique no botão e inicie uma conversa agora mesmo</span>
                <a class="button--whats-03" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                    <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                    FALAR COM A AMIL
                </a>
            </div>
            <div class="section-02-area2-icons">
                <div class="section-02-area2-icon">
                    <img src="assets/images/icons8-ambulância-50.png" alt="Atendimento">
                </div>
                <h4>ATENDIMENTO ESPECIAL</h4>
                <span>O plano de saúde AMIL oferece um atendimento especial, uma rede credenciada diferenciada e as melhores coberturas.  Clique no botão e inicie uma conversa agora mesmo.</span>
                <a class="button--whats-03" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                    <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                    FALAR COM A AMIL
                </a>
            </div>
        </div>
    </section>
    <section class="section-03">
        <div class="section-03-areas">
            <div class="section-03-areas-image01"></div>
            <h3>AMIL EMPRESAS</h3>
            <p>Plano de Saúde AMIL EMPRESAS é perfeito para sua empresa e seus funcionários. Entre em contato e faça uma cotação agora mesmo.</p>
            <a class="button--whats-04" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                PLANO EMPRESA
            </a>
        </div>
        <div class="section-03-areas">
            <div class="section-03-areas-image02"></div>
            <h3>AMIL COLETIVO</h3>
            <p>Plano de saúde AMIL COLETIVO perfeito para conselhos, sindicatos e associações profissionais. Entre em contato e faça uma cotação agora mesmo.</p>
            <a class="button--whats-04" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                PLANO COLETIVO
            </a>
        </div>
        <div class="section-03-areas">
            <div class="section-03-areas-image03"></div>
            <h3>AMIL FAMILIAR</h3>
            <p>Plano de Saúde AMIL FAMILIAR é feito para você, seus filhos, seus pais e toda a sua família. Entre em contato e faça uma cotação agora mesmo.</p>
            <a class="button--whats-04" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                <img src="assets/images/icons8-whatsapp-48.png" alt="" style="width:30px;height: 30px;padding-right: 15px;">
                PLANO FAMILIAR
            </a>
        </div>
    </section>
    <section class="section-04">
        <div class="section-04-area1">
            <div class="section-04-area1-icons">
                <div class="section-04-area1-icon">
                    <img src="assets/images/icons8-marcador-50 (1).png" alt="marcador">
                </div>
                <h4>São Paulo</h4>
                <p>São Paulo</p>
            </div>
            <div class="section-04-area1-icons">
                <div class="section-04-area1-icon">
                    <img src="assets/images/icons8-email-64.png" alt="marcador">
                </div>
                <h4>E-mail</h4>
                <p>contato@coachingseguros.com.br</p>
            </div>
            <div class="section-04-area1-icons">
                <div class="section-04-area1-icon">
                    <img src="assets/images/icons8-telefone-50.png" alt="marcador">
                </div>
                <h4>SAC</h4>
                <p>(11) 2539-6687</p>
            </div>
        </div>
        <img src="assets/images/bg-02.svg" alt="" class="bg-02">
    </section>
    
</body>
</html>
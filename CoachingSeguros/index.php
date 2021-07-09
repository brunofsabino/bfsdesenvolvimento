<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Coaching Seguros - Consultoria em Planos de Saúde e Seguros" />
    <meta property="og:description" content="A Coaching Seguros inovou nos modelos de consultoria sobre planos de saúde e seguros." />
    <meta property="og:url" content="https://coachingseguros.com.br/" />
    <meta property="og:site_name" content="Coaching Seguros" />
    <meta property="article:modified_time" content="2021-07-01entaoT18:59:47+00:00" />
    <meta property="og:image" content="https://coachingseguros.com.br/assets/images/empresarios2.jpg" />
    <meta property="og:image:width" content="900" />
    <meta property="og:image:height" content="1000" />
    <title>Coaching Seguros e Benefícios</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
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
    <header id="home">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="assets/images/novoLogoBranco.png" alt="logo">
                </div>
                <div class="header-telefone">
                   <div class="header-whats">
                        <a class="whats" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank">
                            <div class="header-telefone-area1">
                                <div class="header-telefone-title">
                                    <h1>WHATSAPP</h1>
                                </div>
                                <div class="header-telefone-numero">
                                    <p>11 91314-2018</p>
                                </div>
                            </div>
                            <div class="header-telefone-area2">
                                <img src="assets/images/whatsapp.png" alt="whatsapp">
                            </div>
                        </a>
                   </div>
                    <div class="header-telefone-ligue">
                        <a href="tel:011-1111-1111">
                            <div class="header-telefone-area1">
                                <div class="header-telefone-title">
                                    <h1>LIGUE AGORA</h1>
                                </div>
                                <div class="header-telefone-numero">
                                    <p>11 2539-6687</p>
                                </div>
                            </div>
                            <div class="header-telefone-area2">
                                <img src="assets/images/telephone2.png" alt="Telefone">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="menu-section">
                    <div class="menu-toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <nav class="nav">
                        <ul>
                            <li><a href="#home" class="botao-planos">Home</a></li>
                            <li><a href="#tiposPlanos" class="botao-planos">Planos de Saúde</a></li>
                            <li><a href="#contato-form" class="botao-planos">Contato</a></li>
                            <li><a href="#simulacao" class="botao-planos">Faça uma Simulação</a></li>
                        </ul>
            
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="banner"  >
            <div class="banner-area1">
                <div class="slider-width-text">
                    <div class="slider--item--text1 active">
                        <div class="banner-area1-sub-title">
                            Perfeição em
                        </div>
                        <div class="banner-area1-title">
                            Consultoria de planos <br>de Saúde e<br> Odontológicos.
                        </div>
                        <div class="banner-area1-button"> <a href="#contato-form">Fale Conosco</a></div>
                    </div>
                    <div class="slider--item--text2">
                        <div class="banner-area1-sub-title">
                            Os melhores profissionais
                        </div>
                        <div class="banner-area1-title">
                            Uma equipe<br> especializada<br>á sua disposição
                        </div>
                        <div class="banner-area1-button"> <a href="#tiposPlanos">Saiba Mais</a></div>
                    </div>
                    <div class="slider--item--text3">
                        <div class="banner-area1-sub-title">
                            Plano Familiar
                        </div>
                        <div class="banner-area1-title">
                            <!-- Planos de Saúde e <br>Seguros para <br>você e sua família -->
                            Sua Família totalmente <br>assegurada com os <br>melhores planos
                        </div>
                        <div class="banner-area1-button"> <a href="#simulacao">Veja nossos Preços</a></div>
                    </div>
                    <div class="slider--item--text4">
                        <div class="banner-area1-sub-title">
                            Empresarial
                        </div>
                        <div class="banner-area1-title">
                            Planos de Saúde<br> Empresarial
                            
                        </div>
                        <div class="banner-area1-button"> <a href="#simulacao">Saiba Como</a></div>
                    </div>
                    <div class="arrow">
                        <img src="assets/images/arrow-down.svg" alt="">
                    </div>
                </div>
                
            </div>
            <div class="banner-area2">
                <div class="banner-area2-fundo">
                    <div class="slider--controls">
                        <div class="slider-control" onclick="goPrev()"><img src="assets/images/arrow-left.svg" alt=""></div>
                        <div class="slider-control" onclick="goNext()"><img src="assets/images/arrow-right.svg" alt=""></div>
                    </div>
                    <div class="slider--width">
                        <div class="slider--item" style="background-image: url('assets/images/building.jpg');"></div>
                        <div class="slider--item" style="background-image: url('assets/images/equipe.jpg');"></div>
                        <div class="slider--item" style="background-image: url('assets/images/familia-feliz3.jpg');"></div>
                        <div class="slider--item" style="background-image: url('assets/images/empresarios.jpg');"></div>
                    </div>
                </div>    
            </div>
        </section>
        <section class="area-seguros" id="tiposPlanos">
            <div class="area-seguros--title">
                <div class="area-seguros-subtitle">
                    Nossos Produtos
                </div>
                <div class="area-seguros-title"><h1>Customize seu plano de saúde ou seguro de acordo com a sua necessidade.</h1></div>
                <div class="area-seguros-text"><p>A Coaching Seguros atua com as melhores seguradoras e operadoras do Brasil. Faça uma simulação e conheça nossos produtos.</p></div>
                <div class="area-seguros-button"><a href="">Todos os Produtos</a></div>
            </div>
            
            <div class="area-seguros-icon1">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/building2.png" alt="Prédio empresárial" class="img-icon1">
                </div>
                <div class="area-seguros-icon-title"><h2>Plano de Saúde Empresarial</h2></div>
                <p>Planos empresariais a partir de 2 vidas. Com o CNPJ ou MEI você contrata qualquer plano de saúde empresarial com as melhores condições.</p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon1-aparecer">
                    <p>
                    Contratando um plano empresarial, é possível incluir também os familiares dos funcionários, colaboradores aposentados e trabalhadores temporários.
                    O plano empresarial pode apresentar melhores condições e benefícios, como uma menor mensalidade, descontos em medicamentos e uma maior cobertura.

                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon2">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/family2.png" alt="Familia">
                </div>
                <div class="area-seguros-icon-title"><h2>Plano de Saúde Familiar</h2></div>
                <p>Proteja a sua família com os melhores planos, oferecendo segurança e saúde! As seguradoras e operadoras oferecem excelentes condições. </p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon2-aparecer">
                    <p>
                    O plano de saúde familiar é constituído por um ou mais titulares e seus dependentes. Isso viabiliza um melhor preço na mensalidade dos planos. A Coaching Seguros trabalha com as melhores seguradoras e operadoras do mercado brasileiro. Solicite uma simulação e tenha em mãos os preços de todas as operadoras, para assim, escolher a que melhor se encaixar em sua família.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon3">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/casal-idosos5.png" alt="Casal de idosos">
                </div>
                <div class="area-seguros-icon-title"><h2>Plano de Saúde para Idosos</h2></div>
                <p>A melhor idade merece também o melhor plano de saúde. Deixe que nós cuidamos de toda a burocracia e oferecemos para você o melhor plano personalizado.</p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon3-aparecer">
                    <p>
                    Viva desfrutando o melhor que a vida tem a oferecer. Contrate uma assistência médica e você contará com os melhores profissionais da medicina, com os melhores laboratórios e com os melhores hospitais próximos da sua residência. Solicite uma simulação com a Coaching Seguros, que vamos te oferecer o plano que mais se adequa a sua realidade.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon4">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/homem2.png" alt="Homem sozinho">
                </div>
                <div class="area-seguros-icon-title"><h2>Plano de Saúde Individual</h2></div>
                <p>O plano de saúde individual é o melhor para as pessoas que procuram um custo mais econômico e que ao mesmo tempo atenda todas as suas necessidades primárias como exames simples e consultas na rede credenciada.</p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon4-aparecer">
                    <p>
                    Com o plano individual, você terá um convênio médico personalizado somente para uma pessoa. Você terá muitas opções de planos que as operadoras oferecem. Deixe que nós te mostramos qual é o melhor plano de saúde para você. Solicite uma simulação.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon5">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/car.png" alt="Carro">
                </div>
                <div class="area-seguros-icon-title"><h2>Seguro Auto</h2></div>
                <p>Personalize o seu seguro auto do modo que você precisa. Na Coaching Seguros nós oferecemos o melhores seguros do mercado, visando que você tenha o melhor atendimento para o seu veículo. </p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon5-aparecer">
                    <p>
                    Conseguimos oferecer um Seguro Auto sem juros e com parcelas que cabem no seu bolso. Benefícios do seguro auto: cobertura contra danos, cobertura contra roubo e furto, cobertura à terceiros, cobertura de carro extra, oficina com serviços gratuitos e assistência 24 horas. Solicite uma simulação que vamos encontrar o melhor seguro para você.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon6">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/home.png" alt="Casa">
                </div>
                <div class="area-seguros-icon-title"><h2>Seguro Residencial</h2></div>
                <p>Proteja sua casa com o seguro residencial com o custo muito acessível. Além da segurança, você também vai contar com muitos profissionais especializados para pequenos reparos dos imprevistos do dia a dia.</p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon6-aparecer">
                    <p>
                    Com um Seguro Residencial sua casa ficará protegida contra roubos, furtos, tempestades e muito mais. Solicite uma simulação e nós vamos encontrar o melhor seguro residencial para você. Fique livre da preocupação com os roubos, com a falta de segurança, contrate um seguro residencial por um preço muito baixo.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon7">
                <div class="area-seguros-icon-img">
                    <img src="assets/images/fianca.png" alt="mão com dinheiro">
                </div>
                <div class="area-seguros-icon-title"><h2>Seguro Fiança</h2></div>
                <p>Com o seguro fiança, você não precisa de fiador ou deposito caução. O seguro fiança é uma garantia contratada pelo locatário para dar segurança ao proprietário do imóvel. </p>
                <a href="">Saiba mais</a>
                <div class="area-seguros-icon7-aparecer">
                    <p>
                    Com a Coaching Seguros, você consegue realizar um seguro fiança sem juros e com parcelas que cabem no seu bolso. Solicite uma simulação que nós vamos encontrar o melhor seguro fiança que se adequa à sua realidade.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
            <div class="area-seguros-icon8" id="oi"> 
                <div class="area-seguros-icon-img">
                    <img src="assets/images/segurovida.png" alt="mão com dinheiro">
                </div>
                <div class="area-seguros-icon-title"><h2>Seguro de Vida</h2></div>
                <p>Veja como é fácil proteger você, família e funcionários. A Coaching Seguros atua com as melhores seguradoras. Solicite agora uma simulação.</p>
                <a href=""> Saiba mais</a>
                <div class="area-seguros-icon8-aparecer">
                    <p>
                    O seguro de vida abrange diversas situações, como diária por incapacidade temporária, doença grave, invalidez e morte natural e acidental. Contate-nos e enviamos uma simulação com os melhores seguros de vida e com os melhores preços.
                    </p>
                    <a href="">Voltar</a>
                </div>
            </div>
        </section>
        <section class="seguradoras">
            <div class="seguradoras-subtitle">
                <p>OPERADORAS E SEGURADORAS</p>
                <div class="seguradoras-subtitle-border"></div>
            </div>
            <div class="seguradoras-title"><h1>Trabalhamos com as melhores empresas do Brasil</h1></div>
            <div class="seguradoras-area">
                <div class="seguradoras-area1"></div>
                <div class="seguradoras-area2"></div>
                <div class="seguradoras-area3"></div>
                <div class="seguradoras-area4"></div>
                <div class="seguradoras-area5"></div>
                <div class="seguradoras-area6"></div>
                <div class="seguradoras-area7"></div>
                <div class="seguradoras-area8"></div>
                <!-- <div class="seguradoras-area9"></div> -->
                <div class="seguradoras-area10"></div>
                <div class="seguradoras-area11"></div>
                <div class="seguradoras-area12"></div>
                <div class="seguradoras-area13"></div>
                <div class="seguradoras-area14"></div>
                <div class="seguradoras-area15"></div>
                <div class="seguradoras-area16"></div>
                <!-- <div class="seguradoras-area17"></div> -->
                <div class="seguradoras-area18"></div>
                <div class="seguradoras-area19"></div>
                <div class="seguradoras-area20"></div>
                <div class="seguradoras-area21"></div>
                <!-- <div class="seguradoras-area22"></div> -->
                <div class="seguradoras-area23"></div>
                <div class="seguradoras-area24"></div>
                <div class="seguradoras-area25"></div>
                <div class="seguradoras-area26"></div>
                <!-- <div class="seguradoras-area27"></div> -->
                <div class="seguradoras-area28"></div>
                <!-- <div class="seguradoras-area29"></div>
                <div class="seguradoras-area30"></div>
                <div class="seguradoras-area31"></div> -->
                <div class="seguradoras-area32"></div>
                <!-- <div class="seguradoras-area33"></div> -->
                
            </div>
        </section>
        <section class="area1" id="simulacao">
            <!-- <div class="area1-sub-title"> Uma nova experiência para sua empresa</div> -->
            <div class="area1-title"><h1><span> Simule</span> os valores de todos os <span>Planos de Saúde </span></h1></div>
            <div class="area1-content">
                
                <div class="area1-content-button">
                    <h2>Simule gratuitamente todos<br> os Planos de Saúde</h2>
                    <div class="area1-button"><a href="">Simule</a></div>
                </div>
                <div class="area1-content-img">
                    <div class="area1-img"></div>
                </div>
            </div>
            <div class="area1-simulacao " >
                <h1>Escolha um plano de Sáude e faça uma Simulação:</h1>
                <div class="area1-simulacao-operadoras">
                    <div class="seguradoras-area0 operadoras-area1" data-id="0">
                        <p>Todas as<br> Operadoras</p>
                    </div>
                    <div class="seguradoras-area1 operadoras-area1" data-id="1"></div>
                    <div class="seguradoras-area2 operadoras-area1" data-id="2"></div>
                    <div class="seguradoras-area3 operadoras-area1" data-id="3"></div>
                    <div class="seguradoras-area4 operadoras-area1" data-id="4"></div>
                    <div class="seguradoras-area5 operadoras-area1" data-id="5"></div>
                    <div class="seguradoras-area6 operadoras-area1" data-id="6"></div>
                    <div class="seguradoras-area7 operadoras-area1" data-id="7"></div>
                    <div class="seguradoras-area8 operadoras-area1" data-id="8"></div>
                    <!-- <div class="seguradoras-area9"></div> -->
                    <div class="seguradoras-area10 operadoras-area1" data-id="9"></div>
                    <div class="seguradoras-area11 operadoras-area1" data-id="10"></div>
                    <div class="seguradoras-area12 operadoras-area1" data-id="11"></div>
                    <div class="seguradoras-area13 operadoras-area1" data-id="12"></div>
                    <div class="seguradoras-area14 operadoras-area1" data-id="13"></div>
                    <div class="seguradoras-area15 operadoras-area1" data-id="14"></div>
                    <div class="seguradoras-area16 operadoras-area1" data-id="15"></div>
                    <!-- <div class="seguradoras-area17"></div> -->
                    <div class="seguradoras-area18 operadoras-area1" data-id="16"></div>
                    <div class="seguradoras-area19 operadoras-area1" data-id="17"></div>
                    <div class="seguradoras-area20 operadoras-area1" data-id="18"></div>
                    <div class="seguradoras-area21 operadoras-area1" data-id="19"></div>
                    <!-- <div class="seguradoras-area22"></div> -->
                    <div class="seguradoras-area23 operadoras-area1" data-id="20"></div>
                    <div class="seguradoras-area24 operadoras-area1" data-id="21"></div>
                    <div class="seguradoras-area25 operadoras-area1" data-id="22"></div>
                    <div class="seguradoras-area26 operadoras-area1" data-id="23"></div>
                    <!-- <div class="seguradoras-area27"></div> -->
                    <div class="seguradoras-area28 operadoras-area1" data-id="24"></div>
                    <!-- <div class="seguradoras-area29"></div>
                    <div class="seguradoras-area30"></div>
                    <div class="seguradoras-area31"></div> -->
                    <div class="seguradoras-area32 operadoras-area1" data-id="25" id="id25"></div>
                    <!-- <div class="seguradoras-area33"></div> -->
                </div>
                <div class="area1-simulacao-form">
                    <form action="recebedor.php" method="POST">
                        <div class="area1-area-form">
                            <div class="area1-form-texts">
                                <h1>Faça uma simulação de Plano de Saúde</h1>
                                <h2>Encontre o melhor plano de saúde para você, sua família ou sua empresa.</h2>
                                <div class="area1-forms-escolha-operadora">
                                    <h3> Escolha uma Operadora acima  </h3>
                                </div>
                            </div>
                            <input type="hidden" value="" class="operadora-escolhida" name="operadora-escolhida">
                            <fieldset>
                                <legend>Informações Necessárias</legend>
                                <div class="form-selects">
                                    <label for="">
                                        Selecione o Plano<br>
                                        <select name="selecionar-plano" id="">
                                            <option value="0">Selecione</option>
                                            <option value="1">Individual</option>
                                            <option value="2">Familiar</option>
                                            <option value="3">Empresarial</option>
                                        </select>
                                    </label>
                                    <label for="">
                                        Possui CNPJ?<br>
                                        <select name="possui-cnpj" id="">
                                            <option value="0">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-campos">
                                    <label for="">
                                        Nome Completo<br>
                                        <input type="text" name="name" placeholder="Digite seu nome">
                                    </label>
                                    <label for="">
                                        E-mail<br>
                                        <input type="email" name="email" placeholder="Digite seu e-mail">
                                    </label>
                                </div>
                                <div class="form-tels">
                                   <div class="form-celular">
                                        <label for="" class="ddd">
                                                DDD<br>
                                                <input type="text" name="dddcelular" placeholder="DDD">
                                        </label>
                                        <label for="" class="celular">
                                                Celular<br>
                                                <input type="text" name="celular" placeholder="Digite seu celular">
                                        </label>
                                   </div>
                                   <div class="form-fixo">
                                        <label for="" class="ddd">
                                                DDD<br>
                                                <input type="text" name="dddfixo" placeholder="DDD">
                                        </label>
                                        <label for="" class="celular">
                                                Telefone<br>
                                                <input type="text" name="telefone-fixo" placeholder="Digite seu número">
                                        </label>
                                   </div>
                                </div>
                            </fieldset>  
                            <fieldset>
                                <legend>Informações Adicionais</legend>
                                <textarea name="info-adicionais" id="" cols="30" rows="10" placeholder=" Digite sua mensagem"></textarea>
                            </fieldset>  
                            <input type="submit" value="Receber Simulação">
                        </div>
                    </form>    
                </div>
            </div>
        </section>
        <section class="area2" >
            <div class="area2-text">
                <div class="area2-subtitle">Quem somos</div>
                <div class="area2-title"><h1>A Coaching Seguros inovou nos modelos de consultoria sobre planos de saúde e seguros.</h1></div>
                <p>Buscamos oferecer a melhor experiência aos nossos clientes, proporcionando o melhor atendimento desde ao ato inicial até o momento da contratação. Contamos com uma equipe especializada e que garante a melhor prestação de serviços para os nossos clientes, visando todo o suporte necessário para que o objetivo final seja alcançado. A felicidade e a satisfação completa de nossos clientes.</p>
                <!-- <div class="area2-button"><a href="">Saiba Mais</a></div> -->
            </div>
            <div class="area2-img">
                <div class="area2-parallax"></div>
            </div>
        </section>
        <section class="contato" id="contato-form">
            <div class="contato-subtitle">
                <p>Contato</p>
                <div class="contato-subtitle-border"></div>
            </div>
            <div class="contato-title"><h1>Solicite sua cotação sem compromisso!</h1></div>
            <form action="recebedor2.php" method="POST" >
                <span>Preencha os dados abaixo, que nós te retornaremos!</span>
                <label for="">
                    <input type="text" name= "name" placeholder="Digite seu nome completo"><br><br>
                </label>
                <label for="">
                    <input type="email" name= "email" placeholder="Digite seu e-mail"><br><br>
                </label>
                <label for="">
                    <input type="text" name= "celular" placeholder="Digite seu celular (XX)XXXXX-XXXX"><br><br>
                </label>
                <input type="submit" value="Enviar">
            </form>
        </section>
        <a class="whats-anime" href="https://api.whatsapp.com/send?phone=5511913142018&text=Quero%20receber%20uma%20simulaçao%20por%20whatsapp" target="_blank"></a>
    </main>
    <footer>
        <div class="logo"></div>
        <div class="contacts">
            <h3>Contatos</h3>
            <p> Rua Serra de Japi, 739, sala 04, Tatuapé, São Paulo - SP</p>
            <p>contato@coachingseguros.com.br</p>
            <p>11 2539-6687</p>
        </div>
        <div class="links">
            <h3>Links</h3>
            <a href="#simulacao">Faça uma simulação</a>
            <a href="#tiposPlanos">Planos de Saúde</a>
            <a href="#contato-form">Fale Conosco</a>
        </div>
        <div class="social">
            <h3>Siga-nos</h3>
            <a href=""><img src="assets/images/Facebook.png" alt="Facebook"></a>
            <a href=""><img src="assets/images/Instagram.png" alt="Instagram"></a>
            <a href=""><img src="assets/images/Linkedin.png" alt="Linkedin"></a>
        </div>
        <div class="baseboard">
            <p>@ Coaching Seguros - 2021</p>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BFS Desenvolvimento</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    


    
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style_aside_portifolio.css"> -->
    <!-- <link rel="stylesheet" href="responsividade.css"> -->
</head>
<body >
    <div class="content--body"> 
        <div class="menu--mobile--lateral">
            <nav>
                <ul>
                    <li><a onclick="fecharMenuMobile()" >
                        <div class="fecharMenu">X</div>
                    </a></li>
                    <li><a onclick="responsivo2()" class="responsivos2">Home</a></li>
                    <li><a onclick="portfolio2()" class="portfolio2">Portfólio</a></li>
                    <li><a onclick="contato2()" class="contato2">Contato</a></li>
                </ul>
            </nav>       
        </div>
        <header>
            
            <div class="header">
                <div class="logo" onclick="logo()">
                    <img src="images/Frame 5 (2).png">
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a onclick="home()" class="responsivos selecionada" href="#home">Home</a></li>
                            <!-- <li><a onclick="orcamento(click)" class="orcamento" href="#orcamento">Orçamento</a></li> -->
                            <li><a onclick="portfolio()" class="portfolio" href="#portfolio">Portfólio</a></li>
                            <li><a onclick="contato()" class="contato" href="#orcamento">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="contato" onclick="contato()" href="#orcamento">
                    Contato
                </div> -->
                <div class="botao--menu--mobile">
                    <div class="botao--menu"></div>
                    <div class="botao--menu"></div>
                    <div class="botao--menu"></div>
                </div>
                
            </div>
            
        </header>
       <main>
           <section class="banner" id="home">
               <div class="botoes">
                    <img class="seta" onclick="voltar()" src="images/chevron-left.svg"> 
                   <!-- <div class="next" onclick="voltar()"></div> -->
                   <!-- <div class="go" onclick="avancar()"></div> -->
                   <img class="seta" onclick="avancar()" src="images/chevron-right.svg"> 
               </div>
               <div class="banner--area">
                    <div class="banner--area-slide">
                        <div class="banner--titulo">
                            <h1> Criamos SITES RESPONSIVOS</h1>
                        </div>
                        
                        <div class="banner--area--content">
                            <img src="images/Sites_Resposivos.jpg">
                            <p>Criamos sites adaptáveis a todos os dispositivos.</p>
                        </div>
                        
                    </div>    
                    <div class="banner--area-slide">
                        <div class="banner--titulo">
                            <h1> Criamos SISTEMAS</h1>
                        </div>
                        
                        <div class="banner--area--content">
                            <img src="images/Sistemas_Web2.jpg.jpg">
                            <p> Desenvolvemos sistemas gerenciavéis para sua empresa.</p>
                        </div>
                        
                    </div>  
                    <div class="banner--area-slide">
                        <div class="banner--titulo">
                            <h1>Criamos LOJAS ONLINE</h1>
                        </div>
                        
                        <div class="banner--area--content">
                            <img src="images/Lojas_online.jpg">
                            <p> Desenvolvemos lojas virtuais personalizadas com o seu negócio</p>
                        </div>
                        
                    </div>  
                    <div class="banner--area-slide">
                        <div class="banner--titulo">
                            <h1>Criamos BLOGS</h1>
                        </div>
                        
                        <div class="banner--area--content">
                            <img src="images/Blog.jpg">
                            <p> Criamos Blogs profissionais e modernos. </p>
                        </div>
                        
                    </div>  
                    <!-- <h2 class="h2_1">SITES RESPONSIVOS</h2>
                    <h2 class="h2_2">SISTEMAS WEB</h2>
                    <h2 class="h2_3">LOJAS ONLINE</h2>
                    <h2 class="h2_4">BLOGS</h2> -->
               </div>
               <!-- <div class="banner--area2">
                    <img src="2235012.jpg" class="img1">
                    <img src="Sites_Resposivos.jpg" class="img2">
                    <img src="Sistemas_Web2.jpg.jpg" class="img3" style="display: none;">
                    <img src="Lojas_online.jpg" class="img4" style="display: none;">
                    <img src="Blog.jpg" class="img5" style="display: none;">
               </div> -->
               
           </section>
           <section class="portfolio--content" id="portfolio">
               <div class="cabecalho">
                    <!-- <div class="logo2">
                        <img src="images/Frame 3.png">
                    </div> -->
                    <!-- <div class="cabecalho--texto">
                        <h3> Escolha a linguagem do Projeto:</h3>
                    </div> -->
                </div>
               <div class="linguagens">
                   <ul>
                       <li class="html" onclick="html_()">HTML</li>
                       <li class="css" onclick="css_()">CSS</li>
                       <li class="javascript" onclick="javascript_()" >JAVASCRIPT</li>
                       <li class="php" onclick="php_()">PHP</li>
                       <!-- <li class="todos"  onclick="todos_()">TODOS</li> -->
                   </ul>
                   <div class="divs_orientadoras">
                       <div class="divs_html"></div>
                       <div class="divs_css  div_apagar"></div>
                       <div class="divs_javascript  div_apagar"></div>
                       <div class="divs_php  div_apagar"></div>
                       <!-- <div class="divs_todos  div_apagar"></div> -->
                   </div>
               </div>
               <div class="linguagens--conteudo">
                   <div class="linguagens--conteudo--1">
                        <div class="conteudo--1--html" >
                            <a href="SportClub\index.html" target="_blank">
                                <div class="image">
                                    <div class="image--html--3"></div>
                                </div>
                            </a>
                            <div class="html1--content">
                                <h5>SPORTCLUB</h5>
                                <p>Versão recriada para estudo</p>
                                <a href="SportClub\index.html" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--html" >
                            <a href="Casamentos/index.html" target="_blank">
                                <div class="image">
                                    <div class="image--html--4"></div>
                                </div>
                            </a>
                            <div class="html1--content">
                                <h5>Casamentos</h5>
                                <p>Oficina de Casamentos recriada para estudo</p>
                                <a href="Casamentos/index.html" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--html" >
                            <a href="Starbucks\index.html" target="_blank">
                                <div class="image">
                                    <div class="image--html--1"></div>
                                </div>
                            </a>
                            <div class="html1--content">
                                <h5>Starbucks</h5>
                                <p>Site do Starbucks recriado para estudo</p>
                                <a href="Starbucks\index.html" target="_blank">Clique aqui</a>
                            </div>
                        </div>
                        <div class="conteudo--1--html" >
                            <a href="AWAX\home.html" target="_blank">
                                <div class="image">
                                    <div class="image--html--2"></div>
                                </div>
                            </a>
                            <div class="html1--content">
                                <h5>AWAX</h5>
                                <p>Site AWAX recriado para estudo</p>
                                <a href="AWAX\home.html" target="_blank">Clique aqui</a>
                            </div>
                        </div>
                   </div>
                   <div class="linguagens--conteudo--2" style="display: none;">
    
                        <div class="conteudo--1--css" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="css1--content">
                                <h5>Titulo do CSS</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>par
                            </div>
                        </div>
    
                        <div class="conteudo--1--css" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="css1--content">
                                <h5>Titulo do CSS</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--css" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="css1--content">
                                <h5>Titulo do CSS</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--css" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="css1--content">
                                <h5>Titulo do CSS</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
                   </div>
                   <div class="linguagens--conteudo--3" style="display: none;">
    
                        <div class="conteudo--1--javascript" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="javascript--content">
                                <h5>Titulo do JAVASCRIPT</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--javascript" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="javascript--content">
                                <h5>Titulo do JAVASCRIPT</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--javascript" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="javascript--content">
                                <h5>Titulo do JAVASCRIPT</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--javascript" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="javascript--content">
                                <h5>Titulo do JAVASCRIPT</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
                   </div>
                   <div class="linguagens--conteudo--4" style="display: none;">
                        <div class="conteudo--1--php" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="php--content">
                                <h5>Titulo do PHP</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--php" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="php--content">
                                <h5>Titulo do PHP</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--php" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="php--content">
                                <h5>Titulo do PHP</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
    
                        <div class="conteudo--1--php" >
                            <a href="" target="_blank"><div class="image"></div></a>
                            <div class="php--content">
                                <h5>Titulo do PHP</h5>
                                <p>Resumo do site ou sistema</p>
                                <a href="" target="_blank">Clique aqui</a>
                            </div>
                        </div>
                   </div>
               </div>
            
           </section>
           <section class="contato-form" id="orcamento">
               <p>Solicite um orçamento:</p>
               <form  method="POST" id="form" action="recebedor2.php">
                   <div class="flash">
                        <?php
                            
                            $flash = '';
                            if($_SESSION['flash']) {
                                
                                $flash = $_SESSION['flash'];
                                
                                echo $flash;
                                $_SESSION['flash'] = '';
                                ?>
                                <script >
                                    window.scroll(0, 1650)
                                </script>    
                                <?php
                            }
                        ?>
                    </div>
                   <fieldset>
                       <legend>Contato</legend>
                        <div class="inputs--area1">
                            <label for="name">Nome</label><br>
                            <input type="text" name="name" id="name"><br>
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email"><br>
                            <label for="celular">Telefone (Opcional)</label><br>
                            <input type="text" name="celular" id="celular"><br>
                        </div>
                        <div class="message--flua">
                            <label for="message">Mensagem:</label><br>
                            <textarea name="message" id="message" cols="30" rows="7"></textarea>
                        </div>    
                        <button type="submit" id="button">Enviar</button>
                   </fieldset>
               </form>
           </section>
           
       </main>
       <a class="whats" href="https://api.whatsapp.com/send?phone=5511959982142&text=Quero%20saber%20mais%20informações%20sobre%20um%20produto" target="_blank">
        <!-- <img src="images/whatsapp.png"> -->

        <footer>
            
        </footer>
        <div class="atendimento"><span>Atendimento via Whatsapp</span></div>
        </a>
    </div>
    <div class="animation">
        
        
    </div>
    
    <script src="script.js"></script>
    <script src="menu--mobile.js"></script>
    
    

    
    <!-- <script src="script_aside_portfolio.js"></script> -->
    
</body>
</html>

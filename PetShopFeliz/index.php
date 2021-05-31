<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Feliz</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header container">
            <div class="logo">
                <img src="assets/images/logo.png" alt="logo pet shop feliz">
            </div>
            <nav>
                <ul>
                    <li><a href="">Cachorros</a></li>
                    <li><a href="">Gatos</a></li>
                    <li><a href="">Banho e Tosa</a></li>
                    <li><a href="">Outros</a></li>
                    <li><a href="">Fale Conosco</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="banner">
            <div class="div-fundo">
                <div class="slider--controls">
                    <div class="slider-control" onclick="goPrev()"><img src="assets/images/chevron-left.svg" alt=""></div>
                    <div class="slider-control" onclick="goNext()"><img src="assets/images/chevron-right.svg" alt=""></div>
                </div>
                <div class="container slidearea">
                    <div class="slider--width" >
                        <div class="slider--item" style="background-image: url('assets/images/cachorro-buldog.jpg');"> <p>Amamos o que fazemos!</p></div>
                        <div class="slider--item" style="background-image: url('assets/images/cachorro-caixa.jpg');"><p>Trabalhamos com os melhores<br> produtos!</p></div>
                        <div class="slider--item" style="background-image: url('assets/images/cachorro-feliz.jpg');"><p>Venha conhecer o nosso banho & tosa</p></div>
                        <div class="slider--item" style="background-image: url('assets/images/cachorro-osso.jpg');"><p>Seu bichinho será tratado será tratado com muito amor</p></div>
                        <div class="slider--item"style="background-image: url('assets/images/gato-deitado.jpg');"><p>Seu pet irá se divertir!</p></div>
                        <div class="slider--item" style="background-image: url('assets/images/gato-cachorro-casinha.jpg');"><p>Temos também hotel para cães e gatos</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="parallax">
                <div class="parallax-background">
                    <div class="info-conteudo container">
                        <div class="title"><h1>Banho e Tosa</h1></div> 
                        <div class="text1">
                            Os melhores produtos para o banho do seu pet
                        </div>
                        <div class="text2">
                            <p>Planos Mensais</p>
                            <p>Produtos de qualidade</p>
                            <p>Maior durabilidade</p>
                            <p>Taxi dog</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="photos">
            <div class="photos-content">
                <div class="container">
                    <div class="title"><h1>Fotos do Pet Shop feliz</h1></div> 
                    <div class="photos-images ">
                        <div class="photos-img1">
                            <img src="assets/images/cachorro-banho.jpg" alt="">
                        </div>
                        <div class="photos-img2">
                            <img src="assets/images/gato-brincando.jpg" alt="">
                        </div>
                        <div class="photos-img3">
                            <img src="assets/images/mulher-cachorro.jpg" alt="">
                        </div>
                        <div class="photos-img4">
                            <img src="assets/images/dois-cachorros.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>
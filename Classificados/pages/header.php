<?php require 'config.php';
require 'classes/UsuarioDao.php';
$u = new UsuarioDao($pdo);
$id = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="./"><h3>Classificados</h3></a>

                <ul class="nav-right">
                    <?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])): ?>
                        <li><a href="">Olá <?= $u->findId($id );?> </a></li>
                        <li><a href="meus-anuncios.php">Meus Anúncios</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    <?php else: ?>   
                        <li><a href="cadastre-se.php">Cadastre-se</a></li>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

        </div>
    </header>
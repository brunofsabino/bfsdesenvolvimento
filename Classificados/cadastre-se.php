<?php require 'pages/header.php'; ?>

<div class="container">
    <div class="form">
        <div class="area-form">
            <h1>Cadastre-se</h1>
            <?php 
            
            require 'classes/UsuarioDao.php'; 
            require 'config.php'; 
            $usuarioDao = new UsuarioDao($pdo);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //, VALIDATE_EMAIL
            $senha = filter_input(INPUT_POST, 'senha');
            $telefone = filter_input(INPUT_POST, 'tel');

            if($name && $email && $senha) {

                if($usuarioDao->findEmail($email) === false){
                    $u = new Usuarios();
                
                    $u->setName($name);
                    $u->setEmail($email);
                    $u->setTelefone($telefone);
                    $u->setPassword($senha);

                    $usuarioDao->cadastrar($u);
                    ?>
                    Cadastrado com sucesso!
                    <?php
                    require 'login.php';
                } else {
                    ?>
                    Usuário já existe<br>
                    <a href="login.php">Faça Login</a>
                    <?php
                }
                
            } else {
                //echo "Preencha corretamente os dados";
            }

            ?>
            <form method="post" action="">
                <label for="">
                    Nome:<br>
                    <input type="text" name="name" id="name"><br><br>
                </label>
                <label for="">
                    E-mail:<br>
                    <input type="email" name="email" id="email"><br><br>
                </label>
                <label for="">
                    Senha:<br>
                    <input type="password" name="senha" id="senha"><br><br>
                </label>
                <label for="">
                    Telefone:<br>
                    <input type="text" name="tel" id="tel"><br><br>
                </label>
                <button type="submit" >Cadastrar</button>
            </form>
        </div>
        
    </div>
    
</div>


<?php require 'pages/footer.php'; ?>
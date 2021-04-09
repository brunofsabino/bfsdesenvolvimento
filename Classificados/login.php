<?php require 'pages/header.php'; ?>

<div class="container">
    <div class="form">
        <div class="area-form">
            <h1>Login</h1>
            <?php 
            
            require 'classes/UsuarioDao.php'; 
            require 'config.php'; 
            $usuarioDao = new UsuarioDao($pdo);

            
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //, VALIDATE_EMAIL
            $senha = filter_input(INPUT_POST, 'senha');
            

            if($email && $senha) {

               
                    $u = new Usuarios();
                
                    //$u->setName($name);
                    $u->setEmail($email);
                    //$u->setTelefone($telefone);
                    $u->setPassword($senha);

                   
                    
                    if($usuarioDao->login($u->getEmail(), $u->getPassword() ) ) {
                        ?>
                            <script>window.location.href="./"</script>
                        <?php
                    } else{
                        ?>
                            Dados incorretos!
                        <?php
                    }

                
                
            } else {
                //echo "Preencha corretamente os dados";
            }

            ?>
            <form method="post" action="">
               
                <label for="">
                    E-mail:<br>
                    <input type="email" name="email" id="email"><br><br>
                </label>
                <label for="">
                    Senha:<br>
                    <input type="password" name="senha" id="senha"><br><br>
                </label>
               
                <button type="submit" >Fazer Login</button>
            </form>
        </div>
        
    </div>
    
</div>


<?php require 'pages/footer.php'; ?>
<?=$render('header', ['loggedUser' => $loggedUser]);?>
<section class="container main">
    <?=$render('sidebar', ['activeMenu' => 'search']); ?>

    <section class="feed mt-10">
        <div class="row">
            <div class="column pr-5">
                <h1>Configurações</h1>
                <br><br>

                <form action="<?=$base;?>/perfil/<?=$user->id;?>/config" method="POST">
                
                    Novo Avatar: <br><br>
                    <input type="file" value="Escolher arquivo">

                    <br><br>
                    Nova Capa: <br><br>
                    <input type="file" value="Escolher arquivo">
                    <br><br>

                    <hr>
                    <br><br>
                
                    <label for="">
                        Nome Completo:<br>
                        <input type="text" value="<?= $user->name;?>" name="name">
                    </label><br><br>
                    <label for="">
                        Data de nascimento:<br>
                        <input type="text" name="birthdate" value="<?= date('d/m/Y', strtotime($user->birthdate)) ;?>">
                    </label><br><br>
                    <label for="">
                        E-mail:<br>
                        <input type="email" name="email" value="<?= $user->email;?>">
                    </label><br><br>
                    <label for="">
                        Cidade:<br>
                        <input type="text" name="city" value="<?= $user->city;?>">
                    </label><br><br>
                    <label for="">
                        Trabalho:<br>
                        <input type="text" name="work"  value="<?= $user->work;?>">
                    </label><br><br>

                    <hr><br>
                    <label for="">
                        Nova Senha:<br>
                        <input type="password" name="password_new">
                    </label><br><br>
                    <label for="">
                        Confirmar Nova Senha:<br>
                        <input type="password" name="password_new_repeat" >
                    </label><br><br>

                    <input type="submit" value="Salvar" class="button">
                </form>
            </div>
            <!-- <div class="column side pl-5">
                <?= $render('right-side');?>
            </div> -->
        </div>

        
    </section>


</section>
<?= $render('footer');?>
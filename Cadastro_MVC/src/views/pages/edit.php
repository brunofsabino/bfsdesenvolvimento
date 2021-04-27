<h2>Editar</h2>
<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="POST">

    <label for="">
        Nome: <br>
        <input type="text" name="name" value="<?= $usuario['name']?>" >
    </label><br><br>
    <label for="">
        E-mail: <br>
        <input type="email" name="email" value="<?= $usuario['email']?>">
    </label><br><br>


    <input type="submit" value="Salvar">

</form>
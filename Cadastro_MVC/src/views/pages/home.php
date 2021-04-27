<?php $render('header'); ?>



<a href="<?= $base;?>/novo">Cadastrar Novo Usuário</a>


<table border="1" width="80%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÔES</th>
    </tr>

    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['name']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?= $base;?>/usuario/<?=$usuario['id']?>/editar">[ Editar ]</a>
                <a href="<?= $base;?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Você tem certeza que deseja excluir?')" >[ Excluir ]</a>
            </td>
        </tr>

    <?php endforeach; ?>


</table>














<?php $render('footer'); ?>
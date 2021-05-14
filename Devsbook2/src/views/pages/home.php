<?php $render('header', ['user' => $loggedUser]); ?>
<section class="container main">
    <?php $render('sidebar', ['activeMenu' => 'home']); ?>
    <section class="feed mt-10">
        <div class="row">
            <div class="column pr-5">
                <?php $render('feed', ['loggedUser' => $loggedUser]);?>

                <?php foreach($feed['posts'] as $feedItem): ?>
                    <?php $render('feed-posts', [
                        'data' => $feedItem,
                        'loggedUser' => $loggedUser
                    ]);?>
                <?php endforeach; ?>
            </div>
            <div class="column side pl-5">
                <?php $render('side-rigth');?>
            </div>
        </div>
    </section>
</section>        
<?= $render('footer');?> 
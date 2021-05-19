<div class="row">
    <div class="box flex-1 border-top-flat">
        <div class="box-body">
            <div class="profile-cover" style="background-image: url('<?=$base;?>/media/covers/cover.jpg');"></div>
            <div class="profile-info m-20 row">
                <div class="profile-info-avatar">
                    <img src="<?=$base;?>/media/avatars/<?= $user->avatar;?>" />
                </div>
                <div class="profile-info-name">
                    <div class="profile-info-name-text"><?= $user->name ?></div>
                    <div class="profile-info-location"><?= $user->city ?></div>
                </div>
                <div class="profile-info-data row">
                    <?php if($user->id != $loggedUser->id): ?>
                        <div class="profile-info-item m-width-20">
                            <a href="<?=$base;?>/perfil/<?=$user->id;?>/follow" class="button"><?= (!$isFollowing)? 'Seguir' : 'Deixar de Seguir';?></a>
                        </div>
                    <?php endif; ?>    
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n"><?= count($user->followers);?></div>
                        <div class="profile-info-item-s">Seguidores</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n"><?= count($user->following);?></div>
                        <div class="profile-info-item-s">Seguindo</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n"><?= count($user->photos)?></div>
                        <div class="profile-info-item-s">Fotos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
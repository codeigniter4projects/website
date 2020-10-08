<?php if(isset($heroes) && count($heroes)) : ?>
    <?php foreach($heroes as $hero) : ?>
        <div class="contributor-profiles">
            <a href="<?= $hero['url'] ?>" class="contributors-profile-link" target="_blank">
                <img src="<?= $hero['avatar'] ?>" class="contributor-profile-image" alt="<?= esc($hero['name'], 'attr') ?>"
                     title="<?= esc($hero['name'], 'attr') ?>"/> <br />
                <div class="contributors-stars"><?= $hero['stars'] ?></div>
            </a>
        </div>
    <?php endforeach ?>
<?php endif ?>

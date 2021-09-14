<?php if (isset($heroes) && count($heroes)): ?>
    <?php foreach ($heroes as $hero): ?>
        <div class="contributor-profiles">
            <a href="<?= $hero->html_url ?>" class="contributors-profile-link" target="_blank">
                <img src="<?= $hero->avatar_url ?>"
                	 class="contributor-profile-image"
                	 alt="<?= esc($hero->login, 'attr') ?>"
                     title="<?= esc($hero->login, 'attr') ?>" /> <br />
                <div class="contributors-stars"><?= $hero->stars ?></div>
            </a>
        </div>
    <?php endforeach ?>
<?php endif ?>

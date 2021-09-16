<?php foreach ($posts as $post) : ?>
<div class="rnapf-row">
    <div class="rnapf-date"><?= esc($post['lastpost']) ?></div>
    <div class="rnapf-title">
        <a href="<?= esc($post['mybb_forum_url'], 'attr') ?>/thread-<?= esc($post['tid'], 'attr') ?>-lastpost.html" class="rnapf-title-link">
            <?= esc($post['subject']) ?>
        </a>
    </div>
</div>
<?php endforeach ?>

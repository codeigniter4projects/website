<div class='widget'>
    <h4><?= esc($title) ?></h4>

    <?php foreach ($rows as $row) : ?>
        <?php if ($row !== null) : ?>
            <a href="<?= $row->link() ?>">
                <?= esc($row->title) ?>
            </a>
        <?php endif ?>
    <?php endforeach ?>
</div>

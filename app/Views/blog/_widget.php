<div class='widget'>
    <h4><?= esc($title) ?></h4>

    <?php foreach ($rows as $row) : ?>
            <a href="<?= $row->link() ?>">
                <?= esc($row->title) ?>
            </a>
    <?php endforeach ?>
</div>

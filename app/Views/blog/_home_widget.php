<?php if (isset($rows) && count($rows)) : ?>
    <?php foreach ($rows as $row) : ?>
        <?php if ($row instanceof \App\Entities\Post) : ?>
            <div class="rnapf-row">
                <div class="rnapf-date">
                    <?= $row->formatDate() ?>
                </div>
                <div class="rnapf-title">
                    <a href="<?= $row->link() ?>" class="rnapf-title-link"><?= esc($row->title) ?></a>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>

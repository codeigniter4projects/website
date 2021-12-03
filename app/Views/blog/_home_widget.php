<?php if (isset($rows) && count($rows)) : ?>
    <?php foreach ($rows as $row) : ?>
        <div class="rnapf-row">
            <div class="rnapf-date">
                <?= $row->date ?>
            </div>
            <div class="rnapf-title">
                <a href="<?= $row->link() ?>" class="rnapf-title-link"><?= esc($row->title) ?></a>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?php if (! empty($post)) : ?>
<div class="news-box">
    <div class="news-box-title">
        <a class="news-box-title-link" href="<?= $post->link() ?>"><?= esc($post->title) ?></a>
    </div>

    <div class="meta">
        <?= $post->date ?>
        <?= ! empty($post->author) ? 'by ' . esc($post->author) : '' ?>

        <br><br>Filed under:
        <ul class="tags">
            <?php foreach ($post->tags as $tag) : ?>
                <li><a href="/news/c/<?= $tag ?>"><?= esc($tag) ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <br>

    <div class="clr"></div>

    <?= $post->html ?>

</div><!--news-box ends here-->

<div class="clr"></div>

<?php endif ?>
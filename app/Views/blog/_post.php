<div class="news-box">
    <div class="news-box-title">
        <a href="<?= $post->link() ?>"><?= esc($post->title) ?></a>
    </div>

    <p class="meta">
        <?= ! empty($post->author) ? 'by '. esc($post->author) : '' ?>

        <ul class="tags">
            <?php foreach($post->tags as $tag) : ?>
                <li><a href="/news/c/<?= $tag ?>"><?= esc($tag) ?></a></li>
            <?php endforeach ?>
        </>
    </p>
    <div class="news-date"><?= $post->date ?>></div>

    <div class="clr"></div>

    <?= $post->html ?>

</div><!--news-box ends here-->

<div class="clr"></div>

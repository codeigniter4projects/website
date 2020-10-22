<?= $this->extend('layouts/two_column') ?>

<?= $this->section('content') ?>

    <?php if (isset($pageTitle)) : ?>
        <h2><?= esc($pageTitle) ?></h2>
    <?php endif ?>

    <?php if (isset($posts) && count($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
            <?= $this->setVar('post', $post)->include('blog/_post') ?>
        <?php endforeach ?>
    <?php else : ?>
        <p class="lead">Nothing to see here just yet.</p>
    <?php endif ?>

<div class="clr"></div>

<?= $this->endsection() ?>


<?= $this->section('sidebar') ?>
    <?= $this->include('blog/_news_sidebar') ?>
<?= $this->endSection() ?>

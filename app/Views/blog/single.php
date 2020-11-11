<?= $this->extend('layouts/two_column') ?>

<?= $this->section('content') ?>

    <?php if (isset($post)) : ?>
        <?= $this->setVar('post', $post)->include('blog/_post') ?>
    <?php endif ?>

<?= $this->endsection() ?>

<?= $this->section('sidebar') ?>
    <?= $this->include('blog/_news_sidebar') ?>
<?= $this->endSection() ?>

<?= $this->extend('layouts/two_column') ?>

<?= $this->section('content') ?>

    <?php if (isset($posts) && count($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
            <?= $this->setVar('post', $post)->include('blog/_post') ?>
        <?php endforeach ?>
    <?php else : ?>
        <p class="lead">Nothing to see here just yet.</p>
    <?php endif ?>




            <div class="news-box">
                <div class="news-box-title">CodeIgniter 4 Has Been Released</div> <div class="news-date">28.07.2020</div>
                <div class="clr"></div>
                <p>
                    <img src="public/assets/images/CI-4-Launched-2.jpg">
                </p>
                <p>
                    There are a quite a number of bug-fixes as people use the framework more.
                    Along with that there's a pretty long list of enhancements (see changelog).
                </p>

                <a href="news-detail.html" class="buttons-reverse">Read More</a>
            </div><!--news-box ends here-->

            <div class="clr"></div>




<div class="clr"></div>


<?= $this->endsection() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <link rel="stylesheet" href="/assets/css/ci-theme.css">
    <link rel="stylesheet" href="/assets/css/ci-responsive.css?ver=1.0">
    <link rel="stylesheet" href="/assets/css/animate.css">
</head>
<body>
    <?= $this->include('layouts/_top_nav') ?>

    <div class="clr"></div>
    <section id="content-outer-news">
        <div id="content-inner-news">
            <div id="news-left-column">
                <?= $this->renderSection('sidebar') ?>
            </div>

            <div id="news-column">
                <?= $this->renderSection('content') ?>
            </div><!--news-column ends-->
            <div class="clr"></div>

        </div><!--content inner ends-->
    </section><!--section ende-->

    <?= $this->include('layouts/_footer') ?>
</body>
</html>

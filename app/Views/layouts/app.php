<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/favicon.ico') ?>"/>
    <link rel="manifest" href="<?= base_url('/favicons/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('/favicons/safari-pinned-tab.svg') ?>" color="#ffffff">
    <meta name="msapplication-config" content="<?= base_url('/favicons/browserconfig.xml') ?>" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/assets/css/ci-theme.css">
    <link rel="stylesheet" href="/assets/css/ci-responsive.css?ver=1.0">
    <link rel="stylesheet" href="/assets/css/animate.css">

	<?= $this->renderSection('headerAssets') ?>
</head>
<body>
    <?= $this->include('layouts/_top_nav') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/_footer') ?>

	<?= $this->renderSection('footerAssets') ?>
</body>
</html>

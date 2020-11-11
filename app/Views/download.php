<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div class="ci-version-boxes">
            <div class="cv-boxes-version">
                <div class="version-name">CODEIGNITER <br />
                    <span class="version-no">4</span>
                </div>
            </div><!--cv-boxes-version ende-->
            <div class="cv-boxes-content">
                <p>CodeIgniter 4 is the latest version of the framework, intended for use with PHP 7.2+.</p>
                <p>Development was released on 24th of February, 2020. The current version is <?= $v4name ?>. </p>
                <p>You *could* download the V4 framework using the button below, but we encourage you to <a href="https://codeigniter.com/user_guide/installation/index.html" class="link-primary"
                    target="_blank">check</a>
                    the Installation section of the User Guide, to choose from several different ways you can install the framework :) </p>
                <div class="clr"></div>
                <div class="cv-boxes-buttons-area">
                    <a href="<?= $v4link ?>" class="buttons-reverse download-buttons" target="_blank">Download</a>
                    <a href="https://forum.codeigniter.com/forum-28.html" class="buttons-reverse download-buttons" target="_blank">Discuss</a>
                    <a href="https://github.com/codeigniter4/CodeIgniter4" class="buttons-reverse download-buttons" target="_blank">Sources</a>
                    <a href="https://github.com/codeigniter4/translations" class="buttons-reverse download-buttons" target="_blank">Translations</a>
                </div><!--cv-boxes-buttons-area ends here-->
            </div><!--cv-boxes-content ends here-->
        </div><!--ci-version-boxes ende-->


        <div class="ci-version-boxes">
            <div class="cv-boxes-version">
                <div class="version-name">CODEIGNITER <br />
                    <span class="version-no">3</span>
                </div>
            </div><!--cv-boxes-version ende-->
            <div class="cv-boxes-content">
                <p>CodeIgniter <?= $v3name ?> is the current version of the framework, intended for use with PHP 5.6+</p>
                <p>There have been a number of refinements since version 2, notably with the database, session handling and encryption.
                    Development of this version is ongoing. </p>

                <div class="clr"></div>
                <div class="cv-boxes-buttons-area">
                    <a href="<?= $v3link ?>" class="buttons-reverse download-buttons" target="_blank">Download</a>
                    <a href="https://github.com/bcit-ci/CodeIgniter" class="buttons-reverse download-buttons" target="_blank">Sources</a>
                    <a href="https://github.com/bcit-ci/codeigniter3-translations" class="buttons-reverse download-buttons" target="_blank">Translations</a>
                </div><!--cv-boxes-buttons-area ends-->
            </div><!--cv-boxes-content ends here-->
        </div><!--ci-version-boxes ende-->


        <div class="ci-version-boxes">
            <div class="cv-boxes-version">
                <div class="version-name">CODEIGNITER <br />
                    <span class="version-no">2</span>
                </div>
            </div><!--cv-boxes-version ende-->
            <div class="cv-boxes-content">
                <p>CodeIgniter 2.2.6 is the legacy version of the framework.</p>
                <p>The 2.x branch was originally released January 2011, and the last version (2.2.6) came out in October, 2015. </p>
                <p>CodeIgniter 2 has reached its end-of-life for support and updates, as of October 31, 2015. No further updates are planned.</p>

                <div class="clr"></div>
            </div><!--cv-boxes-content ends here-->
        </div><!--ci-version-boxes ende-->
    </div><!--content-inner ends here-->
    </div><!--section ende-->


    <div class="clr"></div>

<?= $this->endSection() ?>

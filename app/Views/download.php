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
			</div><!--cv-boxes-version end-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 4 is the latest version of the framework, intended for use with PHP 7.3+ (including 8.1).</p>
				<p>The initial release was February 24, 2020. The current version is <?= $v4name ?>. </p>
				<p>
					You *could* download this version of the framework using the button below, but we encourage you to check the
					<a href="https://codeigniter.com/user_guide/installation/index.html" class="link-primary" target="_blank">Installation section</a>
					of the User Guide, to choose from several different ways you can install the framework :)
				</p>
				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a href="<?= $v4link ?>" class="buttons-reverse download-buttons" target="_blank">Download</a>
					<a href="https://forum.codeigniter.com/forum-28.html" class="buttons-reverse download-buttons" target="_blank">Discuss</a>
					<a href="https://github.com/codeigniter4/CodeIgniter4" class="buttons-reverse download-buttons" target="_blank">Sources</a>
					<a href="https://github.com/codeigniter4/translations" class="buttons-reverse download-buttons" target="_blank">Translations</a>
					<a href="/user_guide/index.html" class="buttons-reverse download-buttons">User Guide</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">CODEIGNITER <br />
					<span class="version-no">3</span>
				</div>
			</div><!--cv-boxes-version ende-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 3 is the legacy version of the framework, intended for use with PHP 5.6+.</p>
				<p>This version is in maintenance, receiving mostly just security updates, and the current version is <?= esc($v3name) ?>.</p>

				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a href="<?= $v3link ?>" class="buttons-reverse download-buttons" target="_blank">Download</a>
					<a href="https://github.com/bcit-ci/CodeIgniter" class="buttons-reverse download-buttons" target="_blank">Sources</a>
					<a href="https://github.com/bcit-ci/codeigniter3-translations" class="buttons-reverse download-buttons" target="_blank">Translations</a>
					<a href="/userguide3" class="buttons-reverse download-buttons">User Guide</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

	</div><!--content-inner end-->
</section><!--section end-->

<div class="clr"></div>

<?= $this->endSection() ?>

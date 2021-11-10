<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<!-- CONTENT -->
<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="policies-icon-holder">
            <img src="/assets/icons/44521256.png" id="policies-icon"/>
        </div><!--icon ends here-->

            <p>The following items have been reported to the CodeIgniter core team and addressed as potential security
                concerns. Not all of them will affect your sites, but you should periodically review this list to
                determine any threats.
            </p>

            <p>These disclosures are primarily aimed at the website and surrounding environment. Security disclosures
                affecting the framework will be handled through GitHub's built-in Security Advisors functionality.
            </p>


            <div class="inner-page-text-box">
                <div class="inner-page-text-box-title">Disclosures</div>

                <div class="clr"></div>

                <div class="inner-page-text-sub-box">
                    <div class="inner-page-text-sub-box-title">CodeIgniter.com Email Spoofing</div>

                    <p>Oct 25, 2021 - <b>The MX</b> reported that the codeigniter.com domain was able to be used for email
                        spoofing due to the lack of a DKIM record. We updated the DNS to include a DKIM record as a result.
                    </p>
                </div>
            </div>

    </div><!--content-inner ends here-->
</section><!--section end -->


    <div class="clr"></div>

<?= $this->endSection() ?>

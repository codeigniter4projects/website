<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="policies-icon-holder">
            <img src="/assets/icons/policies.png" id="policies-icon" alt="policies icon"/>
            <p>
                CodeIgniter is a community-developed open source project, with several venues for the community members to gather
                and exchange ideas.
            </p>
        </div><!--icon ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Terms of Service</div>
            <p>
                All messages posted on this website or forum express the views of the authors, and do not necessarily reflect
                the views of the owners and administrators of this site. <br />
            </p>
            <p>
                By registering on the forum, you agree not to post any messages that are obscene, vulgar, slanderous, hateful,
                threatening, or that violate any laws. We will permanently ban all users who do so.
            </p>
            <p>
                We reserve the right to remove, edit, or move any messages for any reason.
            </p>

        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>


        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Privacy Policy</div>
            <p>
                We are committed to respecting and protecting your online privacy. <br />
            </p>
            <p>
                We only collect your personal information when you voluntarily sign-up for a membership account in order to use the CodeIgniter forum.
                Access to our website is generally unrestricted, and you may browse it anonymously.
            </p>
            <p>
                Any information collected from you will not be disclosed, in accordance with BC's Freedom of Information and Protection of Privacy Act (RSBC 1996 ch. 165).
            </p>

        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Website data</div>
            <p>
                Our servers automatically collect information that is essential to operating and maintaining the website's security.
                The information collected may include: browser type, Internet Service Provider (ISP) name, and IP address. <br />
            </p>
            <p>
                This website contains links to third party websites, and we are not responsible for the privacy provisions of those other websites.
            </p>
            <p>
                Some portions of the website may distribute small pieces of information (called "cookies") to web browsers,
                to assist you when you return to specific areas on the site. If you have concerns about cookies, you can change
                your web browser settings not to accept this information, or to display warning messages.
            </p>

        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

    </div><!--content-inner ends here-->
</section><!--section ende-->

<div class="clr"></div>

<?= $this->endSection() ?>

<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">
        <div id="discuss-icon-holder">
            <img src="/assets/icons/forum-new.png" id="discuss-icon" alt="discuss icon"/>
            <p>
                CodeIgniter is a community-developed open source project, with several venues for the community members to gather
                and exchange ideas.
            </p>
        </div><!--icon ends here-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                Security issues should be reported with an email to our <a href="mailto:security@codeigniter.com" class="link-reverse">security team</a>, rather than being brought up on the forum or
                raised as a GitHub issue, thanks!
            </p>
        </div><!--warning ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Forum</div>
            <p>
                Our forum has been setup using MyBB (MyBulletinBoard), with five main categories:
            </p>
            <ul>
                <li>General (news & discussion, lounge, events, and regional user groups)</li>
                <li>Using CodeIgniter (choosing CodeIgniter, installation & setup, model-view-controller,
                    libraries & helpers, best practices, and general help)</li>
                <li>CodeIgniter 4 (Roadmap, Development, feature requests, support, discussion)</li>
                <li>Development (CodeIgniter 3.x, CodeIgniter 2.x, and issues)</li>
                <li>External Resources (addins, jobs, learn more, and spotlight)</li>
            </ul>
            <p>
              The forum is where you can ask for help or discuss issues you are having with framework.
            </p>
            <a href="https://forum.codeigniter.com" class="buttons cta-btn" target="_blank">Visit The Forum</a>
        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>


        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Slack</div>
            <p>
                CodeIgniter has a Slack channel, where you can engage with other members of the community. Anyone can
                <a href="https://join.slack.com/t/codeigniterchat/shared_invite/zt-rl30zw00-obL1Hr1q1ATvkzVkFp8S0Q"
                   class="link-primary" target="_blank">signup</a> for it :)
            </p>

            <a href="https://join.slack.com/t/codeigniterchat/shared_invite/zt-rl30zw00-obL1Hr1q1ATvkzVkFp8S0Q" class="buttons cta-btn" target="_blank">Visit Slack Channel</a>
        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">GitHub</div>
            <p>
                The development action takes place on GitHub. See the contribute page for more details.
            </p>
            <p class="boldy600">
                The GitHub repository is where you can file bug reports (github issues), or where you can submit pull requests
                for enhancements to or fixes for framework. GitHub is *not* for support or help ... use the forum instead.
            </p>
            <p>
                GitHub issues are also used for tracking planned and approved enhancements, often tied in to specific releases.
            </p>

            <a href="https://github.com/bcit-ci/CodeIgniter/" class="buttons cta-btn" target="_blank">CodeIgniter 3</a>
            <a href="https://github.com/codeigniter4/codeigniter4/" class="buttons cta-btn" target="_blank">CodeIgniter 4</a>

        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

    </div><!--content-inner ends here-->
</section><!--section ende-->

<div class="clr"></div>

<?= $this->endSection() ?>

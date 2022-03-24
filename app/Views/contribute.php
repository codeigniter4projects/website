<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="contribute-heart-holder">
            <img src="/assets/icons/heart.png" id="contribute-heart" alt="heart icon"/>
            <p>Contribute to CodeIgniter</p>
        </div><!--heart ends here-->

        <div class="clr"></div>

        <div id="inner-page-opening-text">
            <p>
                CodeIgniter is a community driven project and accepts contributions of code and documentation from the community.
                These contributions are made in the form of Issues or Pull Requests on the <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">CodeIgniter repository</a> on GitHub.
            </p>
            <p>
                Issues are a quick way to point out a bug. If you find a bug or documentation error in CodeIgniter then please check
                a few things first:
            </p>
            <p>
            <ul>
                <li>There is not already an open Issue</li>
                <li>The issue has already been fixed (check the develop branch, or look for closed Issues)</li>
                <li>Is it something really obvious that you fix it yourself?</li>
                <li>If you are unsure if you have found a bug, then start a new thread in the CodeIgniter forum, in the <a href="https://forum.codeigniter.com/forum-30.html" target="_blank" class="link-primary">Issues section</a>!</li>
            </ul>
            </p>
            <p>
                Reporting issues is helpful but an even better approach is to send a Pull Request, which is done by “Forking”
                the main repository and committing to your own copy. This will require you to use the version control system called Git.
            </p>
        </div><!--inner-page-opening-text ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">CodeIgniter 4</div>
            <p>
                CodeIgniter 4 has its own <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">Github repository</a>. It deviates enough from CodeIgniter 3 that we want to keep them separate.
            </p>
            <p>
                The CodeIgniter 4 roadmap is explained on <a href="https://forum.codeigniter.com/forum-28.html" target="_blank" class="link-primary">our forum</a>, and work to be done is detailed in the <a href="https://github.com/codeigniter4/CodeIgniter4/issues" target="_blank" class="link-primary">repository issues</a>.
            </p>
        </div><!--contribute boxes ende-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                Security issues should be reported with an email to our security team, rather than being brought up on the forum or
                raised as a Github issue, thanks! Read more about responsible disclosure.
            </p>
        </div><!--warning ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Not a Programmer?</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Testers</div>
                <p>
                    We always need feedback on what works and what does not! Most of the development effort is going into Version 3,
                    so that is where the need is greatest. If you find something that is definitely a bug, and you are a Github user,
                    please create a new "issue". If you are not a Github user, or if you are unsure if you have found a bug, then start
                    a new thread in the CodeIgniter forum <a href="https://forum.codeigniter.com/forum-19.html" target="_blank" class="link-primary">Issues section</a>!
                </p>
                <p>
                    CodeIgniter 4 has its own <a href="https://forum.codeigniter.com/forum-30.html" target="_blank" class="link-primary boldy600">support subforum</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Writers</div>
                <p>
                    Every project needs good documentation! The CodeIgniter user guide is part of the <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank" class="link-primary">Github project</a> (mentioned above),
                    and there is always room for more tutorials.
                </p>
                <p>
                    CodeIgniter 4's user guide is part of its own <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">repository</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Evangelists</div>
                <p>
                    The word needs to be spread about good and worthy projects, which we think CodeIgniter is :) You can help by being active
                    in the forums, answering questions, and by spreading the word inside your developer or user community.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Moderators</div>
                <p>
                    The forum can always use moderators, to make sure that discussions/threads stay on topic, and to weed out the
                    inappropriate users or comments!
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Designers</div>
                <p>
                    Suggestions and help with our website, User Guide, and forum design are always welcome! We are working on themes
                    for each of these, which will be shared in their own Github repository.
                </p>
            </div><!--inner-page-text-sub-box ende-->

        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">{coderSection}</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Coders</div>
                <p>
                    If you would like to get involved in helping to build the next version of CodeIgniter, join us on <a href="https://github.com/codeigniter4/" target="_blank" class="link-primary">Github</a>!
                    A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms
                    to our <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst" target="_blank"> style guide</a>,
                    that it is properly documented, and that you use the
                    <a href="https://nvie.com/posts/a-successful-git-branching-model/" target="_blank" class="link-primary">Git-Flow branching model</a>.
                </p>
                <p>
                    CodeIgniter 3 equivalent link: its <a href="https://github.com/bcit-ci/CodeIgniter/" target="_blank" class="link-primary boldy600">repository</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Reviewers</div>
                <p>
                    Every project needs a core group of developers, familiar with the project standards and conventions,
                    to review proposed enhancements and fixes. We have been really fortunate with our group of reviewers so far,
                    and hope to recruit a few more.
                </p>
            </div><!--inner-page-text-sub-box ende-->
        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

		<?php if (isset($contributors)): ?>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Acknowledging Our Top Contributors</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3</div>

                <?= $this->setData(['heroes' => $contributors['framework3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3 Translations</div>

                <?= $this->setData(['heroes' => $contributors['translations3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4</div>

                <?= $this->setData(['heroes' => $contributors['framework4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4 Translations</div>

                <?= $this->setData(['heroes' => $contributors['translations4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">our Original Website</div>

                <?= $this->setData(['heroes' => $contributors['website3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">our Revised Website</div>

                <?= $this->setData(['heroes' => $contributors['website4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

        </div><!--inner-page-text-box ende-->

		<?php endif; ?>

    </div><!--content-inner ends here-->
</section><!--section ende-->


    <div class="clr"></div>

<?= $this->endSection() ?>

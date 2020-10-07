<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<section id="spotlight-outer">
    <div id="spotlight-inner">
        <div id="spotlight-title" class="animated fadeInDown">CodeIgniter
            <div id="spotlight-version">4</div>
        </div><!--spotlight title ende-->
        <div id="spotlight-note" class="animated fadeInDown">The small framework with powerful features</div>

        <div class="clr"></div>

        <div id="slogan-text" class="animated fadeInDown">
            CodeIgniter is a powerful PHP framework with a very small footprint,
            built for developers who need a simple and elegant toolkit to create full-featured web applications.</a>
        </div> <!--slogan-note ends here-->

        <div id="spotlight-button-holder" class="animated fadeInDown">
            <a href="" id="spotlight-link">Learn more</a>
        </div><!--spotlight-button-ends here-->

        <div id="github-scores" class="animated fadeInDown">
            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                        <img src="/assets/icons/spotlight-github-stars.png" />
                        <div class="github-data">
                            <span class="boldy700">Star</span> <?= $stargazers_count ?>
                        </div>
                    </div>
                </div>
            </a>

            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                        <img src="/assets/icons/spotlight-github-fork.png" />
                        <div class="github-data">
                            <span class="boldy700">Fork</span> <?= $forks_count ?>
                        </div>
                    </div>
                </div>
            </a>
        </div><!--github scores ends-->
    </div><!--spotlight-inner ende-->
</section><!--spotlight-outer ende-->

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">

        <div class="clr"></div>

        <div class="section-title">Why CodeIgniter? </div>
        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/star-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Framework with a small footprint</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter 4 is a 1.2MB download, plus 6MB for the user guide.
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/speed-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Exceptional performance</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter consistently outperforms most of its competitors.
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why-rows ende-->

        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/paper-plane-02b.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Simple solutions over complexity</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter encourages MVC, but does not force it on you.
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/security-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Strong Security</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        We take security seriously, with built-in protection against CSRF and XSS attacks.
                        Version 4 adds context-sensitive escaping and CSP
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why-rows ende-->

        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/book-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Clear documentation</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter consistently outperforms most of its competitors.
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/configuration-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Nearly zero configuration</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        Almost everything is set in CodeIgniter. Just connect your database!
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why rows ende-->

        <div class="clr"></div>
    </div><!--features-inner ends here-->

</section>

<div class="clr"></div>

<section id="important-links-outer">
    <div id="important-links-inner">
        <a href="#" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Download Page</span>
                <br />
                Find All The Releases
                <br /><br />
                <img src="/assets/icons/download.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="#" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Clear Documentation</span>
                <br />
                Read The Manual
                <br /><br />
                <img src="/assets/icons/documentation.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="#" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Get Support & Discuss Things</span>
                <br />
                View The Forums
                <br /><br />
                <img src="/assets/icons/forum.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="#" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Fix Bugs or Add Features</span>
                <br />
                On Github
                <br /><br />
                <img src="/assets/icons/github.png" />
            </div> <!--important-link-boxes ends here-->
        </a>
        <div class="clr"></div>
    </div><!--important-links-inner ende-->
</section> <!--important-links-inner ende-->

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">

        <div class="section-title">CodeIgniter Forum</div>

        <div class="clr"></div>

        <div class="recent-news-and-forum-posts margin-left-1">
            <div class="rnafp-name">Recent News</div>
            <div class="clr"></div>

            <div class="rnapf-row">
                <div class="rnapf-date">
                    2020.02.24
                </div><!--rnapf-date ends here-->
                <div class="rnapf-title">
                    <a href="#" class="rnapf-title-link">CodeIgniter 4.0 is here! </a>
                </div><!--rnapf-title ends here-->
            </div><!--rnapf-row ends here-->

            <div class="rnapf-row">
                <div class="rnapf-date">
                    2020.02.06
                </div><!--rnapf-date ends here-->
                <div class="rnapf-title">
                    <a href="#" class="rnapf-title-link">CodeIgniter 4.0.0-rc.4  </a>
                </div><!--rnapf-title ends here-->
            </div><!--rnapf-row ends here-->

            <div class="rnapf-row">
                <div class="rnapf-date">
                    2020.01.15
                </div><!--rnapf-date ends here-->
                <div class="rnapf-title">
                    <a href="#" class="rnapf-title-link">Important News about Jim Parry and the Project </a>
                </div><!--rnapf-title ends here-->
            </div><!--rnapf-row ends here-->

            <div class="rnapf-row">
                <div class="rnapf-date">
                    2019.11.25
                </div><!--rnapf-date ends here-->
                <div class="rnapf-title">
                    <a href="#" class="rnapf-title-link">CodeIgniter 4 Playground </a>
                </div><!--rnapf-title ends here-->
            </div><!--rnapf-row ends here-->

            <div class="rnapf-row">
                <div class="rnapf-date">
                    2019.10.19
                </div><!--rnapf-date ends here-->
                <div class="rnapf-title">
                    <a href="#" class="rnapf-title-link">CodeIgniter 4.0.0-rc.3 released </a>
                </div><!--rnapf-title ends here-->
            </div><!--rnapf-row ends here-->
        </div><!--recent-news-and-forum-posts here-->

        <div class="recent-news-and-forum-posts margin-left-3">
            <div class="rnafp-name">Active Forum Threads</div>
            <div class="clr"></div>

            <?= view_cell('\App\Libraries\Forums::posts', 'limit=5') ?>
        </div>

    </div><!--features-inner ends here-->

</section>

<div class="clr"></div>

<?= $this->endSection() ?>


<?= $this->extend('layouts/app') ?>

<?= $this->section('headerAssets') ?>
<style>
header {
    background-color: white;
}
</style>
<?= $this->endSection() ?>
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
            built for developers who need a simple and elegant toolkit to create full-featured web applications.
        </div> <!--slogan-note ends here-->

        <div id="spotlight-button-holder" class="animated fadeInDown">
            <a href="/user_guide/index.html" id="spotlight-link">Learn more</a>
        </div><!--spotlight-button-ends here-->

        <div id="github-scores" class="animated fadeInDown">
            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                      <svg height="32" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M16.003 0C7.17 0 .008 7.162.008 15.997c0 7.067 4.582 13.063 10.94 15.179.8.146 1.052-.328 1.052-.752 0-.38.008-1.442 0-2.777-4.449.967-5.371-2.107-5.371-2.107-.727-1.848-1.775-2.34-1.775-2.34-1.452-.992.109-.973.109-.973 1.605.113 2.451 1.649 2.451 1.649 1.427 2.443 3.743 1.737 4.654 1.329.146-1.034.56-1.739 1.017-2.139-3.552-.404-7.286-1.776-7.286-7.906 0-1.747.623-3.174 1.646-4.292-.165-.404-.715-2.031.157-4.234 0 0 1.343-.43 4.398 1.641a15.31 15.31 0 0 1 4.005-.538c1.359.006 2.727.183 4.005.538 3.055-2.07 4.396-1.641 4.396-1.641.872 2.203.323 3.83.159 4.234 1.023 1.118 1.644 2.545 1.644 4.292 0 6.146-3.74 7.498-7.304 7.893C19.479 23.548 20 24.508 20 26v4.428c0 .428.258.901 1.07.746C27.422 29.055 32 23.062 32 15.997 32 7.162 24.838 0 16.003 0z" fill="#181616" fill-rule="evenodd"/></svg>
                      <div class="github-data">
                          <span class="boldy700">Star</span> <?= $stargazers_count ?>
                      </div>
                    </div>
                </div>
            </a>

            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="131 -131 512 512" xml:space="preserve"><path d="M569.9 15.3c0-40.9-32.2-73.1-73.1-73.1s-73.1 32.2-73.1 73.1c0 26.7 14.9 50.3 36.2 62.9v11c-.8 18.9-8.7 35.4-22.8 50.3-14.9 14.9-31.5 22-50.3 22.8-30.7.8-54.3 5.5-73.1 16.5V5.1c21.2-12.6 36.2-35.4 36.2-62.9 0-40.9-32.2-73.1-73.1-73.1s-72.7 32.1-72.7 73c0 26.7 14.9 50.3 36.2 62.9v239.9c-21.2 12.6-36.2 36.2-36.2 62.9 0 40.9 32.2 73.1 73.1 73.1s73.1-32.2 73.1-73.1c0-19.7-7.1-36.2-19.7-49.5 3.1-2.4 17.3-14.9 21.2-17.3 9.4-3.9 20.4-6.3 34.6-6.3 38.5-1.6 71.6-16.5 100.7-45.6 29.1-29.1 44-72.4 45.6-110.1h-.8c23-14.2 38-37 38-63.7zM278.1-101.9c24.4 0 44 20.4 44 44s-20.4 44-44 44-44-20.4-44-44 20.4-44 44-44zm0 453c-24.4 0-44-20.4-44-44s20.4-44 44-44 44 20.4 44 44c-.8 24.4-20.4 44-44 44zM496.7 59.3c-24.4 0-44-20.4-44-44s20.4-44 44-44 44 20.4 44 44c.1 23.6-20.4 44-44 44z"/></svg>
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

<section class="content-outer">
    <div class="content-inner">

        <div class="clr"></div>

        <div class="section-title">Why CodeIgniter? </div>
        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/star-02a.png" alt="Star Icon"/>
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
                    <img src="/assets/icons/speed-02a.png" alt="Performance Icon"/>
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
                    <img src="/assets/icons/paper-plane-02b.png" alt="Paper Plane Icon"/>
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
                    <img src="/assets/icons/security-02a.png" alt="Security Shield Icon"/>
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
                    <img src="/assets/icons/book-02a.png" alt="Documentation Icon"/>
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
                    <img src="/assets/icons/configuration-02a.png" alt="Configuration Icon"/>
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
        <a href="/download" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Download Page</span>
                <br />
                Find All The Releases
                <br /><br />
                <img src="/assets/icons/download.png" alt="Download Icon"/>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="/user_guide/index.html" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Clear Documentation</span>
                <br />
                Read The Manual
                <br /><br />
                <img src="/assets/icons/documentation.png" alt="Documentation Icon"/>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://forum.codeigniter.com/" class="important-link" target="_blank">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Get Support & Discuss Things</span>
                <br />
                View The Forums
                <br /><br />
                <img src="/assets/icons/forum.png" alt="Forum Icon"/>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://github.com/codeigniter4/CodeIgniter4" class="important-link" target="_blank">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Fix Bugs or Add Features</span>
                <br />
                On Github
                <br /><br />
                <img src="/assets/icons/github.png" alt="Github Icon"/>
            </div> <!--important-link-boxes ends here-->
        </a>
        <div class="clr"></div>
    </div><!--important-links-inner ende-->
</section> <!--important-links-inner ende-->

<div class="clr"></div>

<section class="content-outer">
    <div class="content-inner">

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


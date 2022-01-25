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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><path fill="none" stroke="#F15C28" stroke-miterlimit="10" d="m48.445 23.053-15.18-1.33-.021-.006s-4.707-10.592-6.16-14.124c-1.455-3.531-3.116 0-3.116 0l-6.013 14.064-15.27 1.326s-3.871.497-.957 2.965C4.636 28.412 13.24 36.12 13.274 36.15l-.038-.028s-2.521 11.313-3.453 15.019c-.933 3.701 2.503 1.854 2.503 1.854l13.19-7.807.284-.023c.11.063 10.059 5.79 13.297 7.773 3.256 1.996 2.517-1.836 2.517-1.836l-3.513-14.908c1.008-.914 8.66-7.859 11.363-10.183 2.896-2.489-.979-2.958-.979-2.958zM13.276 36.15l.031.023m24.631.08.004.017"/><path opacity=".5" fill="#F4E7E4" d="M29.309 16.157c.306-.378.584-.741.842-1.095-1.244-2.838-2.557-5.852-3.209-7.439-1.455-3.531-3.116 0-3.116 0l-6.013 14.064-15.27 1.326s-3.871.497-.958 2.965c2.909 2.463 11.512 10.17 11.546 10.202l-.039-.027S10.571 47.466 9.639 51.17c-.933 3.703 2.503 1.854 2.503 1.854l2.076-1.229c2.349-9.326 7.383-26.101 15.091-35.638z"/></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><path fill="#C9340A" d="M26.303 13.447a.668.668 0 0 1-1.336 0v-2.272a.669.669 0 0 1 1.336 0v2.272zM10.1 29.573c.368 0 .667.298.667.666a.67.67 0 0 1-.667.669H7.827a.667.667 0 1 1 0-1.335H10.1zM40.901 30.239a.666.666 0 1 1 0-1.333h2.271a.668.668 0 1 1 0 1.333h-2.271zM37.839 19.838a.665.665 0 0 1-.942-.019.664.664 0 0 1 .02-.945l1.639-1.573a.665.665 0 0 1 .942.019.665.665 0 0 1-.018.943l-1.641 1.575zM14.525 18.075a.667.667 0 1 1-.963.924l-1.574-1.64a.667.667 0 1 1 .965-.924l1.572 1.64zM29.062 29.275c-.776.467-1.574.567-1.78.222-.209-.344.252-1.003 1.028-1.471l4.783-2.884c.776-.468 1.575-.567 1.783-.223.21.346-.252 1.004-1.028 1.472l-4.786 2.884z"/><circle fill="#C9340A" cx="25.75" cy="30.24" r="3.031"/><path fill="#C9340A" d="M34.102 40.217a.887.887 0 0 1-.888.888H18a.89.89 0 1 1 0-1.777h15.214c.491 0 .888.398.888.889z"/><circle fill="none" stroke="#F15C28" stroke-miterlimit="10" cx="25.501" cy="29.427" r="22.833"/><circle fill="none" stroke="#F15C28" stroke-miterlimit="10" cx="25.501" cy="29.426" r="18.341"/></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><g fill="none" stroke="#F15C28" stroke-miterlimit="10"><path d="M47.226 5.013 2.005 28.5c-2.261 1.969 0 3.063 0 3.063l3.939 1.387 8.909 3.048L41.656 13.24 21.239 38.21l18.841 6.48c4.304 2.261 4.448-1.095 4.448-1.095s5.396-33.769 5.469-36.977c.073-3.209-2.771-1.605-2.771-1.605zM28.423 45.483l-6.163 6.848s-1.638 1.677-1.769-.614-.718-9.233-.718-9.233l8.65 2.999"/></g></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><path fill="none" stroke="#F15C28" stroke-miterlimit="10" d="M49.691 13.907c0-3.191-4.055-4.724-4.055-4.724-8.234-.479-13.945-4.085-16.66-6.447C26.266.375 25.5.981 25.5.981s-.767-.606-3.479 1.755c-2.713 2.362-8.425 5.969-16.66 6.447 0 0-4.054 1.532-4.054 4.724s-3.256 26.906 11.426 37.757c0 0 6.171 5.021 12.767 6.425 6.596-1.403 12.768-6.425 12.768-6.425 14.679-10.851 11.423-34.565 11.423-37.757z"/><path fill="#C9340A" d="M32.074 24.864c-.637-.625-1.912-.313-3.104.855l-5.778 5.888-1.943-1.907c-.615-.603-1.622-.576-2.247.061s-.634 1.643-.018 2.249l3.401 3.336c.615.604 1.621.576 2.246-.063.282-.286 6.648-7.298 6.648-7.298 1.192-1.343 1.433-2.496.795-3.121z"/></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><path fill="none" stroke="#C9340A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M25.5 15.164S4.592 11.821.673 13.781v31.89s12.874-7.103 24.827-1.914c11.952-5.188 24.827 1.914 24.827 1.914v-31.89c-3.92-1.96-24.827 1.383-24.827 1.383z"/><path fill="#FFF" stroke="#F15C28" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M25.563 15.202s-9.377-6.457-20.446-3.843v28.132s12.299-1.538 20.446 3.536c8.147-5.074 20.446-3.536 20.446-3.536V11.359c-11.067-2.614-20.446 3.843-20.446 3.843z"/><path fill="#C9340A" d="M25.5 14.5s-1.143 19.565.513 28.527"/></svg>
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">Clear documentation</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        The User Guide contains an introduction, tutorial, a number of "how to" guides, and then reference documentation for the components that make up the framework.
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" xml:space="preserve"><g fill="none" stroke="#C9340A" stroke-miterlimit="10"><path stroke-linecap="round" stroke-linejoin="round" d="m27.27 37.34 2.986-.469-.083-4.438-2.905.054a11.068 11.068 0 0 0-1.578-3.851l1.801-2.133-2.969-3.299-2.226 2s-2.271-1.117-3.662-1.407l-.381-2.765h-4.438v2.82a11.11 11.11 0 0 0-3.406 1.421L8 23.519l-3.079 3.196 2.045 1.97a11.096 11.096 0 0 0-1.503 3.606l-2.956.25-.232 4.433 2.987.156s.934 2.489 1.884 3.874l-1.627 2.534 3.371 2.887 1.804-2.108a11.088 11.088 0 0 0 3.31 1.29l.259 2.89 4.433.212.143-2.99s2.251-.822 3.466-1.592l2.465 1.729 3.023-3.252-2.051-1.905c.718-1.128 1.528-3.359 1.528-3.359zm-11.006 4.242a6.71 6.71 0 0 1-6.711-6.711 6.711 6.711 0 1 1 13.423 0 6.711 6.711 0 0 1-6.712 6.711z"/><path stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" d="m47.968 17.619 1.671-.262-.047-2.481-1.624.029a6.225 6.225 0 0 0-.883-2.156l1.007-1.193-1.661-1.846-1.245 1.121s-1.27-.625-2.048-.788l-.215-1.548H40.44v1.578a6.208 6.208 0 0 0-1.905.795l-1.349-.981-1.723 1.789 1.145 1.103a6.108 6.108 0 0 0-.84 2.016l-1.655.14-.131 2.48 1.674.088s.521 1.393 1.054 2.167l-.912 1.418 1.885 1.615 1.011-1.18c.566.334 1.19.581 1.852.722l.144 1.617 2.48.119.08-1.673s1.261-.46 1.939-.891l1.38.967 1.69-1.818-1.148-1.066c.405-.631.857-1.881.857-1.881zm-6.157 2.374a3.755 3.755 0 1 1 .003-7.51 3.755 3.755 0 0 1-.003 7.51z"/><path stroke-width=".5" d="m47.909 43.994 1.67-.262-.047-2.482-1.625.029a6.199 6.199 0 0 0-.883-2.154l1.009-1.194-1.661-1.845-1.244 1.12s-1.271-.626-2.05-.789l-.214-1.548h-2.482v1.579a6.245 6.245 0 0 0-1.905.794l-1.349-.981-1.723 1.789 1.145 1.103a6.178 6.178 0 0 0-.842 2.017l-1.652.142-.13 2.479 1.673.088s.521 1.393 1.052 2.167l-.911 1.418 1.886 1.614 1.011-1.179a6.235 6.235 0 0 0 1.85.723l.145 1.617 2.48.118.079-1.673s1.261-.461 1.939-.892l1.379.968 1.691-1.818-1.146-1.066c.402-.634.855-1.882.855-1.882zm-6.157 2.375a3.755 3.755 0 1 1 .001-7.51 3.755 3.755 0 0 1-.001 7.51z"/></g></svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M9 12h2l-3 3-3-3h2V7h2v5zm3-8c0-.44-.91-3-4.5-3C5.08 1 3 2.92 3 5 1.02 5 0 6.52 0 8c0 1.53 1 3 3 3h3V9.7H3C1.38 9.7 1.3 8.28 1.3 8c0-.17.05-1.7 1.7-1.7h1.3V5c0-1.39 1.56-2.7 3.2-2.7 2.55 0 3.13 1.55 3.2 1.8v1.2H12c.81 0 2.7.22 2.7 2.2 0 2.09-2.25 2.2-2.7 2.2h-2V11h2c2.08 0 4-1.16 4-3.5C16 5.06 14.08 4 12 4z"/></svg>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="/user_guide/index.html" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Clear Documentation</span>
                <br />
                Read The Manual
                <br /><br />
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"/></svg>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://forum.codeigniter.com/" class="important-link" target="_blank">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Get Support & Discuss Things</span>
                <br />
                View The Forums
                <br /><br />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 84" xml:space="preserve"><path d="M82 8.993H34c-1.1 0-2 .9-2 2v14H2c-1.1 0-2 .9-2 2v32c0 1.1.9 2 2 2h8v12c0 3 2.9 1.9 3.4 1.4l13.4-13.4H50c1.1 0 2-.9 2-2v-14h5.3l13.3 13.4c1.3 1.3 3.4.3 3.4-1.4v-12h8c1.1 0 2-.9 2-2v-32c0-1.1-.9-2-2-2zm-34 48H26c-.5 0-1 .2-1.4.6L14 68.193v-9.2c0-1.1-.9-2-2-2H4v-28h28v14c0 1.1.9 2 2 2h14v12zm32-16h-8c-1.1 0-2 .9-2 2v9.2l-10.5-10.6c-.4-.4-.9-.6-1.4-.6H36v-28h44v28z"/></svg>
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://github.com/codeigniter4/CodeIgniter4" class="important-link" target="_blank">
            <div class="important-link-boxes">
                <span class="boldy600 dark">Fix Bugs or Add Features</span>
                <br />
                On Github
                <br /><br />
                <svg height="32" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M16.003 0C7.17 0 .008 7.162.008 15.997c0 7.067 4.582 13.063 10.94 15.179.8.146 1.052-.328 1.052-.752 0-.38.008-1.442 0-2.777-4.449.967-5.371-2.107-5.371-2.107-.727-1.848-1.775-2.34-1.775-2.34-1.452-.992.109-.973.109-.973 1.605.113 2.451 1.649 2.451 1.649 1.427 2.443 3.743 1.737 4.654 1.329.146-1.034.56-1.739 1.017-2.139-3.552-.404-7.286-1.776-7.286-7.906 0-1.747.623-3.174 1.646-4.292-.165-.404-.715-2.031.157-4.234 0 0 1.343-.43 4.398 1.641a15.31 15.31 0 0 1 4.005-.538c1.359.006 2.727.183 4.005.538 3.055-2.07 4.396-1.641 4.396-1.641.872 2.203.323 3.83.159 4.234 1.023 1.118 1.644 2.545 1.644 4.292 0 6.146-3.74 7.498-7.304 7.893C19.479 23.548 20 24.508 20 26v4.428c0 .428.258.901 1.07.746C27.422 29.055 32 23.062 32 15.997 32 7.162 24.838 0 16.003 0z" fill="#181616" fill-rule="evenodd"/></svg>
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

        <div class="flex-container">
            <div class="recent-news-and-forum-posts">
                <div class="rnafp-name">Recent News</div>
                <div class="clr"></div>

                <?= view_cell('\App\Libraries\Blog::recentPostsWidget', 'limit=5, view=blog/_home_widget') ?>
            </div><!--recent-news-and-forum-posts here-->

            <div class="recent-news-and-forum-posts">
                <div class="rnafp-name">Active Forum Threads</div>
                <div class="clr"></div>

                <?= view_cell('\App\Libraries\Forums::posts', 'limit=5') ?>
            </div>
        </div>

    </div><!--features-inner ends here-->

</section>

<div class="clr"></div>

<?= $this->endSection() ?>


<footer id="footer-outer">
    <div id="footer-inner">
        <div id="footer-inner-left">
            <a href="/policies" class="footer-menu-item" >Policies</a>
            <a href="/the-fine-print" class="footer-menu-item" >The Fine Print</a>
            <a href="/news" class="footer-menu-item">News</a>
            <a href="/discuss" class="footer-menu-item" >Discuss</a>
            <a href="/contribute" class="footer-menu-item" >Contribute</a>
            <a href="/download" class="footer-menu-item" >Download</a>
        </div><!--footer-inner-left ends here-->

        <div id="footer-inner-right">
            <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-github-red-03.png" />
                        <br />
                        <span class="data">
						Star
						<?= $stargazers_count ?? 'unknown' ?>
					</span>
                    </div>
                </div>
            </a>

            <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-fork-red-03.png" />
                        <br />
                        <span class="data">
						Fork
						<?= $forks_count ?? 'unknown' ?>
					</span>
                    </div>
                </div>
            </a>

            <a href="https://forum.codeigniter.com" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-forum-red-03.png" />
                        <br />
                        <span class="data">
						Forum
					</span>
                    </div>
                </div>
            </a>

            <a href="https://codeigniterchat.slack.com/" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-slack-red-03.png" />
                        <br />
                        <span class="data">
						Slack
						Chat
					</span>
                    </div>
                </div>
            </a>
        </div><!--footer-inner-right ends here-->
    </div><!--footer-inner ends here-->

</footer>

<div class="clr"></div>

<div id="footer-copyrights">
    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
        open source licence.</p>

    <img id="scroll-to-top" src="/assets/icons/ci-footer.png"/>

</div>
<!-- SCRIPTS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--
<script>
  function togglseMenu() {
    var menuItems = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menuItems.length; i++) {
      var menuItem = menuItems[i];
      menuItem.classList.toggle("hidden");
    }
  }
</script>
-->

<script>
    $('#menu-toggle button').click(function(){
        $("#top-menu").slideToggle("slow");
    });

    $('#scroll-to-top').click(function(){
        $("html").animate({ scrollTop: 0 }, "slow");
    });

    $('#search').click(function(){
        $maxHeight = 120;
        if($('#header-inner').height() < $maxHeight){
            $('#header-inner').animate({'height': '120'}, 400);
        }else{
            $('#header-inner').animate({'height': '60'}, 400);
        }
    });
</script>

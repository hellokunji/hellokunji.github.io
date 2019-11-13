<?php

?>

	<footer>
		<div class="footer_main">
			<div class="fm_brand">
				<p>Kunji Meena</p>
				<h5>Freelance Web Designer</h5>
			</div>
			<div class="fm_links">
				<p class="fmc_head">More Links</p>
				<div class="fmc_desc fml_desc">
					<a href="/">Home</a>
					<a href="/portfolio">Portfolio</a>
					<a href="/about">About</a>
					<a href="/blog">Blog</a>
					<a href="/contact">Contact</a>
				</div>
			</div>
			<div class="fm_social">
				<p class="fmc_head">Let's connect</p>
				<div class="fmc_desc fms_desc">
					<a href="https://www.facebook.com/kunjimeenawebdesigner" target="_blank">
						<img src="/blog/wp-content/themes/kunjimeena/public/img/socialIcon/facebook.png" alt="facebook"/>
					</a>
					<a href="https://www.linkedin.com/in/kunjimeena" target="_blank">
						<img src="/blog/wp-content/themes/kunjimeena/public/img/socialIcon/linkedin.png" alt="linkedin"/>
					</a>
					<a href="https://www.behance.net/kunjimeena" target="_blank">
						<img src="/blog/wp-content/themes/kunjimeena/public/img/socialIcon/behance.png" alt="behance"/>
					</a>
					<a href="https://www.instagram.com/wonderfull_club" target="_blank">
						<img src="/blog/wp-content/themes/kunjimeena/public/img/socialIcon/instagram.png" alt="instagram"/>
					</a>
				</div>
			</div>
			<div class="fm_action">
				<div class="fb-like" data-href="https://www.facebook.com/kunjimeenawebdesigner" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

				<div class="fb-follow" data-href="https://www.facebook.com/kunjimeenawebdesigner" data-layout="button" data-size="small" data-show-faces="false"></div>

				<div class="fb-share-button" data-href="
					<?php
						if(is_single()){
							the_permalink();
						}
						else{
							echo "http://www.kunjimeena.com/blog/";
						}
					?>
				" data-layout="button_count" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.kunjimeena.com%2F&amp;src=sdkpreparse">Share</a></div>
			</div>
		</div>
	</footer>
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--javascript-->
	<script type="text/javascript">
		$(document).ready(function(){
			window.addEventListener("scroll", handleScroll);

			$("#ham_menu").click(function(){
				$("#ham_menu").toggleClass("ham_menu_active");
				$("body").toggleClass("no_scroll");
				$(".hm_menu").slideToggle(200);
				$(".hm_menu a").toggleClass("hm_menu_a_show");
			});
			/*
			$("#_bc_icon").click(function(){
				$("._bc_m").slideToggle(200);
			});
			*/
		});

		var lastScrollPos= 0;
		function handleScroll(){
			var currentScrollPos= $(window).scrollTop();
			//console.log("pos: "+scrollPos);
			if(currentScrollPos < 15){
				$("header").removeClass("h_scroll");
			}
			else{
				if(currentScrollPos>lastScrollPos){
					$("header").addClass("h_scroll");
				}
				else{
					$("header").removeClass("h_scroll");
				}
			}
			lastScrollPos= currentScrollPos;
		}
	</script>


	

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=166359117128660";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!--GOOGLE ANALYTICS-->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73239705-2', 'auto');
    ga('send', 'pageview');
  </script>

<?php wp_footer(); ?>

</body>
</html>

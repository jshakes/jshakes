<div class="wrapper clearfix" id="footer-wrapper">
    <footer class="content">
        <div class="wrapper clearfix">
            <section class="s2">
                <p><a href="https://profiles.google.com/102535426839727420493" target="_blank" rel="author">James Shakespeare</a>, <?php echo date('Y'); ?></p>
                <p>Made with &hearts; in London</p>    
            </section>
            <section class="s2">
                <?php
                //Output a random quote here
                $args = array(
                    'post_type' => 'quote',
                    'orderby' => 'rand',
                    'posts_per_page' => 1
                );
                $quote = new WP_Query($args);
                $quote->the_post();
                ?>
                <p class="quote-body">&ldquo;<?php echo get_the_content(); ?>&rdquo;</p>
                <span class="quote-source">&mdash;<?php the_title(); ?></span>
                <?php wp_reset_postdata(); ?>
            </section>
        </div>
    </footer>
</div>
	
	<!-- Scripts -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
    
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('.png_bg');</script>
	<![endif]-->
	
	<!-- Twitter, FB, Blah blah -->

	<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	<script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
  </script>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
	<!-- BEGIN Tynt Script -->
  <script type="text/javascript">
  if(document.location.protocol=='http:'){
   var Tynt=Tynt||[];Tynt.push('dmHqJy1Xir4yqDacwqm_6r');Tynt.i={"ap":"Read more:","aw":"100"};
   (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
  }
  </script>
  <!-- END Tynt Script -->
  
	<!-- Theme hook -->
	<?php wp_footer(); ?>	
 
    
<!-- END body -->
</body>
</html>
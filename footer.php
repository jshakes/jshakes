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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.8.3.min.js"><\/script>')</script>
	
	<!-- Theme hook -->
	<?php wp_footer(); ?>	
 
    
<!-- END body -->
</body>
</html>
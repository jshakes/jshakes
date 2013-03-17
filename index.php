<?php 
/*
The posts loop. Fetches 'loop-posts.php' to output the posts themselves.
*/

get_header(); 
?>
</div><!-- /#header-wrapper -->
<?php
if ( have_posts() ): 
?>
<div class="wrapper content-wrapper">
       
  <div class="container clearfix" id="post-loop">
    
    <?php get_template_part('loop', 'blog'); ?>
    
    <div class="post-navigation">
        <?php next_posts_link("Older posts"); ?>
        <?php previous_posts_link("Newer posts"); ?>
        <ul class="link-icons">
            <li class="rss">
                <a href="/feed/">RSS</a>
            </li>
        </ul>
    </div>
  </div>
  
</div>

	
<?php
endif;

get_footer(); ?>
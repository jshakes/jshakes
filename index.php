<?php 
/*
The posts loop. Fetches 'loop-posts.php' to output the posts themselves.
*/

get_header(); 

if ( have_posts() ): 
?>
<div class="wrapper clearfix" id="body-wrapper">
       
  <div class="container clearfix">
  
    <section class="s1" id="post-loop">
    
      <?php get_template_part('loop', 'posts'); ?>
      
    </section>
    
  </div>
  
</div>
	
<?php
endif;

get_footer(); ?>
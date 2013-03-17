<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
</div><!-- /#header-wrapper -->
<div class="wrapper content-wrapper">
    
    <div class="container clearfix">
    
        <?php get_template_part("loop", "work"); ?>
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
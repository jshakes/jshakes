<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content-wrapper">
    
    <div class="container clearfix">
    
        <?php the_content(); ?>
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>

<div class="wrapper content" id="body-wrapper">
    
    <div class="container clearfix">
    
        <section class="s2">
            <div class="panel">
        
                <?php get_template_part("content", "recent-work"); ?>
        
            </div>
        </section>
        <section class="s2">
            <div class="panel">
        
                <?php get_template_part("content", "recent-posts"); ?>
                
            </div>
        </section>
    </div>
</div>

<?php
endif;
get_footer();
?>
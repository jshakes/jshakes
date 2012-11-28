<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>

<div class="wrapper content" id="body-wrapper">
    
    <div class="container clearfix">
        
        <div class="wrapper">
            <section class="s2">
            
                
               
            </section>
            <section class="s2">
            
                <?php the_content(); ?>
                
            </section>
        </div>
    </div>
</div>

<?php
endif;
get_footer();
?>
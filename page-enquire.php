<?php
get_header(); ?>

</div><!-- /#header-wrapper -->
<?php
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content" id="body-wrapper">
    
    <div class="container clearfix">
        
        <div class="wrapper">
            <section class="s2">
                <div class="panel">
                    
                </div>
            </section>
            <section class="s2">
                <div class="panel" id="content">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
endif;
get_footer();
?>
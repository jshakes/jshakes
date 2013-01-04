<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
</div><!-- /#header-wrapper -->
<div class="wrapper content" id="body-wrapper">
    
    <div id="single-post-content" class="container clearfix">
                    
        <article class="post-content">
            
            <?php if(has_post_thumbnail()) the_post_thumbnail("post-thumbnail-large", array('title' => '')); ?>
            
            <h1><?php the_title(); ?></h1>
            <span class="meta"><?php echo js_date(); ?></span>
            
            <?php the_content(); ?>

            <?php // get_template_part("content", "postscript"); ?>
            
            <a class="button back" href="/blog/">Back to Blog</a>
        </article>    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content" id="body-wrapper">
    
    <div id="single-post-content" class="container clearfix">
            
        <?php if(has_post_thumbnail()) the_post_thumbnail("post-thumbnail-large", array('title' => '')); ?>
                    
        <article class="post-content">
            
            <h1><?php the_title(); ?></h1>
            <span class="meta"><?php echo js_date(); ?></span>
            
            <?php the_content(); ?>
            
        </article>
        
        <p><a href="/posts/">&larr; Back to Posts</a></p>
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
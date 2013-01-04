<?php
get_header(); 
if ( have_posts() ) : the_post(); 
    
    $work_date = get_post_meta($post->ID, "date", true);
    $work_url = get_post_meta($post->ID, "url", true);
?>
    <div class="slides container">
        <?php
        $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',  
            'exclude' => get_post_thumbnail_id()
        );
        
        $slides = get_children($args);
        
        if(!empty($slides))
        foreach($slides as $slide):
            
            $imgdata = wp_get_attachment_image_src($slide->ID, "work-full");
        ?>
            <div class="slide">
                <img src="<?php echo $imgdata[0]; ?>" alt="<?php echo $slide->post_title; ?>" />
            </div>
        <?php endforeach; ?>
    </div>
</div><!-- /#header-wrapper -->
<div class="wrapper content" id="body-wrapper">
    
    <div id="single-work-content" class="container clearfix">
                            
        <article class="post-content">
            
            <h1><?php the_title(); ?></h1>            
            <?php if(!empty($work_date)): ?><span class="meta"><?php echo $work_date; ?></span><?php endif; ?>
            
            <?php the_content(); ?>
            
            <?php if(!empty($work_url)): ?>
            <a class="button forward" href="<?php echo $work_url; ?>" target="_blank">Launch work</a><br>
            <?php endif; ?>
        
            <a class="button back" href="/work/">Back to Work</a>
        </article>

        
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
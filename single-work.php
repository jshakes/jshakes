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
            'exclude' => get_post_thumbnail_id(),
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        
        $slides = get_children($args);
        
        if(!empty($slides))
        foreach($slides as $slide):
            
            //if it has 'imac' in the filename, use this as a class. Otherwise use 'bordered'
            $class = (strpos($slide->post_name, "_imac") !== false) ? "imac" : "bordered";
            $imgdata = wp_get_attachment_image_src($slide->ID, "work-full");
        ?>
            <div class="slide <?php echo $class; ?>">
                <img src="<?php echo $imgdata[0]; ?>" alt="<?php echo $slide->post_title; ?>" />
            </div>
        <?php endforeach; ?>
    </div>
</div><!-- /#header-wrapper -->
<div class="wrapper content-wrapper">
    
    <div id="single-work-content" class="container clearfix">
                            
        <article class="post-content">
            
            <h1><?php the_title(); ?></h1>            
            <?php if(!empty($work_date)): ?><span class="meta"><?php echo $work_date; ?></span><?php endif; ?>
            
            <?php the_content(); ?>
            
            <?php if(!empty($work_url)): ?>
            <a class="button forward" id="launch-work" href="<?php echo $work_url; ?>" target="_blank">Launch site</a><br>
            <?php endif; ?>
        
            <a class="button back" href="/work/">Back to Work</a>
        </article>

        
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
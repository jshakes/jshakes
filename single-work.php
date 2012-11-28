<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content" id="body-wrapper">
    
    <div id="single-work-content" class="container clearfix">

        <div class="slides">
            <div class="slides_container">
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
        </div>
                            
        <article class="post-content">
            
            <h1><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            
        </article>
        
        <p><a href="/work/">&larr; Back to Work</a></p>
    
    </div>
    
</div>
<?php
endif;
get_footer();
?>
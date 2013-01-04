<h3>Recent Work</h3>

<?php
$args = array(
    "post_type" => "work",
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC"
);

$recent_work = new WP_Query($args);

if($recent_work->have_posts()):

    while($recent_work->have_posts()): $recent_work->the_post();
    
        $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',  
            'exclude' => get_post_thumbnail_id(),
            'numberposts' => 1
        );

        $images = get_children($args);
        $image = array_pop($images);
        $imgdata = wp_get_attachment_image_src($image->ID, "small");

        ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $imgdata[0]; ?>" alt="<?php echo $image->post_title; ?>" />
            <h4><?php the_title(); ?></h4>
        </a>
        <p><?php the_excerpt(); ?>
        <a class="button forward" href="<?php the_permalink(); ?>">View work</a>

        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
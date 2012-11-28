<?php
$args = array(
    'post_type' => 'work',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'posts_per_page' => -1
);

$work = new WP_Query($args);

while($work->have_posts()): $work->the_post();
    
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "work-thumbnail" );
?>
    <div class="work">
        <a href="<?php the_permalink(); ?>">
            <div class="overlay">
                <div class="overlay-content">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <img class="work-thumbnail" src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
    </div>    
<?php 
endwhile;
wp_reset_postdata();
?>
<?php
$args = array(
    'post_type' => 'work',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'posts_per_page' => -1
);

query_posts($args);

$i = 1;
while(have_posts()): the_post();
    
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "work-thumbnail" );
    $date = get_post_meta($post->ID, "date", true);
?>
    <div class="work"<?php if($i % 3 == 0): ?> style="margin-right:0"<?php endif; ?>>
        <a href="<?php the_permalink(); ?>">
            <div class="overlay">
                <div class="overlay-content">
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php if(!empty($date)): ?><h4><?php echo $date; ?></h4><?php endif; ?>
                    </article>
                </div>
            </div>
            <img class="work-thumbnail" src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
    </div>    
<?php 
$i++;
endwhile;
wp_reset_postdata();
?>
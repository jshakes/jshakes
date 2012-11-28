<h3>Recent Posts</h3>
<ul>
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC'
);

$recentposts = new WP_Query($args);

while($recentposts->have_posts()): $recentposts->the_post();
?>
    <li>
        <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail("tiny", array('title' => '')); ?></a>
        <?php endif; ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <span class="meta"><?php echo js_date(); ?></span>
    </li>
<?php
endwhile;
?>
</ul>
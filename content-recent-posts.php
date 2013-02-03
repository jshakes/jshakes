<h3>Recent Posts</h3>
<ul class="clearfix recent-post-loop">
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
);

$recentposts = new WP_Query($args);

$i = 1;
while($recentposts->have_posts()): $recentposts->the_post();
?>
    <li<?php if($i % 3 == 0): ?> style="margin-right:0"<?php endif; ?>>
        <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail("tiny", array('title' => '')); ?></a>
        <?php endif; ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <span class="meta"><?php echo js_date(); ?></span>
    </li>
<?php
$i++;
endwhile;
?>
</ul>
<a class="button forward" href="/blog">See all posts</a>
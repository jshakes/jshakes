<?php while ( have_posts() ): the_post(); ?>
<article class="post" id="post-<?php the_id(); ?>">

    <?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail("post-thumbnail", array('title' => '')); ?></a>
    <?php endif; ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <span class="meta"><?php echo js_date(); ?></span>

    <?php the_excerpt(); ?>

</article>
<?php endwhile; ?>
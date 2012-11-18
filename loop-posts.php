<?php while ( have_posts() ): the_post(); ?>
<article class="post" id="post-<?php the_id(); ?>">

    <?php if(has_post_thumbnail()) the_post_thumbnail(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <span class="meta"><?php the_time('j F, Y \a\t H:i') ?></span>

    <?php the_excerpt(); ?>

</article>
<?php endwhile; ?>
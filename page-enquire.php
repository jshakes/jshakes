<?php
get_header(); ?>

</div><!-- /#header-wrapper -->
<?php
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content" id="body-wrapper">
    
    <div class="container clearfix">
                    
        <article class="post-content">
            
            <?php the_content(); ?>

            <ul class="link-icons">
                <li class="email">
                    <a href="mailto:j@jshakespeare.com">Email</a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/jeshake" target="_blank">Twitter</a>
                </li>
            </ul>

        </article>
    </div>
</div>

<?php
endif;
get_footer();
?>
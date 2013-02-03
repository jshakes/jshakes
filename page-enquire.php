<?php
get_header(); ?>

</div><!-- /#header-wrapper -->
<?php
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper content-wrapper">
    
    <div class="container clearfix">
                    
        <article class="post-content">
            
            <?php the_content(); ?>

            <ul class="link-icons">
                <li class="linkedin">
                    <a href="http://www.linkedin.com/pub/james-shakespeare/35/844/407" target="_blank">LinkedIn</a>
                </li>
                <li class="email">
                    <a href="mailto:j@jshakespeare.com" title="Let's do this">Email</a>
                </li>
            </ul>

        </article>
    </div>
</div>

<?php
endif;
get_footer();
?>
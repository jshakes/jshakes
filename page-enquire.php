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

            <h4>Contact me on:</h4>

            <ul class="link-icons">
                <li class="email">
                    <a href="mailto:j@jshakespeare.com" title="j@jshakespeare.com">Email</a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/jeshake" title="@jeshake" target="_blank">Twitter</a>
                </li>
                <li class="linkedin">
                    <a href="http://www.linkedin.com/pub/james-shakespeare/35/844/407" title="LinkedIn" target="_blank">LinkedIn</a>
                </li>
            </ul>

        </article>
    </div>
</div>

<?php
endif;
get_footer();
?>
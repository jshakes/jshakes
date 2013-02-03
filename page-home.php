<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
    <div class="container" id="intro">
        <article>
            <p>I'm James Shakespeare. I design and build <a href="/work/" title="Work">websites</a>, I write things in <a href="/blog/" title="Blog">English</a> and <a href="https://github.com/jshakes" target="_blank" title="Github">computer-speak</a> and I'm an all-round <a href="/enquire/" title="Enquire">jolly good chap</a>.</p>
            <ul class="link-icons">
                <li class="email">
                    <a href="mailto:j@jshakespeare.com">Email</a>
                </li>
                <li class="github">
                    <a href="https://github.com/jshakes" target="_blank">Github</a>
                </li>
                <li class="linkedin">
                    <a href="http://www.linkedin.com/pub/james-shakespeare/35/844/407" target="_blank">LinkedIn</a>
                </li>
            </ul>
        </article>
    </div>
</div><!-- /#header-wrapper -->

<div class="wrapper content-wrapper">
    
    <div class="container" id="recent-work">
            
        <?php get_template_part("content", "recent-work"); ?>
            
    </div>
</div>

<div class="wrapper" id="twitter">

    <div class="container">

        <article>
            <?php get_template_part("content", "latest-tweet"); ?>

            <ul class="link-icons">
                <li class="twitter">
                    <a href="https://twitter.com/jeshake" target="_blank">Twitter</a>
                </li>
            </ul>
        </article>
    </div>
</div>

<div class="wrapper content-wrapper">
    
    <div class="container clearfix" id="recent-posts">
            
        <?php get_template_part("content", "recent-posts"); ?>
            
    </div>
</div>


<?php
endif;
get_footer();
?>
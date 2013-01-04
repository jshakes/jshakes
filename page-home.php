<?php
get_header(); 
if ( have_posts() ) : the_post(); 
?>
<div class="intro">
        <p>I'm James Shakespeare. I design and build <a href="/work/">websites</a>, I write things in <a href="/posts/">English</a> and <a href="https://github.com/jshakes" target="_blank">computer-speak</a> and I'm an all-round jolly good <a href="/enquire/">chap</a>.</p>
        <ul class="link-icons">
            <li class="rss">
                <a href="/feed/">RSS</a>
            </li>
            <li class="github">
                <a href="https://github.com/jshakes" target="_blank">Github</a>
            </li>
            <li class="linkedin">
                <a href="http://www.linkedin.com/pub/james-shakespeare/35/844/407" target="_blank">LinkedIn</a>
            </li>
        </ul>
    </div>
</div><!-- /#header-wrapper -->

<div class="wrapper content" id="body-wrapper">
    
    <div class="container clearfix">
        
        <div class="wrapper">
            <section class="s2">
                <div class="panel" id="recent-work">
            
                    <?php get_template_part("content", "recent-work"); ?>
            
                </div>
            </section>
            <section class="s2">
                <div class="panel" id="recent-posts">
            
                    <?php get_template_part("content", "recent-posts"); ?>
                    
                </div>
            </section>
        </div>
    </div>
</div>

<?php
endif;
get_footer();
?>
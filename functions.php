<?php

require_once("include/post-types.php");
require_once("include/mytwit.inc.php");

/* ---- Post Thumbnails ---- */

add_theme_support('post-thumbnails', array('post','case_studies'));
set_post_thumbnail_size( 160, 160, true );
add_image_size("case-study", 450, 270, true);


/* ---- Sidebar ---- */

/*
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
	'name' => 'sidebar1',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
}
*/

/* ---- Other ---- */

//add excerpt field into pages
add_post_type_support( 'page', 'excerpt' );

//add custom menu support 

function register_custom_menu() {
  register_nav_menu('custom_menu', __('Custom Menu'));
}

//replacement text for 'read more' after excerpts
function new_excerpt_more($more) {
  global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}

/* Scripts */

function enqueue_scripts(){
    
    wp_enqueue_script(
        "plugins",
        get_template_directory_uri()."/js/plugins.js",
        null,
        null,
        true
    ); 
    wp_enqueue_script(
        "scripts",
        get_template_directory_uri()."/js/scripts.js",
        null,
        null,
        true
    );
}


function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background:url('.get_template_directory_uri().'/img/traffic-logo.png) no-repeat 50% 0 !important; width: 312px !important; height: 60px !important; }
    </style>';
}

function get_tweets($tweets = 3){
    
    //Instantiate a new 'mytwit' object so we can pull in our tweets
    $twitter = new myTwit();
    $twitter->user = 'trafficdigital';
    $twitter->postLimit = $tweets;
    $twitter->myTwitHeader = false;
    $twitter->initMyTwit();
    return $twitter->myTwitData;
}

function cpt_page_css_class( $css_class, $page ) {
    
    global $post;
    
    if (
        (is_single() && $page->ID == get_page_by_title("Posts")->ID) ||
        (get_post_type($post) == "work" && $page->ID == get_page_by_title("Portfolio")->ID)
    ) {
        $css_class[] = 'current_page_item';
    }
    return $css_class;
}
add_filter( 'page_css_class', 'cpt_page_css_class', 10, 2 );

/* Actions */

add_action('login_head', 'custom_login_logo');
add_action('init', 'enqueue_scripts');
add_action('init', 'register_post_types', 0 );
add_action('init', 'register_custom_menu');


/* Filters */

add_filter('excerpt_more', 'new_excerpt_more');

?>
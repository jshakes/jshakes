<?php

/* ---- Post Thumbnails ---- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 160, 160, true );
add_image_size("post-thumbnail-large", 220, 220, true);
add_image_size("work-thumbnail", 340, 340, true);
add_image_size("work-full", 340, 340, true);
add_image_size("tiny", 50, 50, true);


function register_post_types(){

  register_post_type( 'work',
  	array(
      'labels' => array(
        'name' => __( 'Work' ),
        'singular_name' => __( 'Work' )
    	),
    	'public' => true,
    	'has_archive' => true,
    	'supports' => array('title', 'editor', 'thumbnail'),
    	'rewrite' => false
  	)
  );
  
  register_post_type( 'quote',
  	array(
      'labels' => array(
        'name' => __( 'Quotes' ),
        'singular_name' => __( 'Quote' )
    	),
    	'public' => true,
    	'has_archive' => false,
    	'supports' => array('title', 'editor')
  	)
  );

}


add_action( 'init', 'register_post_types', 0 );


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

function js_date(){
    
    global $post;
    $datestr = get_the_time('j F');
    if(get_the_date('Y') != date('Y')) $datestr .= ", ".get_the_date('Y');
    return $datestr;
    
}

function cpt_page_css_class( $css_class, $page ) {
    
    global $post;
    
    if (
        (get_post_type($post) == "post" && $page->ID == get_page_by_title("Posts")->ID) ||
        (get_post_type($post) == "work" && $page->ID == get_page_by_title("Work")->ID)
    ) {
        $css_class[] = 'current_page_item';
    }
    return $css_class;
}
add_filter( 'page_css_class', 'cpt_page_css_class', 10, 2 );

//remove <p> tags from around images

function filter_ptags_on_images($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    // now pass that through and do the same for iframes...
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');

/* Actions */

add_action('login_head', 'custom_login_logo');
add_action('init', 'enqueue_scripts');
add_action('init', 'register_custom_menu');


/* Filters */

add_filter('excerpt_more', 'new_excerpt_more');

?>
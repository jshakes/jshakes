<?php

function register_post_types(){
       
    register_post_type( 'work',
    	array(
    		'labels' => array(
    			'name' => __( 'Work' ),
    			'singular_name' => __( 'Work' )
    		),
        	'public' => true,
        	'hierarchical' => true,
        	'supports' => array('title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'comments')
    	)
    );
}



?>
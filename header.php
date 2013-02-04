<!doctype html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> style="margin-top: 0 !important">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> style="margin-top: 0 !important">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> style="margin-top: 0 !important">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> style="margin-top: 0 !important">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
		
	<meta name="author" content="James Shakespeare">
    <meta name="description" content="I design and build websites, I write things in English and computer-speak and I'm an all-round good egg.">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />			
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('title'); ?> RSS Feed" href="/feed/" />

	<?php wp_head(); ?>
</head>
<body id="<?php echo $post->post_name; ?>" <?php echo body_class(); ?>>

<div class="wrapper clearfix" id="header-wrapper">
        
    <header class="clearfix">
        <a id="header-logo" title="<?php bloginfo('title'); ?>" href="/"><img src="<?php bloginfo('template_url'); ?>/img/js-logo.png" alt="<?php bloginfo('title'); ?>" /></a>
        <nav id="header-nav">
            <!-- Main page nav -->
            <ul>
            <?php
            $nav_args = array(
                'sort_column' => 'menu_order, post_title',
                'title_li' => false,
                'depth' => 1,
                'exclude' => get_option('page_on_front')
            );
            wp_list_pages($nav_args);
            ?>
            </ul>
        </nav>
    </header>
    

<!doctype html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo('charset'); ?>">
  	<!--[if IE]>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<![endif]-->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php wp_title( '|', true, 'right' ); ?></title>
  	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicon.png">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php
      $hero_thumb_2x_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-hero');
      $hero_thumb_2x = $hero_thumb_2x_array[0];
      $hero_thumb_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'grid-thumb');
      $hero_thumb = $hero_thumb_array[0];
    ?>
    <style>
      .hero--image { background-image: url(<?php echo $hero_thumb ?>); }
      @media (min-width: 800px) {
        .hero--image { background-image: url(<?php echo $hero_thumb_2x ?>); }
      }
    </style>
    <script src="https://use.typekit.net/ksi3xzc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php wp_head(); ?>
  	<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part( 'partials/svg' ); ?>
  	<div class="site-wrapper">

  		<header class="site-header">
  			<div class="logo">
          <a href="/" class="logo--link"><span class="logo--link__mortgage">Mortgage</span><span class="logo--link__talk">Talk</span></a>
        </div>
    		<nav class="main-nav">
          <a href="" class="btn-mobile">
            <span class="btn-mobile--close-icon">
              <span class="btn-mobile--bar"></span>
              <span class="btn-mobile--bar"></span>
              <span class="btn-mobile--bar"></span>
            </span>
          </a>
          <a href="" class="main-nav--close-menu">
            <svg class="icon-close">
              <use xlink:href="#icon-close"></use>
            </svg>
          </a>
    			<?php wp_nav_menu( array('menu'=>'7') ); ?>
    		</nav>
        <div class="header-search">
          <a href="" class="header-search--trigger">
            <svg class="icon-search icon">
              <use xlink:href="#icon-search"></use>
            </svg>
            <svg class="icon-close icon is-hidden">
              <use xlink:href="#icon-close"></use>
            </svg>
          </a>
          <form role="search" method="get" class="search-form is-hidden" action="<?php echo home_url('/'); ?>">
            <input type="text" class="search--input" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search" />
            <input type="submit" class="search--submit btn__blue" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
          </form>
        </div>
  		</header>


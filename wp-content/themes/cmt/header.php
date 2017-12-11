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
  	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicon.png">
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
    <script>
      (function(d) {
        var config = {
          kitId: 'ksi3xzc',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    <?php wp_head(); ?>
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

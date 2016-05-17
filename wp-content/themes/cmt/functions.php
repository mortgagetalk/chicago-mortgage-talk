<?php

	// Theme Setup (based on twentythirteen)
	function cmt_setup() {
		load_theme_textdomain( 'cmt', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'cmt' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'cmt_setup' );

	// Scripts & Styles (based on twentythirteen)
	function cmt_scripts_styles() {
		global $wp_styles;
	}
	add_action( 'wp_enqueue_scripts', 'cmt_scripts_styles' );

	// WP Title (based on twentythirteen)
	function cmt_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

    // Add the site name.
		$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

    // Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'cmt' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'cmt_wp_title', 10, 2 );

  // Register Sidebars
  function footer_sidebar() {

    $args = array(
      'name' => __( 'Footer Blocks', 'text_domain' ),
      'class'         => '',
      'before_widget' => '<div class="col col-1-4__lg col-1-2__md %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="footer--title">',
      'after_title'   => '</h3>'
    );
    register_sidebar( $args );

  }
  add_action( 'widgets_init', 'footer_sidebar' );


  add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
      } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
      } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
      }
    return $title;
  });

	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	function removeHeadJunk() {
	  remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
	}
	add_action('init', 'removeHeadJunk');

	// Clean Up Menu Classes
	function nav_class_filter( $var ) {
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'current-menu-parent', 'current-menu-ancestor')) : '';
  }
  add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

  // Remove Contact Plugin CSS/JS
  //add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'cmt' ) );

	// Navigation
	function post_navigation() {
	  $prev_page = get_previous_posts_link('<svg class="post-list-nav--icon icon-prev"><use xlink:href="#icon-prev"></use></svg> Previous Articles');
	  $next_page = get_next_posts_link('More Articles <svg class="post-list-nav--icon icon-next"><use xlink:href="#icon-next"></use></svg>');
	  if($prev_page || $next_page) {
  		echo '<div class="post-list-nav">';
  	  if ($prev_page) {
    	  echo  '<div class="post-list-nav--item">' . $prev_page . '</div>';
  	  } else {
        echo '<div class="post-list-nav--item"><svg class="post-list-nav--icon icon-prev"><use xlink:href="#icon-prev"></use></svg> Previous Articles</div>';
  	  }
  	  if ($next_page) {
        echo  '<div class="post-list-nav--item">' . $next_page . '</div>';
  	  } else {
        echo '<div class="post-list-nav--item">More Articles <svg class="post-list-nav--icon icon-next"><use xlink:href="#icon-next"></use></svg></div>';
  	  }
  		echo '</div>';
		}
	}

  // Single Navigation
  function single_post_navigation() {
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    echo '<div class="post-nav">';
    if ($prev_post) {
      echo '<div class="post-nav--item"><a href="'. get_permalink($prev_post->ID) .'"><svg class="post-nav--icon icon-prev"><use xlink:href="#icon-prev"></use></svg> Previous Article</a></div>';
    } else {
      echo '<div class="post-nav--item"><svg class="post-nav--icon icon-prev"><use xlink:href="#icon-prev"></use></svg> Previous Article</div>';
    }
    if ($next_post) {
      echo '<div class="post-nav--item"><a href="'. get_permalink($next_post->ID) .'">Next Article <svg class="post-nav--icon icon-next"><use xlink:href="#icon-next"></use></svg></a></div>';
    } else {
      echo '<div class="post-nav--item">Next Article <svg class="post-nav--icon icon-next"><use xlink:href="#icon-next"></use></svg></a></div>';
    }
    echo '</div>';
  }

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}

  // Responsive Images
  function cmt_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
    if ( 'post-thumbnail' === $size ) {
      $attr['sizes'] = '(min-width: 800px) 50vw, 100vw';
    }
    return $attr;
  }
  add_filter( 'wp_get_attachment_image_attributes', 'cmt_post_thumbnail_sizes_attr', 10 , 3 );


	// Attachment Figures
	function html5_insert_image($html, $id, $caption, $title, $align, $url, $size) {
	  $src  = wp_get_attachment_image_src( $id, $size, false );
    $html5 = "<figure id='post-$id media-$id' class='align-$align'>";
    $html5 .= "<img src='$src[0]' alt='$title' />";
    if ($caption) {
      $html5 .= "<figcaption>$caption</figcaption>";
    }
    $html5 .= "</figure>";
    return $html5;
  }
  add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );

	// Image Sizes
  add_image_size( 'grid-thumb', 760, 554, true );
  add_image_size( 'post-thumb', 552, 386, true );
	add_image_size( 'post-hero', 1600, 380, true );
  add_image_size( 'author-image', 552, 552, true );

  // Post Embed Image Size(s)
  add_image_size( 'blog-image', 792 );
  add_filter( 'image_size_names_choose', 'my_custom_sizes' );
  function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
      'blog-image' => __('Blog Image'),
    ));
  }

?>

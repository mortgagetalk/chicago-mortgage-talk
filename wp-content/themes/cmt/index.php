<?php get_header(); ?>

<section class="hero home-hero">
  <div class="hero-wrapper">
    <h1 class="home-hero--title hero--title">Chicago Mortgage Talk</h1>
    <h2 class="hero--subtitle">Exploring Chicagoland’s home loans market</h2>
  </div>
</section>

<main class="main negative-top-margin" role="main">
  <div class="main-wrapper">

    <section class="mortgage-101">
      <div class="section-title-bar">
        <h2 class="section-title">Mortgage 101</h2>
      </div>
      <div class="post-grid grid__md">
      <?php $my_query = new WP_Query( 'category_name=mortgage-101&posts_per_page=3' );
      while ( $my_query->have_posts() ) : $my_query->the_post();
      $do_not_duplicate[] = $post->ID; ?>
        <div class="col col-1-2__md col-1-3__lg">
          <article class="post-grid--item">
            <?php the_post_thumbnail('grid-thumb'); ?>
            <a href="<?php the_permalink(); ?>" class="post-grid--link">
              <div class="post-grid--info">
                <h3 class="post-grid--title"><?php the_title(); ?></h3>
                <p class="post-grid--meta">By <?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>
              </div>
            </a>
          </article>
        </div>
      <?php endwhile; ?>
      </div>
    </section>

    <div class="section-title-bar">
      <h2 class="section-title">Latest Posts</h2>
    </div>

    <div class="content-wrapper">

      <section class="page-content">
        <div class="post-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( in_array( $post->ID, $do_not_duplicate ) ) continue; ?>
          <article class="post-list--item">
            <a href="<?php the_permalink(); ?>" class="post-list--thumb">
              <?php the_post_thumbnail('post-thumb'); ?>
            </a>
              <div class="post-list--info">
                <p class="post-list--category"><?php the_category( ' ' ); ?></p>
                <h3 class="post-list--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="post-list--meta">By <?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>
              </div>
            </a>
          </article>
        <?php endwhile; endif; ?>
        </div>
        <div class="load-more-posts">
          <button class="btn--load-more">More Articles</button>
        </div>
      </section>

      <?php get_sidebar(); ?>

    </div>

  </div>
</main>

<?php post_navigation(); ?>

<?php get_footer(); ?>
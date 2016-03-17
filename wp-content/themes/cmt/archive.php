<?php get_header(); ?>

  <?php if (have_posts()) : ?>

		<?php $post = $posts[0]; ?>

    <section class="hero">
      <div class="hero-wrapper">
    	<?php
        the_archive_title( '<h1 class="hero--title">', '</h1>' );
        the_archive_description( '<div class="hero--description">', '</div>' );
      ?>
      </div>
    </section>

    <main class="main" role="main">
      <div class="main-wrapper">

        <div class="content-wrapper">

          <section class="page-content">
            <?php get_template_part('partials/post-list'); ?>
          </section>

          <?php get_sidebar(); ?>

        </div>

    	</div>
  	</main>

  <?php else : ?>

    <section class="hero">
      <div class="hero-wrapper">
        <h1 class="hero--title">Whoops!</h1>
      </div>
    </section>

    <main class="main" role="main">
      <div class="main-wrapper">

        <div class="content-wrapper">

          <section class="page-content">
            <div class="body-content">
              <h3><?php _e('No posts, yet.','html5reset'); ?></h3>
              <p><a href="/" class="btn">Back home you go!</a></p>
            </div>
          </section>

          <?php get_sidebar(); ?>

        </div>

      </div>
    </main>

  <?php endif; ?>

<?php get_footer(); ?>

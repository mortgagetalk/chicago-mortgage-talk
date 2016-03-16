<?php get_header(); ?>

<section class="hero">
  <div class="hero-wrapper">
    <h2 class="hero-title"><?php the_title(); ?></h2>
  </div>
</section>

<section class="main">
  <div class="main-wrapper">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      <p class="post--meta">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?> | <?php the_date('M j, Y'); ?></a>
</p>
			<div class="post--content">
        <div class="post--share">
          <a href="http://www.facebook.com/sharer/sharer.php?u=http://jensenecology.com/<?php echo get_permalink(); ?>" target="_blank">
            <svg class="post--share-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-facebook"></use>
            </svg>
          </a>
          <a href="http://twitter.com/share?text=Jensen Ecology - <?php the_title(); ?>">
            <svg class="post--share-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-twitter"></use>
            </svg>
          </a>
          <a href="mailto:?subject=<?php the_title(); ?>&body=http://jensenecology.com/<? echo get_permalink(); ?>">
            <svg class="post--share-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-email"></use>
            </svg>
          </a>
        </div>
  			<div class="body-content">
  				<?php the_content(); ?>
  			</div>
			</div>

		</article>
	<?php endwhile; endif; ?>

  </div>
</section>

<?php single_post_navigation($input = 'Post'); ?>

<?php get_footer(); ?>
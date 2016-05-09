<div class="post-list">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

<?php post_navigation(); ?>
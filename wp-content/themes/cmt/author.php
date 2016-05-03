<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; ?>

  <main class="main" role="main">
    <div class="main-wrapper">

    <div class="author-info">
    <?php
      $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
      ?>

      <dl>
          <dt>Website</dt>
          <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
          <dt>Profile</dt>
          <!-- <dd><?php echo $curauth->user_description; ?></dd> -->
      </dl>

      <p><?php the_field('author_position', 'user_' . $curauth->id); ?></p>
      <p><?php the_field('author_bio', 'user_' . $curauth->id); ?></p>

      <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
    </div>


      <div class="content-wrapper">

        <section class="page-content">
          <div class="post-list">
      			<?php while (have_posts()) : the_post(); ?>
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
            <?php endwhile; ?>
            </div>

      			<?php post_navigation(); ?>

        	</div>
      	</section>

        <?php else : ?>


        <?php endif; ?>

      </div>

    </div>
  </main>

<?php get_footer(); ?>

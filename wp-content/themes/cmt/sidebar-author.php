<aside class="sidebar-right">

  <div class="widget widget-newsletter">
    <h4 class="widget--title">Stay Up to Date</h4>
    <div class="widget--content">
      <p>Sign up to stay up to date on the latest Chicago mortgage news.</p>
    </div>
    <form class="widget-newsletter--form newsletter-form">
      <input type="email" placeholder="Email" class="newsletter-form--input">
      <input type="submit" value="Sign Up" class="btn btn__dk-red newsletter-form--btn">
    </form>
  </div>

  <div class="widget widget-mortgage-101">
    <h4 class="widget--title">Mortgage 101</h4>
    <div class="widget--content">
      <p>Learn your mortgage basics before you apply.</p>
    </div>
    <ul>
    <?php
      global $post;
      $myposts = get_posts('numberposts=5&category=1');
      foreach($myposts as $post) :
    ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
    </ul>
  </div>

</aside>


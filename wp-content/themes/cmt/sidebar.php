<aside class="sidebar-right">

  <div class="widget widget-author">
    <div class="widget-author--header">
      <div class="widget-author--headshot">
        <img src="<?php bloginfo('template_directory'); ?>/dist/images/author-jeff-dulla.jpg" alt="Jeff Dulla">
      </div>
      <h4 class="widget-author--name">Jeff Dulla</h4>
      <p class="widget-author--job-title">VP of United Home Loans</p>
    </div>
    <div class="widget--content widget-author--content">
      <p>Jeff Dulla is a Senior Mortgage Banker with United Home Loans. In his five and half years there, Jeff has accumulated a client portfolio of approximately 500 closed loans totaling 131,000,000 in volume.</p>
      <p class="widget-author--contact-link">
        <a href="mailto:jdulla@uhloans.com">
          <svg class="icon-email widget-author--email-icon">
            <use xlink:href="#icon-email"></use>
          </svg>
          <span class="widget-author--contact-name">Contact Jeff</span>
        </a>
      </p>
    </div>
  </div>

  <div class="widget widget-newsletter">
    <h4 class="widget--title">Stay Up to Date</h4>
    <div class="widget--content">
      <p>Sign up to stay up to date on the latest Chicago mortgage news.</p>
    </div>
    <form data-id="embedded_signup:form" class="ctct-custom-form widget-newsletter--form newsletter-form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
      <div id="success_message" class="newsletter-form--success" style="display:none;">Thanks for signing up!</div>
      <input data-id="ca:input" type="hidden" name="ca" value="10c6df07-d551-4a9e-aaf7-559427cf588a">
      <input data-id="list:input" type="hidden" name="list" value="1630807137">
      <input data-id="source:input" type="hidden" name="source" value="EFD">
      <input data-id="required:input" type="hidden" name="required" value="list,email">
      <input data-id="url:input" type="hidden" name="url" value="">
      <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80" placeholder="Email" class="newsletter-form--input">
      <button type="submit" data-enabled="enabled" class="btn btn__dk-red newsletter-form--btn">Sign Up</button>
    </form>
    <script type='text/javascript'>
      var localizedErrMap = {};
      localizedErrMap['required'] =    'This field is required.';
      localizedErrMap['ca'] =      'An unexpected error occurred while attempting to send email.';
      localizedErrMap['email'] =       'Please enter your email address in name@email.com format.';
      localizedErrMap['birthday'] =    'Please enter birthday in MM/DD format.';
      localizedErrMap['anniversary'] =   'Please enter anniversary in MM/DD/YYYY format.';
      localizedErrMap['custom_date'] =   'Please enter this date in MM/DD/YYYY format.';
      localizedErrMap['list'] =      'Please select at least one email list.';
      localizedErrMap['generic'] =     'This field is invalid.';
      localizedErrMap['shared'] =    'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
      localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
      localizedErrMap['state_province'] = 'Select a state/province';
      localizedErrMap['selectcountry'] =   'Select a country';
      var postURL = 'https://visitor2.constantcontact.com/api/signup';
    </script>
    <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
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

  <?php // the_widget( 'WP_Widget_Recent_Posts', 'title=Recent Articles', 'before_title=<h3 class="widget--title">&after_title=</h3>' ); ?>

</aside>

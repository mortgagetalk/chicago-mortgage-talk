      <section class="newsletter-section">
        <div class="wrapper">
          <h3 class="newsletter-section--title">Stay up to date with Chicago Mortgage Talk</h3>
          <p class="newsletter-section--subtitle">Sign up for an occasional email about Chicago mortgage news.</p>
          <form data-id="embedded_signup:form" class="ctct-custom-form newsletter-section--form newsletter-form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
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



          <!-- <form class="newsletter-section--form newsletter-form">
            <input type="email" placeholder="Email" class="newsletter-form--input">
            <input type="submit" value="Sign Up" class="btn btn__dk-red newsletter-form--btn">
          </form> -->
        </div>
      </section>

      <footer class="site-footer">
        <div class="wrapper">

          <div class="footer-grid grid">

            <div class="col col-1-4__lg col-1-2__md footer-address">
              <h3 class="footer-logo"><a href="/"><span class="logo--link__mortgage">Mortgage</span><span class="logo--link__talk">Talk</span></a></h3>
              <p>&copy;<?php echo date('Y'); ?>. All Rights Reserved.</p>
              <p><a href="http://bradsawicki.com" target="_blank">Site by: Brad Sawicki</a></p>
            </div>

            <div class="col col-1-4__lg col-1-2__md footer-social">
              <h3 class="footer--title">Follow Us</h3>
              <ul class="footer-social--list">
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-circle-facebook">
                      <use xlink:href="#icon-circle-facebook"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-circle-twitter">
                      <use xlink:href="#icon-circle-twitter"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-circle-linkedin">
                      <use xlink:href="#icon-circle-linkedin"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-circle-google-plus">
                      <use xlink:href="#icon-circle-google-plus"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col col-1-4__lg col-1-2__md footer-contact">
              <h3 class="footer--title">Contact Us</h3>
              <p>United Home Loans<br>
              Chicago, IL<br>
              hello@uhloans.com<br>
              866-607-1780 | <a href="mailto:">Email Us</a></p>
            </div>

            <div class="col col-1-4__lg col-1-2__md footer-quick-links">
              <h3 class="footer--title">Quicklinks</h3>
              <ul>
                <li><a href="">Current Mortgage Rates</a></li>
                <li><a href="">FHA Refinance</a></li>
                <li><a href="">USDA Home Loans</a></li>
                <li><a href="">HARP</a></li>
              </ul>
            </div>
          </div>

        </div>
      </footer>

    </div><!-- .container -->

  	<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/dist/js/main.js"></script>
  </body>
</html>
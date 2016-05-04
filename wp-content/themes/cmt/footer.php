      <section class="newsletter-section">
        <div class="wrapper">
          <h3 class="newsletter-section--title">Stay up to date with Chicago Mortgage Talk</h3>
          <p class="newsletter-section--subtitle">Sign up for an occasional email about Chicago mortgage news.</p>
          <form class="newsletter-section--form newsletter-form">
            <input type="email" placeholder="Email" class="newsletter-form--input">
            <input type="submit" value="Sign Up" class="btn btn__dk-red newsletter-form--btn">
          </form>
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
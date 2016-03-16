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

            <div class="col-1-4 footer-address">
              <h3 class="footer-logo"><a href="/"><span class="logo--link__mortgage">Mortgage</span><span class="logo--link__talk">Talk</span></a></h3>
              <p>&copy;<?php echo date('Y'); ?>. All Rights Reserved.</p>
              <p><a href="http://bradsawicki.com" target="_blank">Site by: Brad Sawicki</a></p>
            </div>

            <div class="col-1-4 footer-social">
              <h3 class="footer--title">Follow Us</h3>
              <ul>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-facebook">
                      <use xlink:href="#icon-facebook"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-twitter">
                      <use xlink:href="#icon-twitter"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-linkedin">
                      <use xlink:href="#icon-linkedin"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer-social--item">
                  <a href="" target="_blank">
                    <svg class="footer-social--icon icon-google-plus">
                      <use xlink:href="#icon-google-plus"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-1-4 footer-contact">
              <h3 class="footer--title">Contact Us</h3>
              <p>United Home Loans<br>
              Chicago, IL<br>
              hello@uhloans.com<br>
              866-607-1780 | <a href="mailto:">Email Us</a></p>
            </div>

            <div class="col-1-4 footer-quick-links">
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
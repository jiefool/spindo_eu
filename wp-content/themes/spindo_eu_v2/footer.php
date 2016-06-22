<section class="footer">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12 footer-links col-xs-12">
          <div class="links-container">
            <?php
              // $currentUrl = rtrim(get_permalink(), '/');
              // $siteUrl = get_site_url();
              // if ($currentUrl != $siteUrl){
              //   if (preg_match('/home/', $currentUrl) != true){
              //     echo '<a href="'.$siteUrl.'/deals"><h3>Deals</h3></a>';
              //   }
              // }          
            ?>        
            <a href="<?php echo get_site_url(); ?>/deals">Deals</a>
            <a href="<?php echo get_site_url(); ?>/rules">Rules</a>
            <a href="<?php echo get_site_url(); ?>/about-us">About Us</a>
            <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 footer-copyright">
          Spindo.eu © 2007 - 2016
        </div>
      </div>
    </div>
  </div>
</section>
<?php wp_footer(); ?>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/simple_csv/dist/jquery.simple_csv.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/registration-page.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/invite-friend.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contact-form.js"></script>

</body>
</html>

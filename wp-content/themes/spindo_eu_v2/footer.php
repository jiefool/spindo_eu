<section class="footer">
  <div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
      <div class="row">
        <div class="col-md-10 col-md-offset-2 footer-links">
          <?php
            // $currentUrl = rtrim(get_permalink(), '/');
            // $siteUrl = get_site_url();
            // if ($currentUrl != $siteUrl){
            //   if (preg_match('/home/', $currentUrl) != true){
            //     echo '<a href="'.$siteUrl.'/deals"><h3>Deals</h3></a>';
            //   }
            // }          
          ?>        
          <a href="<?php echo get_site_url(); ?>/deals"><h3>Deals</h3></a>
          <a href="<?php echo get_site_url(); ?>/rules"><h3>Rules</h3></a>
          <a href="<?php echo get_site_url(); ?>/about-us"><h3>About Us</h3></a>
          <a href="<?php echo get_site_url(); ?>/contact"><h3>Contact Us</h3></a>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/simple_csv/dist/jquery.simple_csv.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/registration-page.js"></script>

</body>
</html>

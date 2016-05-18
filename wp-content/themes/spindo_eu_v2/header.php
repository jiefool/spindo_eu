<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="index, follow" />
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         bloginfo('name'); echo ' - ' ; wp_title(''); }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		   ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" type="text/css" />  
  <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/font-awesome-4.5.0/css/font-awesome.min.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">	
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/yld.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/spindo.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57626088-1', 'auto');
    ga('send', 'pageview');
  </script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php //wp_head(); ?>
 </head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1548308138767592";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="col-md-3 col-xs-3">
          <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/esileht_logo.png" class="header-logo"/></a>
        </div>
        <div class="col-md-6 col-xs-6 header-text">
          <h1>pick, join FREE and win the price you want!</h1>
          <form action='<?php echo get_site_url();?>/home/' method="get" id="short-reg-form">
            <div class="form-group">              
              <div class="input-group">               
                <input type="hidden" value="gadgets" name="prize" />
                <input class="form-control" type="email" placeholder="Email" name="email" required />
                <span class="input-group-btn">
                  <button class="btn btn-warning" type="submit">Join Now!</button>
                </span>
              </div>              
            </div>
          </form>
        </div>
        <div class="col-md-3"> 
         <!--  <div class="row">
            <div class="col-md-12 language-selector"> 
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  English
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">English</a></li>
                  <li><a href="#">Estonian</a></li>                  
                </ul>
              </div>  
            </div>             
          </div>         -->       
          <div class="row">
            <div class="col-md-12 social-links">
              <a href="<?php echo get_fb_link(); ?>"><h1><i class="fa fa-facebook-official"></h1></i></a>
              <!-- <a href=""><h1><i class="fa fa-twitter"></h1></i></a>
              <a href=""><h1><i class="fa fa-pinterest"></h1></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


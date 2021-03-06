<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php //wp_head(); ?>
	
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

</head>

<body <?php body_class(); ?> <?php if ( is_front_page() ) { ?> style="background:#a2ea1a url(<?php echo get_template_directory_uri(); ?>/images/esileht_bg.png) left top repeat-x; margin:0; padding:0; height:100%; font:14px Arial, Helvetica, sans-serif; color:#FFFFFF;" <?php } ?>>
	



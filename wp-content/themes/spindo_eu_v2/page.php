<?php get_header(); ?>



<div id="main_container">
  	<table id="content" cellspacing="0" cellpadding="0" height="750">
        <tr>
            <td valign="top">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
            			<?php the_content(); ?>

				<?php endwhile; endif; ?>
            </td>
        </tr>
 	</table>
  <div id="header"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/top_logo.jpg" alt="spindo.eu" width="180" height="171" border="0" class="image" /></a><img src="<?php bloginfo('template_url'); ?>/images/top_1.jpg" alt="" width="58" height="105" border="0" class="image1" /><img src="<?php bloginfo('template_url'); ?>/images/top_2.jpg" alt="" width="117" height="34" border="0" class="image2" />
    <div id="menu">
		<?php // Change theme_location to languange menu
		global $post;
		$custom = get_post_custom($post->ID);
		$selected = $custom["custom_menu_lang1"][0];
		if ( $selected == "" || !isset($selected)) { $selected = "english-menu"; } else { }
		wp_nav_menu( array( 'container' => 'span', 'menu_id' => 'menu_ul', 'theme_location' => $selected) );

		if ($selected == "english-menu") {
			$lang = "en";
			$spam_url = "/privacy-policy";
		} else if ($selected == "estonian-menu") {
			$lang = "ee";
			$spam_url = "/privaatsus";
		} else if ($selected == "russian-menu") {
			$lang = "ru";
			$spam_url = "/nerazglashenie-info";
		} else if ($selected == "lithuanian-menu") {
			$lang = "lt";
			$spam_url = "/privatumo-politika";
		} else if ($selected == "latvian-menu") {
			$lang = "lv";
			$spam_url = "/personas-datu-konfidencialitate";
		} else {
		}
		?>
    </div>
  </div>
  <div id="we_hate_spam">
  	<a href="<?php echo site_url().$spam_url; ?>">
  		<img src="<?php bloginfo('template_url'); ?>/images/we_hate_spam_<?php echo $lang; ?>.gif" alt="" width="104" height="95" border="0" />
  	</a>
  </div>

  <div id="banner"><img width="210" height="258" src="<?php bloginfo('template_url'); ?>/images/pilv_banner_3.png" alt=""></div>
  <!--
  <div id="banner_left">{left?</div>-->
</div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>

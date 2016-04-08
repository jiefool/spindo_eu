<?php 

/* Template
Template Name: Form 3 - emails
*/

get_header(); 
?>

<div id="main_container">
  	<table id="content" cellspacing="0" cellpadding="0" height="750">
        <tr>
            <td valign="top">

<?php
if ( isset($_POST['submit_friends']) ) {

    	                 
						
						if ($selected == "english-menu") {

							include('form4-template-EN.php');
							
						} else if ($selected == "estonian-menu") {

							include('form4-template-EE.php');
							
						} else if ($selected == "russian-menu") {

							include('form4-template-RU.php');
							
						} else if ($selected == "lithuanian-menu") {

							include('form4-template-LV.php');
							
						} else if ($selected == "latvian-menu") {

							include('form4-template-LT.php');
							
						} else { 
						}
						

} else {// End for IF isset POST

?>

            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
            			<?php the_content(); ?>

    	                        <?php 
						
						if ($selected == "english-menu") {

							include('form3-template-EN.php');
							
						} else if ($selected == "estonian-menu") {

							include('form3-template-EE.php');
							
						} else if ($selected == "russian-menu") {

							include('form3-template-RU.php');
							
						} else if ($selected == "lithuanian-menu") {

							include('form3-template-LV.php');
							
						} else if ($selected == "latvian-menu") {

							include('form3-template-LT.php');
							
						} else { 
						}
						?>

                    
				<?php endwhile; endif; ?>
            </td>
        </tr>
 	</table>
    
<?php } ?>
  <div id="header"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/top_logo.jpg" alt="spindo.eu" width="180" height="171" border="0" class="image" /></a><img src="<?php bloginfo('template_url'); ?>/images/top_1.jpg" alt="" width="58" height="105" border="0" class="image1" /><img src="<?php bloginfo('template_url'); ?>/images/top_2.jpg" alt="" width="117" height="34" border="0" class="image2" />
    <div id="menu">
		<?php // Change theme_location to languange menu
		wp_nav_menu( array( 'container' => 'span', 'menu_id' => 'menu_ul', 'theme_location' => 'estonian-menu') ); ?>
    </div>
  </div>
  <div id="we_hate_spam">
  	<a href="/{if $lang=="en"}privacy-policy{elseif $lang=="ee"}privaatsus{elseif $lang=="lv"}personas-datu-konfidencialitate{elseif $lang=="lt"}privatumo-politika{elseif $lang=="ru"}nerazglashenie-info{/if}">
  		<img src="<?php bloginfo('template_url'); ?>/images/we_hate_spam_ee.gif" alt="" width="104" height="95" border="0" />
  	</a>
  </div>
 
  <div id="banner"><img width="210" height="258" src="<?php bloginfo('template_url'); ?>/images/pilv_banner_3.png" alt=""></div>
  <!--
  <div id="banner_left">{left?</div>-->
</div>

				





<?php //get_sidebar(); ?>

<?php //get_footer(); ?>

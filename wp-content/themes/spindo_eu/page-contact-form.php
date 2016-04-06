<?php 

/* Template
Template Name: Contact Form
*/

get_header(); ?>

<?php // Change theme_location to languange menu
		global $post;
		$custom = get_post_custom($post->ID);
		$selected = $custom["custom_menu_lang1"][0];
		
if ($selected == "english-menu") {
			$lang = "en";
			$spam_url = "/privacy-policy";
			$y_name = "Your name";
			$y_email = "Your e-mail";
			$text = "Message";
			$thanks = "Thanks";
			$submit = "Send";
			
			$email_subj = "Spindo Contact";
			
		} else if ($selected == "estonian-menu") {
			
			$lang = "ee";
			$spam_url = "/privaatsus";
			$y_name = "Teie nimi";
			$y_email = "Teie e-mail";
			$text = "Sõnum";
			$thanks = "Täname";
			$submit = "Saada";
			
			$email_subj = "Spindo Kontakt";
			
		} else if ($selected == "russian-menu") {
			
			$lang = "ru";
			$spam_url = "/nerazglashenie-info";
			$y_name = "Ваше имя";
			$y_email = "Ваш e-mail";
			$text = "Ваше сообщение";
			$thanks = "Спасибо!";
			$submit = "Отправить";
			
			$email_subj = "Spindo Контакт";
			
		} else if ($selected == "lithuanian-menu") {
			
			$lang = "lt";
			$spam_url = "/privatumo-politika";
			$y_name = "Jūsų vardas";
			$y_email = "Jūsų el. pašto adresas";
			$text = "Jūsų žinutė";
			$thanks = "";
			$submit = "Siųsti";
			
			$email_subj = "Spindo Kontaktai";
			
		} else if ($selected == "latvian-menu") {
			
			$lang = "lv";
			$spam_url = "/personas-datu-konfidencialitate";
			$y_name = "Jūsu vārds";
			$y_email = "Jūsu e-pasta adrese";
			$text = "Jūsu ziņa";
			$thanks = "";
			$submit = "Pabeigts";
			
			$email_subj = "Spindo Kontakti";
			
		} else { 
		}
?>

<div id="main_container">
  	<table id="content" cellspacing="0" cellpadding="0" height="750">
        <tr>
            <td valign="top">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
            			<?php the_content(); ?>
                        
                    <?php
						if ( isset($_POST['submit_contact']) ) {
							
						// Clean Captcha: random numbers 1 through 5 (1+3, 4+2, 5+3, etc)
						session_start();
						$captcha = $_POST['captcha'];
						$captcha_answer = $_SESSION['captcha_answer'];
						   
						if($captcha != $captcha_answer) {
							echo 'Captcha is incorrect!';
						}
						else {
						
							$email_from = $_POST['femail'];
										$email_subject = $email_subj;
										$email_body = "
										
										".$_POST['fmessage']."</span></td>
														
										";
										//$success_message_text = __("Thank you for confirming the results validation!","enfold");
											
										$to = "spindomedia@gmail.com";
										$headers = "From: ".$_POST['fname']." <".$_POST['femail']."> \r\n";
										$headers .= "Reply-To: ".$_POST['femail']." \r\n";
										$headers .= "Content-type: text/html; charset=utf8 \r\n";
										//Send the email!
										mail($to,$email_subject,$email_body,$headers);
						
						
						?>
						
								<h1><?php echo $thanks; ?>!</h1><br /><br />
						
						<?php
							} // End Captcha
						} 
						?>    
                        
                    <?php 
					session_start();
					$rand_int1 = substr(mt_rand(),0,2);
					$rand_int2 = substr(mt_rand(),0,1);
					$rand_int3 = substr(mt_rand(),0,1);
					$captcha_answer = $rand_int1 + $rand_int2 - $rand_int3;
					$_SESSION['captcha_answer'] = $captcha_answer;
					
					?>
                    <form method="post">     
                    <table width="450" align="" cellspacing="1" cellpadding="1" border="0" summary="">         
                    <tbody>             
                    <tr>                 
                    <td align="right"><?php echo $y_name; ?>:</td>                 
                    <td><input type="text" maxlength="55" name="fname"></td>             
                    </tr>             
                    <tr>                 
                    <td align="right"><?php echo $y_email; ?>:</td>                 
                    <td><input type="text" name="femail" maxlength="55"></td>             
                    </tr>             
                    <tr>                 
                    <td valign="top" align="right"><?php echo $text; ?>:</td>                 
                    <td valign="top"><textarea rows="4" style="width: 100%;" name="fmessage"></textarea></td>             
                    </tr> 
                    <tr>                 
                    <td valign="top" align="right">&nbsp;</td>                 
                    <td valign="top" align="right">                 
                    <table cellspacing="0" cellpadding="0" border="0">                    
                     <tbody>                         
                     <tr>                             
                     <td valign="top"></td>                             
                     <td> 	<?php echo $rand_int1.' + '.$rand_int2.' - '.$rand_int3.' = '; ?><input type="text" name="captcha"></td>                         
                     </tr>                     
                     </tbody>                 
                     </table>                 
                     </td>             
                     </tr>             
                     <tr>                 
                     <td>&nbsp;</td>                 
                     <td align="right">  
                     <input type="submit" value="<?php echo $submit; ?>" name="submit_contact"></td>            
                     </tr>         
                     </tbody>     
                     </table> 
                     </form>
                    
                    
				<?php endwhile; endif; ?>
            </td>
        </tr>
 	</table>
  <div id="header"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/top_logo.jpg" alt="spindo.eu" width="180" height="171" border="0" class="image" /></a><img src="<?php bloginfo('template_url'); ?>/images/top_1.jpg" alt="" width="58" height="105" border="0" class="image1" /><img src="<?php bloginfo('template_url'); ?>/images/top_2.jpg" alt="" width="117" height="34" border="0" class="image2" />
    <div id="menu">
		<?php // Change theme_location to languange menu
		if ( $selected == "" || !isset($selected)) { $selected = "english-menu"; } else { }
		wp_nav_menu( array( 'container' => 'span', 'menu_id' => 'menu_ul', 'theme_location' => $selected) );  ?>
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

<?php //get_footer(); ?>

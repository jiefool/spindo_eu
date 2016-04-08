<?php
/* Template
Template Name: Form 1
*/

get_header(); ?>
<?php global $post;
		$custom = get_post_custom($post->ID);
		$selected = $custom["custom_menu_lang1"][0];

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
<script type="text/javascript">
<!--

function checkfields(){
var myForm=document.oi_form;
var field_1=myForm.input_email;
var field_2=myForm.checkbox_rules;

if ((field_1.value.length == 0) || (field_2.checked == false))
  show_button(false);
else
	show_button(true);
}

function show_button(check){
	var input_field=document.getElementById("input_submit");
	if(check)
		input_field.innerHTML='<input type="image" src="<?php bloginfo('template_url'); ?>/images/btn_est_join.jpg" onclick="javascript:joinWithSpindo(\'email\');" alt="Join the Spindo Club" />';
	else
		input_field.innerHTML='<img src="<?php bloginfo('template_url'); ?>/images/btn_est_join.jpg" alt="Join the Spindo Club" />';
}

function change_country() {
    var city=document.getElementById("city");
    var country=document.getElementById("country");
    var estonian_cities = new Array("Tallinn", "Tartu", "Narva", "Viljandi", "Rakvere", "Parnu", "Haapsalu", "Voru", "Jogeva", "Kuressaare");
    var latvian_cities = new Array("Ventspils", "Jurmala", "Jelgava", "Riga", "Liepaja", "Salaspils", "Ogre", "Valmiera", "Aluksne", "Jekabpils", "Daugavpils");
    var lithuanian_cities = new Array("Alytus", "Anyksciai", "Kaunas", "Klaipeda", "Panevezys", "Siauliai", "Silute", "Telsiai", "Varena", "Vilnius");
    var len = estonian_cities.length;
    for (var i = 0; i < len; i++) {
        if (estonian_cities[i] == city.value) {
            country.value = "Estonia";
            return 1;
        }
    }
    var len = latvian_cities.length;
    for (var i = 0; i < len; i++) {
        if (latvian_cities[i] == city.value) {
            country.value = "Latvia";
            return 2;
        }
    }
    var len = lithuanian_cities.length;
    for (var i = 0; i < len; i++) {
        if (lithuanian_cities[i] == city.value) {
            country.value = "Lithuania";
            return 3;
        }
    }
    return 0;
}
-->
</script>

<div id="main_container">

<?php if (!isset($_GET['message']) && !isset($_GET['code'])) { ?>


            <table id="content" cellspacing="0" cellpadding="0" height="750">
                <tr>
                    <td valign="top">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>

                        <?php endwhile; endif; ?>

                        <?php

						if ($selected == "english-menu") {

							include('form-template-EN.php');

						} else if ($selected == "estonian-menu") {

							include('form-template-EE.php');

						} else if ($selected == "russian-menu") {

							include('form-template-RU.php');

						} else if ($selected == "lithuanian-menu") {

							include('form-template-LT.php');

						} else if ($selected == "latvian-menu") {

							include('form-template-LV.php');

						} else {
						}
						?>

                    </td>
                </tr>
            </table>

<?php } else if (isset($_GET['message']) && isset($_GET['code']) && $_GET['code'] == "101" && isset($_COOKIE["__spindo_email"]) ) { ?>
             <table id="content" cellspacing="0" cellpadding="0" height="750">
                <tr>
                    <td valign="top">

    	                        <?php

						if ($selected == "english-menu") {

							include('form2-template-EN.php');

						} else if ($selected == "estonian-menu") {

							include('form2-template-EE.php');

						} else if ($selected == "russian-menu") {

							include('form2-template-RU.php');

						} else if ($selected == "lithuanian-menu") {

							include('form2-template-LV.php');

						} else if ($selected == "latvian-menu") {

							include('form2-template-LT.php');

						} else {
						}
						?>
                     </td>
                </tr>
            </table>
   <?php } else { }


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

<?php if (isset($_GET['message']) && isset($_GET['code']) && $_GET['code'] == "101") { ?>
    <div id="banner"><img width="210" height="258" src="<?php bloginfo('template_url'); ?>/images/pilv_banner_3.png" alt=""></div>

 <?php } else { ?>
  <div id="lilled"><img width="400" height="322" alt="" src="<?php bloginfo('template_url'); ?>/images/lilled_4.png"></div>
  <div id="banner_2"><img width="210" height="329" src="<?php bloginfo('template_url'); ?>/images/pilv_banner_1_1.png" alt=""></div>

<?php } ?>

  <!--
  <div id="banner_left">{left?</div>-->
</div>







<?php //get_sidebar(); ?>

<?php //get_footer(); ?>

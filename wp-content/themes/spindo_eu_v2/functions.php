<?php

  require get_template_directory() . '/inc/function-admin.php';

  // Add RSS links to <head> section
  automatic_feed_links();

  // Load jQuery
  if ( !is_admin() ) {
     wp_deregister_script('jquery');
     wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false);
     wp_enqueue_script('jquery');
  }

  // Clean up the <head>
  function removeHeadLinks() {
      remove_action('wp_head', 'rsd_link');
      remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
      register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id'   => 'sidebar-widgets',
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
      ));
    }

  function register_my_menus() {
    register_nav_menus(
    array(
      'english-menu' => __( 'English Menu' ),
      'estonian-menu' => __( 'Estonian Menu' ),
      'lithuanian-menu' => __( 'Lithuanian Menu' ),
      'latvian-menu' => __( 'Latvian Menu' ),
      'russian-menu' => __( 'Russian Menu' ),
    )
    );
  }
  add_action( 'init', 'register_my_menus' );

// Custom Meta for pages
add_action( 'add_meta_boxes', 'custom_menu_func' );
function custom_menu_func()
{                                      // --- Parameters: ---
    add_meta_box( 'custom_menu_id1', // ID attribute of metabox
                  'Header Menu Language',       // Title of metabox visible to user
                  'custom_menu_id1', // Function that prints box in wp-admin
                  'page',              // Show box for posts, pages, custom, etc.
                  'normal',            // Where on the page to show the box
                  'high' );            // Priority of box in display order
}

function custom_menu_id1() {
  global $post;
  $custom = get_post_custom($post->ID);
    $selected = $custom["custom_menu_lang1"][0];

  ?>
    <label for="custom_menu_lang1">Enter menu language: <br /></label>

    <select name="custom_menu_lang1" id="custom_menu_lang1">
      <option value="english-menu" <?php selected( $selected, 'english-menu' ); ?>> --- SELECT --- </option>
      <option value="english-menu" <?php selected( $selected, 'english-menu' ); ?>> English </option>
        <option value="estonian-menu" <?php selected( $selected, 'estonian-menu' ); ?>> Estonian </option>
        <option value="russian-menu" <?php selected( $selected, 'russian-menu' ); ?>> Russian </option>
        <option value="lithuanian-menu" <?php selected( $selected, 'lithuanian-menu' ); ?>> Lithuanian </option>
        <option value="latvian-menu" <?php selected( $selected, 'latvian-menu' ); ?>> Latvian </option>
    </select><br />

    <?php
}

add_action( 'save_post', 'custom_menu_save' );
function custom_menu_save()
{
  global $post;

  if( isset( $_POST['custom_menu_lang1'] ) )
      update_post_meta( $post->ID, 'custom_menu_lang1', $_POST['custom_menu_lang1'] );
}

function checkEmailExist($email){
  global $wpdb;
  return $wpdb->get_row("SELECT * FROM referral WHERE email='".$email."';");
}

function insertReferral($email, $referrerId){
  global $wpdb;
  $wpdb->insert('referral', array('referrer_id' => $referrerId, 'email' => $email ), array('%d', '%s'));
}


function get_visitor_country_code(){
  // $ipAddress = '122.2.54.150';
  $ipAddress = $_SERVER['REMOTE_ADDR'];
  $locationDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipAddress));
  // return $locationDetails["geoplugin_countryCode"];
  return 'EE';
}

function get_fb_link(){
  $visitorCountryCode = get_visitor_country_code();
  // $visitorCountryCode = 'EE';
  $toShowFbLink = 'https://www.facebook.com/Spindo-Club-Competitions-Prize-draws-and-Freebies-764808123655676/';

  if (strcmp($visitorCountryCode, 'EE') == 0){
    return 'https://www.facebook.com/SpindoClub';
  }else if (strcmp($visitorCountryCode, 'LV') == 0){
    return 'https://www.facebook.com/Spindo-Club-lab%C4%81k%C4%81s-sp%C4%93les-un-laimesti-132377283603011';
  }else if (strcmp($visitorCountryCode, 'LT') == 0){
    return 'https://www.facebook.com/Spindo-Club-geriausi-žaidimai-ir-prizai-315195431917174/';
  }else{
    return 'https://www.facebook.com/Spindo-Club-Competitions-Prize-draws-and-Freebies-764808123655676/';
  }
}

function get_country_deals(){
  $detectedCountryCode = get_visitor_country_code();
  global $wpdb;
  $dealsData = $wpdb->get_results('SELECT * FROM spindo_deals WHERE country_code = "'.$detectedCountryCode.'"');
  return $dealsData;
}

function get_no_country_deals(){
  global $wpdb;
  $dealsData = $wpdb->get_results('SELECT * FROM spindo_deals WHERE country_code = ""');
  return $dealsData;
}

function show_deals($dealsData){
  foreach($dealsData as $deals){
    echo '<div class="col-md-4 col-xs-6">';
    echo '<div class="deal-box">';
    echo '<a href="'.$deals->deal_link.'" target="_blank">';
    echo '<img src="'.$deals->image_url.'" alt="'.$deals->description.'" title="'.$deals->description.'">';
    echo '</a>';
    echo '</div>';
    echo '</div>';
  }
}

function get_available_deals(){
  $detectedCountryCode = get_visitor_country_code();
  // $detectedCountryCode = 'PH';
  global $wpdb;
  $dealsData = $wpdb->get_results('SELECT * FROM spindo_deals WHERE (country_code LIKE "%'.$detectedCountryCode.'%" AND end_date >= CURDATE()) OR country_code = "" OR end_date IS NULL');
  return $dealsData;
}

function spindo_welcome_email($firstName, $userEmail, $referralLink){
  add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
  $to = 'jaypaulaying5@gmail.com';
  // $to = $userEmail;
  $subject = 'Welcome to Spindo Club';
  $headers = "Content-type: text/html; charset=iso-8859-1";
  $body = '<div style="background-color:#94da10;font-family:\'Architects Daughter\';font-size:1.2em">
              <div style="width:650px;margin:0px auto">
                <div>
                  <p>
                    Hi '.$firstName.',<br/><br/>

                    Thank you for joining Spindo Club!

                    Feel free to <a href="'.$referralLink.'"> invite your friends</a> to join Spindo and like us in Facebook.
                  </p>
                </div>
                <div>
                    <div>
                      Here are some current deals:
                    </div>
                    <div>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                      <a href=""><img src="http://spindo.eu/wp-content/uploads/2016/05/site_deals_3-300x250.png" /></a>
                    </div>
                </div>
              </div>
            </div>';

  wp_mail( $to, $subject, $body, $headers );
  remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
}
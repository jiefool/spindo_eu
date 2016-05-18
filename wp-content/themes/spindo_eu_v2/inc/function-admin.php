<?php

/*
@package spindo_theme_v2
  ===============================
      ADMIN PAGE
  ===============================
*/

function spindo_add_admin_page(){

  //generate spindo admin page
  add_menu_page('Spindo Theme', 'Spindo', 'manage_options', 'spindo_theme_admin', 'spindo_theme_admin_page', get_template_directory_uri() . '/images/spindo_di.png', 110);

  //generate spindo admin submenu
  add_submenu_page('spindo_theme_admin', 'Spindo Theme', 'General', 'manage_options', 'spindo_theme_admin', 'spindo_theme_admin_page');

  add_submenu_page('spindo_theme_admin', 'Spindo Add Deals', 'Add Deals', 'manage_options', 'spindo_theme_add_deals', 'spindo_theme_add_deals_page');

}

add_action('admin_menu', 'spindo_add_admin_page');

function spindo_theme_admin_page(){
  require_once( get_template_directory() . '/inc/templates/spindo-admin.php' );
}

function spindo_theme_add_deals_page(){
  if (isset($_GET['action'])){
    if($_GET['action']=='insert-deal'){
      $_POST['deal-name'];
      $_POST['image-url'];
      $_POST['description'];
      $_POST['country-code'];
      $_POST['long'];
      $_POST['lat'];
      $_POST['end-date'];

      $table = "spindo_deals";
      $data = [];
      $data['deal_name']=$_POST['deal-name'];
      $data['image_url']=$_POST['image-url'];
      $data['description']=$_POST['description'];
      $data['country_code']=$_POST['country-code'];
      $data['long']=$_POST['long'];
      $data['lat']=$_POST['lat'];
      $data['end_date']=$_POST['end-date'];  

      global $wpdb;
      $wpdb->insert($table, $data); 
  
      echo '<br/>';
      echo '<br/>';
      echo 'Deal added.';
      echo '<br/>';
      echo '<br/>';
      echo '<a href="admin.php?page=spindo_theme_add_deals">Add New Deal</a>';
    }
  }else{
    require_once( get_template_directory() . '/inc/templates/spindo-add-deals.php' );
  }
}
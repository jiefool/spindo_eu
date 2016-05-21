<?php

/*
@package spindo_theme_v2
  ===============================
      ADMIN PAGE
  ===============================
*/

function get_deals(){
  global $wpdb;
  return $wpdb->get_results("SELECT * FROM spindo_deals");
}

function spindo_add_admin_page(){

  //generate spindo admin page
  add_menu_page('Spindo Theme', 'Spindo', 'manage_options', 'spindo_theme_deals', 'spindo_theme_admin_deals', get_template_directory_uri() . '/images/spindo_di.png', 110);

  //generate spindo admin submenu
  add_submenu_page('spindo_theme_deals', 'Spindo Deals', 'Deals', 'manage_options', 'spindo_theme_deals', 'spindo_theme_admin_deals');

  add_submenu_page('spindo_theme_deals', 'Spindo Add Deals', 'Add Deals', 'manage_options', 'spindo_theme_add_deals', 'spindo_theme_add_deals_page');

}

add_action('admin_menu', 'spindo_add_admin_page');

function spindo_theme_admin_deals(){
  global $wpdb;
  $wpdb->show_errors();      
  if ($_GET['page']=='spindo_theme_deals' && $_GET['action']=='edit'){    
    $deal = $wpdb->get_row("SELECT * FROM spindo_deals WHERE id='".$_GET['id']."'");
    require_once( get_template_directory() . '/inc/templates/spindo-edit-deals.php' );
  }else if ($_GET['page']=='spindo_theme_deals' && $_GET['action']=='update'){
    $table = "spindo_deals";
    $data = [];
    $data['deal_name']=$_POST['deal-name'];
    $data['image_url']=$_POST['image-url'];
    $data['deal_link']=$_POST['deal-link'];
    $data['description']=$_POST['description'];
    $data['country_code']=$_POST['country-code'];
    $data['longitude']=$_POST['longitude'];
    $data['latitude']=$_POST['latitude'];
    $data['end_date']=$_POST['end-date'];  
    $where = [];
    $where['id'] = $_POST['id'];
    
    if ($wpdb->update( $table, $data, $where, $format = null, $where_format = null )){
      echo '<h3>Deal updated.</h3>';            
    }else{
      $wpdb->print_error();
      $wpdb->last_error;      
    }
    
  }else if ($_GET['page']=='spindo_theme_deals' && $_GET['action']=='delete'){
    $table = "spindo_deals";
    $where['id'] = $_GET['id'];
    $wpdb->delete( $table, $where, $where_format = null );
    echo '<h3>Deal Deleted.</h3>';    
  }else{
    require_once( get_template_directory() . '/inc/templates/spindo-deals.php' );
  }
}

function spindo_theme_add_deals_page(){
  if (isset($_GET['action'])){
    if($_GET['action']=='insert-deal'){    

      $table = "spindo_deals";      
      $data = [];
      $data['deal_name']=$_POST['deal-name'];
      $data['image_url']=$_POST['image-url'];
      $data['deal_link']=$_POST['deal-link'];
      $data['description']=$_POST['description'];
      $data['country_code']=$_POST['country-code'];
      $data['longitude']=$_POST['longitude'];
      $data['latitude']=$_POST['latitude'];
      $data['end_date']=$_POST['end-date'];  

      global $wpdb;      
      $wpdb->show_errors();
      if ($wpdb->insert($table, $data)){
        echo '<br/>';
        echo '<br/>';
        echo 'Deal added.';
        echo '<br/>';
        echo '<br/>';
        echo '<a href="admin.php?page=spindo_theme_add_deals">Add New Deal</a>';  
      }else{
        $wpdb->print_error();
        echo $wpdb->last_error;
      }
    }
  }else{
    require_once( get_template_directory() . '/inc/templates/spindo-add-deals.php' );
  }
}

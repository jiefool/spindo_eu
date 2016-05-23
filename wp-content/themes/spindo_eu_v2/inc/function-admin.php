<?php

/*
@package spindo_theme_v2
  ===============================
      ADMIN PAGE
  ===============================
*/

function show_unexpired_deals(){
  return show_admin_deals(get_unexpired_deals());
}

function show_expired_deals(){  
  return show_admin_deals(get_expired_deals());
}

function get_expired_deals(){  
  return wp_query('SELECT * FROM spindo_deals WHERE end_date < CURDATE() AND end_date!="0000-00-00"');
}

function get_unexpired_deals(){
  return wp_query('SELECT * FROM spindo_deals WHERE (end_date >= CURDATE() OR end_date IS NULL)');
}

function wp_query($queryString){ 
  global $wpdb; 
  return $wpdb->get_results($queryString.get_filters());
}

function get_filters(){
  $spindoFilter = '';
  if (isset($_POST['filter-country-code'])){   
    $filterCountryCode = $_POST['filter-country-code']; 
    $spindoFilter = ' AND country_code LIKE "%'.$filterCountryCode.'%"';
  }
  return $spindoFilter;
}

function show_admin_deals($deals){
  $html = '';
  foreach($deals as $deal){
    $html .= '<div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">'.$deal->deal_name.'</h3>
              </div>
              <div class="panel-body">
               <img src="'.$deal->image_url.'" width="100%">
              </div>
              <ul class="list-group">
                <li class="list-group-item" style="overflow:hidden"><b>Deal link: </b>'.$deal->deal_link.'</li>
                <li class="list-group-item" style="overflow:hidden"><b>Country Code: </b>'.$deal->country_code.'</li>
                <li class="list-group-item"><b>Description: </b>'.$deal->description.'</li>
                <li class="list-group-item"><b>End date: </b>'.$deal->end_date.'</li>
                <li class="list-group-item"><b><a href="admin.php?page=spindo_theme_deals&action=edit&id='.$deal->id.'">Edit</a> | <a href="admin.php?page=spindo_theme_deals&action=delete&id='.$deal->id.'" onclick="return confirm(\'Are you sure?\')">Delete</a></b></li>
              </ul>
            </div>
          </div>';
  }    
  return $html;
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
  if (isset($_GET['action'])){     

    if ($_GET['action']=='edit'){    

      $deal = $wpdb->get_row("SELECT * FROM spindo_deals WHERE id='".$_GET['id']."'");
      require_once( get_template_directory() . '/inc/templates/spindo-edit-deals.php' );

    }else if ($_GET['action']=='update'){

      $table = "spindo_deals";
      $data = [];
      $data['deal_name']=$_POST['deal-name'];
      $data['image_url']=$_POST['image-url'];
      $data['deal_link']=$_POST['deal-link'];
      $data['description']=$_POST['description'];
      $data['country_code']=strtoupper(join(',', $_POST['country-code']));
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
      
    }else if ($_GET['action']=='delete'){
      $table = "spindo_deals";
      $where['id'] = $_GET['id'];
      $wpdb->delete( $table, $where, $where_format = null );
      echo '<h3>Deal Deleted.</h3>';    
    }
  }else{    
    if (isset($_POST['filter-country-code'])){
      $filterCountryCode = $_POST['filter-country-code'];    
    }else{
      $filterCountryCode = '';
    }
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
      $data['country_code']=strtoupper(join(',', $_POST['country-code']));
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

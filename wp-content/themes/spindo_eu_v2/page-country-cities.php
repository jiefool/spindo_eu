<?php 
  /**
  * Template Name: Get Country Cities
  */ 

  global $wpdb;
  
  $countryCode = $_GET['country_code'];
  
  $cities = $wpdb->get_results('SELECT name FROM world_cities WHERE country_code="'.$countryCode.'"', ARRAY_A);

  echo json_encode($cities);

?>
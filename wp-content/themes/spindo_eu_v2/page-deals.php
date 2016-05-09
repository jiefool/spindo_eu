<?php
  /**
 * Template Name: Deals Page
*/


  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);


$dealsLocation = get_template_directory_uri()."/deals_data.json";
$dealsData = json_decode(file_get_contents($dealsLocation));
// $userCountry = "ph";

$ipAddress = '122.2.54.150';
//$ipAddress = $_SERVER['REMOTE_ADDR'];
$locationDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipAddress));  
$detectedCountryCode = $locationDetails["geoplugin_countryCode"];  
$detectedCityName = $locationDetails["geoplugin_city"];


get_header(); ?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">
      <?php 

        foreach($dealsData as $deals){                 
          if ($deals->country == strtolower($detectedCountryCode)){            
            if ($deals->end_date > date("Y-m-d", time())){            
              echo '<div class="col-md-4 col-xs-6">';
              echo '<div class="deal-box">';
              echo '<img src="'.get_site_url().$deals->image_url.'">';
              echo '</div>';
              echo '</div>';      
            }
          }
        }
      ?>      
    </div>
  </div>
</section>

<?php get_footer(); ?>

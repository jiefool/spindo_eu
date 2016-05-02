<?php
  /**
 * Template Name: Deals Page
*/

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
    <div class="col-md-12 main-content">
      <?php 

        foreach($dealsData as $deals){          
          if ($deals->country == strtolower($detectedCountryCode)){            
            if ($deals->end_date > date('2016-04-25')){            
              echo '<div class="col-md-4">';
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

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">
      <?php 
        $dealData = get_deals_data();
        $noCountryDeals = get_no_country_deals();
        foreach($dealData as $deals){                         
          if ($deals->end_date >= date("Y-m-d", time())){            
            echo '<div class="col-md-4 col-xs-6">';
            echo '<div class="deal-box">';
            echo '<a href="'.$deals->deal_link.'">';
            echo '<img src="'.$deals->image_url.'">';
            echo '</a>';
            echo '</div>';
            echo '</div>';
          }       
        }
        foreach($noCountryDeals as $deals){                         
          if ($deals->end_date >= date("Y-m-d", time())){            
            echo '<div class="col-md-4 col-xs-6">';
            echo '<div class="deal-box">';
            echo '<a href="'.$deals->deal_link.'">';
            echo '<img src="'.$deals->image_url.'">';
            echo '</a>';
            echo '</div>';
            echo '</div>';
          }       
        }
      ?>      
    </div>
  </div>
</section>
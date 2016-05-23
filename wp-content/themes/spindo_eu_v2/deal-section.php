<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">
      <?php         
        $availableDeals = get_available_deals();        
        show_deals($availableDeals);        
      ?>      
    </div>
  </div>
</section>
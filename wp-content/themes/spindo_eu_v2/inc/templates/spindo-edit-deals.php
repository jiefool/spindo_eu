<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" type="text/css" />  

<br/>
<br/>
<br/>
<div class="container-fluid">
  <div class="col-md-4">
    <h1>Add Deals</h1>
    <form id="spindo_deal_upload" method="post" action="admin.php?page=spindo_theme_deals&action=update">
      <input type="hidden" value="<?php echo $deal->id; ?>" name="id">
      <div class="form-group">  
        <label for="end-date">Deal Name: </label>
        <input class="form-control" type="text" placeholder="Deal Name" name="deal-name" value="<?php echo $deal->deal_name ?>" required />
      </div>

      <div class="form-group">  
        <label for="end-date">Deal Image URL: </label>
        <input class="form-control" type="text" placeholder="Deal Image URL" name="image-url" value="<?php echo $deal->image_url ?>" required/>
      </div>

       <div class="form-group">  
        <label for="end-date">Deal Link: </label>
        <input class="form-control" type="text" placeholder="Deal Link" name="deal-link" value="<?php echo $deal->deal_link ?>" required/>
      </div>

      <div class="form-group">  
        <label for="end-date">Description: </label>
        <input class="form-control" type="text" placeholder="Description" name="description" value="<?php echo $deal->description ?>" />
      </div>

      <div class="form-group" id="country-code-fields">  
        <label for="end-date">Country Code: </label>        

        <?php
          $countryCodes = explode(',', $deal->country_code);
          $count = 0;
          foreach($countryCodes as $code){
            if ($count == 0){
              echo '<div class="input-group">
                      <input class="form-control" type="text" placeholder="Country Code e.g. EE" name="country-code[]" value="'.$code.'" />
                        <div class="input-group-addon">
                        <a href="javascript:addCountryCodeField();">
                          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        </a>
                      </div>          
                    </div>';
            }else{
              echo '<div class="input-group" id="country-code-field-'.$count.'">
                      <input class="form-control" type="text" placeholder="Country Code e.g. EE" name="country-code[]" value="'.$code.'" />
                        <div class="input-group-addon">
                        <a href="javascript:removeCountryCodeField('.$count.');">
                          <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
                        </a>
                      </div>          
                    </div>';
            }
            $count++;
          }
        ?>
      </div>

      <div class="form-group">  
        <label for="end-date">Longitude: </label>
        <input  class="form-control" type="text" placeholder="Longitude" name="longitude" value="<?php echo $deal->longitude ?>"/>
      </div>
      <div class="form-group">  
        <label for="end-date">Latitude: </label>
        <input class="form-control" type="text" placeholder="Latitude" name="latitude" value="<?php echo $deal->latitude ?>"/>
      </div>
      <div class="form-group">  
        <label for="end-date">End Date: </label>
        <input class="form-control" type="date" placeholder="End date" name="end-date" value="<?php echo $deal->end_date ?>"/>
      </div>
      <div class="form-group">          
        <input class="btn btn-warning btn-block" type="submit" value="Update Deal"/>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/templates/js/deals.js"></script>
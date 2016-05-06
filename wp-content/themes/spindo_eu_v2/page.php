<?php get_header(); ?>
<?php
  // $ipAddress = '122.2.54.150';
  $ipAddress = $_SERVER['REMOTE_ADDR'];
  $locationDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipAddress));  
  $detectedCountryCode = $locationDetails["geoplugin_countryCode"];  
  // $detectedCountryCode = 'PH';
  $detectedCityName = $locationDetails["geoplugin_city"];
  // $detectedCityName = 'Tagbilaran City';

  $pickedPrize = $_GET['prize'];
  $allCountries = json_decode(file_get_contents("https://restcountries.eu/rest/v1/all"));    

?>
<script type="text/javascript">    
  var countryCities = "<?php echo get_site_url(); ?>/country-cities/?country_code=";
  var registrationDBScript = "<?php echo get_site_url(); ?>/registration";
  var detectedCountryCode = "<?php echo $detectedCountryCode; ?>";
  var detectedCityName = "<?php echo $detectedCityName; ?>";
</script>
<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-7 col-md-offset-1 registration-form">
        <div class="loading-prompt">
          <h3>Please wait loading cities...</h3>
        </div>
        <h1>Join Now</h1>
        
        <form method="post" action="https://spindo.sendsmaily.net/api/opt-in/" name="oi_form" id="oi_form" onsubmit="registrationSaveToDatabase();">
          <input type="hidden" name="key" value="WiEb8i9A9myCi-Skqg0yuS0eeO86VqmYwZ6X-qFcbxE," /> 
          <input type="hidden" name="autoresponder" value="7" />
          <input type="hidden" name="success_url" value="<?php echo get_site_url();?>/thank-you" />
          <input type="hidden" name="failure_url" value="<?php echo get_site_url();?>/something-went-wrong" />
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" name="picked-prize" id="picked-prize" value="<?php echo $pickedPrize ?>">
              <div class="form-group">              
                <input type="text" class="form-control" name="first-name" id="first-name" placeholder="First Name" required>
              </div>
              <div class="form-group">                              
                <select class="form-control" id="birthday" name="birthday">
                  <option value="">Select Birth Year</option>
                  <?php
                      $currentYear = date("Y");
                      $startYear  = $currentYear - 100;
                      for($i = $currentYear; $i > $startYear; $i--){
                        echo '<option value="'.$i.'" '.'>'.$i.'</option>';
                      }
                  ?>
                </select>
              </div>
              <div class="form-group">              
                <select class="form-control" id="country-select" name="country">
                  <?php
                    foreach($allCountries as $country){
                      $isSelected = '';
                      if ($country->alpha2Code == $detectedCountryCode ){
                        $isSelected = 'selected="selected"';
                      }
                      echo '<option data-country-code="'.$country->alpha2Code.'" value="'.$country->name.'" '.$isSelected.'>'.$country->name.'</option>';
                    }
                  ?>                 
                </select>
              </div>
              <div class="form-group">              
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>            
            </div>
            <div class="col-md-6">
              <div class="form-group">              
                <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Last Name">
              </div>
              <div class="form-group">
                <select class="form-control" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>                              
              </div>
              <div class="form-group">              
                <select class="form-control" id="city-select" name="city">                
                  <option value="">Please select</option>
                </select>
              </div>
              <div class="form-group">              
                <input type="text" class="form-control" name="contact-number" id="contact-number" placeholder="Contact #">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox" required name="terms-and-conditions"><p>Yes, I accept the <a href="<?php echo get_site_url(); ?>/rules">rules of the Spindo Club</a> and want to join for free.</p>
                </label>
              </div>
              <button type="submit" class="btn btn-warning btn-block btn-lg">Yes, I join</button>              
            </div>        
          </div>          
        </form>        
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="prize-round prize-gadgets picked-prize">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="prize-header">
                  <h3>You pick <strong>Gadgets!</strong> Awesome!</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="prize-round prize-holiday picked-prize">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="prize-header">
                  <h3>You pick <strong>Holiday!</strong> Awesome!</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="prize-round prize-cash picked-prize">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="prize-header">
                  <h3>You pick <strong>Cash!</strong> Awesome!</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">         
            <div class="form-group change-prize"> 
              <div class="col-md-4 col-md-offset-2">   
                <label style="margin-top:10px">Change Prize:</label>        
              </div>
              <div class="col-md-5">
                <select class="form-control" id="change-prize" style="margin-left:-30px">
                  <option value="gadgets" <?php if ($pickedPrize == "gadgets"){ echo "selected=\"selected\""; } ?>>Gadgets</option>
                  <option value="holiday" <?php if ($pickedPrize == "holiday"){ echo "selected=\"selected\""; } ?>>Holiday</option>
                  <option value="cash" <?php if ($pickedPrize == "cash"){ echo "selected=\"selected\""; } ?>>Cash</option>
                </select>
              </div>            
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div>
</section>
<?php get_footer(); ?>

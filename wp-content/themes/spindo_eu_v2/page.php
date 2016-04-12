<?php get_header(); ?>
<?php
  $pickedPrize = $_GET['prize'];
  $allCountries = json_decode(file_get_contents("https://restcountries.eu/rest/v1/all"));  
?>
<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-7 col-md-offset-1 registration-form">
        <h1>Registration</h1>
        <form method="POST" action="registration.php">
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" name="picked-prize" id="picked-prize" value="<?php echo $pickedPrize ?>">
              <div class="form-group">              
                <input type="email" class="form-control" id="first-name" placeholder="First Name">
              </div>
              <div class="form-group">              
                <input type="date" class="form-control" id="birthday" placeholder="Birthday">
              </div>
              <div class="form-group">              
                <select class="form-control" id="country">
                  <?php
                    foreach($allCountries as $country){
                      echo '<option data-country-code="'.$country->alpha2Code.'" value="'.$country->name.'">'.$country->name.'</option>';
                    }
                  ?>                 
                </select>
              </div>
              <div class="form-group">              
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>            
            </div>
            <div class="col-md-6">
              <div class="form-group">              
                <input type="email" class="form-control" id="last-name" placeholder="Last Name">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>                              
              </div>
              <div class="form-group">              
                <select class="form-control">
                  <option>City 1</option>
                  <option>City 2</option>
                </select>
              </div>
              <div class="form-group">              
                <input type="text" class="form-control" id="contact-number" placeholder="Contact #">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox"><p>I accept Terms and Conditions</p>
                </label>
              </div>
              <button type="submit" class="btn btn-warning btn-block btn-lg">Register</button>
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

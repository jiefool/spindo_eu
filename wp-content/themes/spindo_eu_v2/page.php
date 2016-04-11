<?php get_header(); ?>
<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-7 col-md-offset-1 registration-form">
        <h1>Registration</h1>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">              
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
              </div>
              <div class="form-group">              
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Birthday">
              </div>
              <div class="form-group">              
                <select class="form-control">
                  <option>Country 1</option>
                  <option>Country 2</option>
                </select>
              </div>
              <div class="form-group">              
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>            
            </div>
            <div class="col-md-6">
              <div class="form-group">              
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
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
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact #">
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
        <div class="price-round price-holiday">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="price-header">
                  <h3>You pick <strong>Holiday!</strong> Awesome!</h3>
                </div>
              </div>
              <div class="row">
                <div class="price-action" style="margin-top:264px">
                  <a href="<?php echo get_page_link(8); ?>?prize=holiday"><h3>Fly now!</h3></a>
                </div>
              </div>
            </div>
          </div>
      </div>     
    </div>
  </div>
</section>
<?php get_footer(); ?>

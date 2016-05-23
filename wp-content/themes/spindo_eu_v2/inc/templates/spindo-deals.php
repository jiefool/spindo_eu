<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" type="text/css" /> 
<div class="container-fluid">
  <div class="row">  
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Deals</h1>
        </div>
        <div class="panel-body">
          <div class="row">          
            <form action="admin.php?page=spindo_theme_deals" method="post">  
              <div class="col-md-3">          
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Country Code" value="<?php echo $filterCountryCode; ?>" name="filter-country-code" />
                    <div class="input-group-addon">
                      <button type="submit">
                        <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
                      </button>
                    </div>          
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">              
              <h4 class="panel-title">Unexpired Deals</h4>              
            </div>
            <div class="panel-body">              
              <?php               
                echo show_unexpired_deals(); 
              ?>
            </div>
          </div>
          <div class="panel panel-warning">
            <div class="panel-heading">              
              <h4 class="panel-title">Expired Deals</h4>              
            </div>
            <div class="panel-body">
              <?php echo show_expired_deals(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
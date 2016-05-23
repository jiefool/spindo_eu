<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" type="text/css" />  

<br/>
<br/>
<br/>
<div class="container-fluid">
  <div class="col-md-4">
    <h1>Add Deals</h1>
    <form id="spindo_deal_upload" method="post" action="admin.php?page=spindo_theme_add_deals&action=insert-deal">
      <div class="form-group">  
        <label for="end-date">Deal Name: </label>
        <input class="form-control" type="text" placeholder="Deal Name" name="deal-name" required />
      </div>
      <div class="form-group">  
        <label for="end-date">Deal Image URL: </label>
        <input class="form-control" type="text" placeholder="Deal Image URL" name="image-url" required/>
      </div>
       <div class="form-group">  
        <label for="end-date">Deal Link: </label>
        <input class="form-control" type="text" placeholder="Deal Link" name="deal-link" required/>
      </div>
      <div class="form-group">  
        <label for="end-date">Description: </label>
        <input class="form-control" type="text" placeholder="Description" name="description" />
      </div>
      <div class="form-group" id="country-code-fields">  
        <label for="end-date">Country Code: </label>
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Country Code e.g. EE" name="country-code[]"/>
          <div class="input-group-addon">
            <a href="javascript:addCountryCodeField();">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </a>
          </div>  
        </div>
      </div>      
      <div class="form-group">  
        <label for="end-date">Longitude: </label>
        <input  class="form-control" type="text" placeholder="Longitude" name="longitude"/>
      </div>
      <div class="form-group">  
        <label for="end-date">Latitude: </label>
        <input class="form-control" type="text" placeholder="Latitude" name="latitude"/>
      </div>
      <div class="form-group">  
        <label for="end-date">End Date: </label>
        <input class="form-control" type="date" placeholder="End date" name="end-date"/>
      </div>
      <div class="form-group">          
        <input class="btn btn-warning btn-block" type="submit" value="Add Deal"/>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/templatesjs/deals.js"></script>

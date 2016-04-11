<?php get_header(); ?>
<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-md-4">
          <div class="price-round price-gadget">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="price-header">
                  <h3>Gadgets</h3>
                </div>
              </div>
              <div class="row">
                <div class="price-action">
                  <a href="<?php echo get_page_link(8); ?>?prize=gadget"><h3>Grab it!</h3></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-round price-holiday">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="price-header">
                  <h3>Holiday</h3>
                </div>
              </div>
              <div class="row">
                <div class="price-action">
                  <a href="<?php echo get_page_link(8); ?>?prize=holiday"><h3>Fly now!</h3></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-round price-cash">
            <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="price-header">
                  <h3>Cash</h3>
                </div>
              </div>
              <div class="row">
                <div class="price-action">
                  <a href="<?php echo get_page_link(8); ?>?prize=cash"><h3>Take it!</h3></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

<?php 
  /* Template
  Template Name: Contact Form
  */

  get_header(); 
?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">  
      <div class="col-md-8 col-md-offset-4 col-xs-12">
        <h3>Contact</h3>
        <p style="font-size:1.2em">
          Spindo Media OÜ<br/>
          Company Registration Number: 11645024<br/>
          KMK/VAT Number: EE101308067<br/>
        </p>
        <div class="row">
          <div class="col-md-6">
            <form method="post" action="<?php echo get_site_url().'/send-email'; ?>" name="contact-form" id="contact-form">
              <div class="form-group">
                <input class="form-control" type="text" name="sender-name" placeholder="Name">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="sender-email" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" columns="50" rows="5" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-warning btn-block" type="submit">Send</button>
              </div>
            </form>        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>

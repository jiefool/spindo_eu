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
          Address: Tornimäe 5, 10145, Tallinn, Estonia<br/>
          E-mail: business@spindo.eu<br/>
        </p>
        <div class="row">
          <div class="col-md-6">
            <form method="post" action="<?php echo get_site_url().'/send-email'; ?>" name="contact-form" id="contact-form" onsubmit="return checkRecaptcha();">
              <div class="form-group">
                <input class="form-control" type="text" name="sender-name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" name="sender-email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" columns="50" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LdMICATAAAAABZ1_FJqJJZUlHbmjrnBNJjeLAj1"></div>
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

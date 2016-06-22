<?php 
  /* Template
  Template Name: Contact Form
  */

  $ipAddress = $_SERVER['REMOTE_ADDR'];
  get_header(); 
?>
<script type='text/javascript'>
  var clientIpAddress = '<?php echo $ipAddress; ?>' 
  var key = '6LdMICATAAAAABZ1_FJqJJZUlHbmjrnBNJjeLAj1';
</script>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">  
      <div class="col-md-8 col-md-offset-4 col-xs-12">
        <h3>Contact</h3>
        <p style="font-size:1.2em">
          Spindo Media (Engelvels OÜ)<br/>
          Company Registration Number: 11287246<br/>
          KMK/VAT Number: EE101716824<br/>
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
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                    async defer>
                </script>
              </div>
            </form>        
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>  
</section>

<?php 
require_once get_template_directory() . '/deal-section.php';
get_footer(); ?>

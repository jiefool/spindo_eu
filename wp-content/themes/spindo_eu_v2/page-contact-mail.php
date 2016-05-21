<?php  
  /**
  * Template Name: Contact Us Email
  */

  $to = ["jaypaulaying5@gmail.com", "tonis@p4r.eu"];
  $subject = "Spindo Contact Us";
  $message = "Name: ".$_POST['sender-name']."\n";
  $message = $message."Email: ".$_POST['sender-email']."\n\n";
  $message = $message.$_POST['message'];
  $headers = "";
  $attachments = [];

  if ($_POST['sender-name'] != '' && $_POST['sender-email'] != '' && $_POST['message'] != ''){
    wp_mail( $to, $subject, $message, $headers, $attachments );
  }

  get_header();
?>


<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">  
      <div class="col-md-6 col-md-offset-3 col-xs-12">
        <br/><br/>
        <h3>Thank you for contacting us. We'll get in touch soon.</h3>         
      </div>
    </div>
  </div>
</section>

<?php 
require_once get_template_directory() . '/deal-section.php';
get_footer(); ?>
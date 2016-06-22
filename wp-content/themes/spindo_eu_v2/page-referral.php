<?php
  /**
  * Template Name: Referral Page
  */


  // ini_set('display_errors',1);
  // ini_set('display_startup_errors',1);
  $referrerId = $_POST['referrer-id'];
  $referredEmails = $_POST['referred-email'];
  $alreadyAddedEmails = [];

  global $wpdb;
  $referrer  = $wpdb->get_row("SELECT * FROM lead_prize WHERE id='".$referrerId."'");

  $subject = 'You are invited to Spindo Club';
  $message = "Hello,\n\nYou are referred to Spindo Club by your friend with email ".$referrer->email.". You might want to check us out.\nhttps://spindo.eu\n\nRegards,\nSpindo Club";
  $headers = '';
  $attachments = [];

  wp_mail( $to, $subject, $message, $headers, $attachments );


  foreach($referredEmails as $email){
    $isEmailExists = checkEmailExist($email);
    if ($isEmailExists == ""){
      insertReferral($email, $referrerId);
      $to = $email;
      wp_mail( $to, $subject, $message, $headers, $attachments );
    }else{
      $alreadyAddedEmails[] = $email;
    }
  }
  
  get_header();

?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3>Thank you for referring Spindo Club to your friends.</h3>
          <?php
            if (count($alreadyAddedEmails) > 0){
              echo "<h4>Following emails already referred:</h4>";
              echo "<ul>";
              foreach($alreadyAddedEmails as $email){
                echo "<li>".$email."</li>";
              }
              echo "</ul>";
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3>Like us in Facebook!</h3>
          <div class="fb-page" data-href="<?php echo get_fb_link(); ?>" data-width="500" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo get_fb_link(); ?>"><a href="<?php echo  get_fb_link(); ?>">Startup Weekend Bohol</a></blockquote></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once get_template_directory() . '/deal-section.php';

get_footer(); ?>




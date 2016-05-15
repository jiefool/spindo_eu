<?php  
  /**
  * Template Name: Referral Page
  */

  
  // ini_set('display_errors',1);
  // ini_set('display_startup_errors',1);  
  $referrerId = $_POST['referrer-id'];
  $referredEmails = $_POST['referred-email'];
  $alreadyAddedEmails = [];

  foreach($referredEmails as $email){    
    $isEmailExists = checkEmailExist($email);    
    if ($isEmailExists == ""){
      insertReferral($email, $referrerId);
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
          <h3>Thank you for referring Spindo Club to your friends.<?php echo get_visitor_country_code(); ?></h3>
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

<?php get_footer(); ?>




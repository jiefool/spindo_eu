<?php  
  /**
  * Template Name: Referral Page
  */

  
  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);  
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

  function checkEmailExist($email){   
    global $wpdb; 
    return $wpdb->get_row("SELECT * FROM referral WHERE email='".$email."';");
  }

  function insertReferral($email, $referrerId){    
    global $wpdb;
    $wpdb->insert('referral', array('referrer_id' => $referrerId, 'email' => $email ), array('%d', '%s'));
  }

  get_header();

?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">  
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
  </div>
</section>

<?php get_footer(); ?>




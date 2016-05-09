<?php 
  /**
  * Template Name: Thank You Page
  */

   ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  get_header();

  // global $wpdb;
  $referrer = $wpdb->get_row("SELECT * FROM lead_prize ORDER BY id DESC");  
  $referrerId = $referrer->id;
?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-6 col-md-offset-3" style="font-family:'Architects Daughter';margin-top:90px;">
        <h4>
           Thank you for registering to spindo club. We will notify whenever you win one of our draws.  
        </h4>
        <h4>
           You might want to invite your friends to increase your chance of winning. Just enter their email below:          
        </h4>
        <form method="post" action="<?php echo get_site_url().'/referral'; ?>" name="invite_form" id="invite_form">
          <input type="hidden" name="referrer-id" value="<?php echo $referrerId; ?>" />      
          <div class="col-md-8 col-md-offset-1">              
            <div class="row" id="invite-email">
              <div class="form-group">  
                <div class="input-group">                                                   
                  <input type="email" class="form-control" name="referred-email[]" placeholder="Email" required />
                  <div class="input-group-addon">
                    <a href="javascript:addEmailForm();">
                      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                    </a>
                  </div>                  
                </div>                
              </div>                            
            </div>            
            <div class="row">
              <div class="form-group">              
                <button type="submit" class="btn btn-warning btn-block btn-lg">Send Invite</button>
              </div>
            </div>    
          </div>          
        </form>
      </div>
    </div>
  </div>
</section>

 

<?php get_footer();?>
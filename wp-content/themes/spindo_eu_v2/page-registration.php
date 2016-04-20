<?php
  /**
 * Template Name: Save to DB
*/

  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);

  $table = "lead_prize";
  $data = [];
  $data['picked_prize'] = $_POST['picked-prize'];
  $data['first_name'] = $_POST['first-name'];
  $data['last_name'] = $_POST['last-name'];
  $data['birthday'] = $_POST['birthday'];
  $data['gender'] = $_POST['gender'];
  $data['country'] = $_POST['country'];
  $data['city'] = $_POST['city'];
  $data['email'] = $_POST['email'];
  $data['contact_number'] = $_POST['contact-number'];

  global $wpdb;
  $emailPresentQuery = $wpdb->prepare("SELECT * FROM lead_prize WHERE email=%s;", $data['email']);
  $queryResult = $wpdb->query($emailPresentQuery);
  if ($queryResult == 0){
    echo "You're registered.";
    $wpdb->insert($table, $data); 
    header('Location: '.get_site_url().'/thank-you');   
  }

  get_header();
?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <div class="col-md-6 col-md-offset-4" style="font-family:'Architects Daughter';margin-top:150px;">
        <h1><?php echo "Email already exists!"; ?></h1>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

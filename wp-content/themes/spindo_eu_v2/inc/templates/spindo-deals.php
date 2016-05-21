<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" type="text/css" />  
<h1>Deals</h1>
<div class="container-fluid">
  <div class="row">
<?php
  $allDeals = get_deals();   

  foreach($allDeals as $deal){    
    echo '<div class="col-md-3">';    
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">'.$deal->deal_name.'</h3>';
    echo '</div>';
    echo '<div class="panel-body">';
    echo '<img src="'.$deal->image_url.'" width="100%">';
    echo '</div>';
    echo '<ul class="list-group">';
    echo '<li class="list-group-item" style="overflow:hidden"><b>Deal link: </b>'.$deal->deal_link.'</li>';
    echo '<li class="list-group-item" style="overflow:hidden"><b>Country Code: </b>'.$deal->country_code.'</li>';
    echo '<li class="list-group-item"><b>Description: </b>'.$deal->description.'</li>';
    echo '<li class="list-group-item"><b>End date: </b>'.$deal->end_date.'</li>';    
    echo '<li class="list-group-item"><b><a href="admin.php?page=spindo_theme_deals&action=edit&id='.$deal->id.'">Edit</a> | <a href="admin.php?page=spindo_theme_deals&action=delete&id='.$deal->id.'" onclick="return confirm(\'Are you sure?\')">Delete</a></b></li>';    
    echo '</ul>';
    echo '</div>';
    echo '</div>';
  }
?>
</div>
</div>
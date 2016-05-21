<?php
  /**
 * Template Name: Static Page
*/

get_header(); ?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content col-xs-12">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php  
require_once get_template_directory() . '/deal-section.php';


get_footer(); ?>

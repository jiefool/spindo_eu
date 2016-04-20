<?php
  /**
 * Template Name: Static Page
*/

get_header(); ?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php  get_footer(); ?>

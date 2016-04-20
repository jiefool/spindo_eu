<?php 
/**
 * Template Name: Thank You Page
*/

get_header();?>

<?php 
  $post = get_post(24); 
?>

<section>
  <div class="container-fluid">
    <div class="col-md-12 main-content">
      <?= get_post_field('post_content', $post->ID) ?>
    </div>
  </div>
</section>
<?php get_footer();?>
<?php
/* Template Name: Portfolio Listing */
?>

<?php get_header(); ?>

This is a custom template
<a href="http://localhost:8888/" class="logo2">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<?php while (have_posts()) : the_post(); ?>
<div class="" style="max-width: 300px; margin: 0 auto;">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();
<?php
/* Template Name: Portfolio Listing */
?>

<?php get_header(); ?>

<!-- This is a portfolio listing template -->

<a href="http://christineyim.com/idm250-ccy29/" class="logo2">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<?php while (have_posts()) : the_post(); ?>

<div class="portfolio-list-container">
  <h1 class="idm-page-title"><?php the_title(); ?>
  </h1>

  <div class="idm-portfolio-listing-content">

      <!-- start content -->
      <?php the_content(); ?>
      <!-- end content -->
  </div>
</div>

<?php endwhile; ?>

<?php get_footer();
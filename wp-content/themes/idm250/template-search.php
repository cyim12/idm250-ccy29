<?php
/* Template Name: Search */
?>

<?php get_header(); ?>

This is a custom template
<a href="http://localhost:8888/" class="logo2">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<?php while (have_posts()) : the_post(); ?>



<div class="idm-search-wrapper">
  <h1 class="idm-search-title"><?php the_title(); ?>
  </h1>

  <div class="idm-search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search work..." name="search">
      <button type="submit">Search</button>
    </form>
  </div>

  <div class="idm-search-content">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();?>
<?php get_header ();?>

This is index.php. All pages will fallback to this page.

<a href="http://localhost:8888/" class="logo2">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<?php while (have_posts()) : the_post(); ?>


<div class="">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <div class="">

    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->

  </div>
</div>

<?php endwhile; ?>

<?php get_footer();?>
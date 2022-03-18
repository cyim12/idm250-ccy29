<?php get_header();?>

<a href="http://christineyim.com/idm250-ccy29/" class="logo3">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<?php while (have_posts()) : the_post(); ?>
<div class="idm-single-content-container">
    <h1 class="idm-single-title"><?php the_title(); ?></h1>

    <?php the_post_thumbnail(); ?>

        <div class="idm-single-content">

            <!-- start content -->
            <?php the_content(); ?>
            <!-- end content -->

        </div>
</div>

<?php endwhile; ?>

<?php get_footer();?>
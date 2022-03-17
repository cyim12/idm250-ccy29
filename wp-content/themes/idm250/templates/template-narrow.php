<?php
/* Template Name: Narrow */
?>

<?php get_header(); ?>

<!-- This is a narrow template -->

<?php while(have_posts()) : the_post(); ?>
<div class="idm-default-content-container" style="max-width: 600px; margin: 0 auto">
    <h1 class="idm-page-title"><?php the_title(); ?></h1>

    <?php the_post_thumbnail(); ?>

    <div class="narrow-template">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
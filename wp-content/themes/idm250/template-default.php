<?php
/* Template Name: Default/General */
?>

<?php get_header(); ?>


<!-- This is a default/general template -->

<?php while(have_posts()) : the_post(); ?>
<div class="idm-default-content-container">
    <h1 class="wrapper-title"><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="idm-default-content">
        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
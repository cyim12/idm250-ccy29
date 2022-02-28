<?php get_header();?>

<?php while (have_posts()) : the_post(); ?>
<div class="idm-single-wrapper">
    <h2 class="idm-single-title"><?php the_title(); ?></h2>
    <div class="idm-single-content">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer();?>
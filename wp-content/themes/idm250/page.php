<?php get_header();?>

<?php while (have_posts()) : the_post(); ?>
<div class="page-wrapper">
    <h1 class="wrapper-title"><?php the_title(); ?></h1>

    <?php the_post_thumbnail(); ?>

    <div class="">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer();?>
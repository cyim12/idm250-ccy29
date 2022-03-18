<?php
/* Template Name: Search Da Net */

 get_header(); ?>

<a href="http://localhost:8888/" class="logo2">
            <img src="http://christineyim.com/idm250-ccy29/wp-content/uploads/2022/01/cy_logo.svg" alt="Christine Logo">
        </a>

<div class="idm-single-content-container">
<h1 class="idm-page-title">Search</h1>

<?php
 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
 ];
 $search_query = new WP_Query($args)
?>

<?php
get_template_part(
    'components/home-hero',
    null,
    [
        'heading' => 'Search results for "' . $_GET['s'] . '"',
        'body' => ''
    ]
);
?>

<div class="container search-results">
    <?php
  if ($search_query->have_posts()) {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/project-teaser');
      endwhile;
      // After looping through a separate query, this function restores the $post global to the current post in the main query.
      wp_reset_postdata();
  } else {
      // no results
      echo '<p>Sorry, there are no results</p>';
  }

?>

</div>

</div>
<?php get_footer();
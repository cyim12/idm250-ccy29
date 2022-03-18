<?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());
    // Image doesn't exist, lets add a placeholder image to force user to upload an image.
    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/600x450';
    };

    // Get project categories from this post ID
    $project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');

?>
<div class="project-teaser">
    <div>
  <img
    src="<?php echo $featured_image['src']; ?>"
    alt="<?php echo $featured_image['alt']; ?>">
</div>

    <div>
  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <?php if ($project_categories) {
    // Get total items count
    $total = count($project_categories) - 1;
    // Loop through this post's categories and spit them out
    foreach ($project_categories as $key => $category) {
        $category_link = get_term_link($category->term_id);
        echo "<span class='project-teaser__tag'><a href='$category_link'>$category->name</a></span>";
        // Add comma after every loop. Let's not add it to the last item in the loop
        if ($key != $total) {
            echo ', ';
        }
    }
}
  ?>
  <p class="teaser-description"><?php the_excerpt(); ?>
  </p>
</div>
</div>
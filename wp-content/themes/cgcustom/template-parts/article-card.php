<div class="article-card">
  <!-- Display the article image -->
  <div class="article-image">
    <?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
    <?php else: ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
    <?php endif; ?>
  </div>

  <!-- Display the article title -->
  <div class="article-title">
    <?php the_title(); ?>
  </div>

  <!-- Display the article category (season or color) -->
  <?php
    $colors = get_the_terms(get_the_ID(), 'color');
    $seasons = get_the_terms(get_the_ID(), 'season');
    $category = $colors ? $colors : ($seasons ? $seasons : null);

    if($category):
    ?>
  <div class="article-category">
    <span class="article-category-label">Category</span>
    <span class="article-category-value">:
      <?php echo $category[0]->taxonomy; ?></span>
  </div>

  <div class="article-type">
    <span class="article-type-label">Type</span>
    <span class="article-type-value">:
      <?php echo $category[0]->name; ?></span>
  </div>
  <?php endif; ?>
  <a class="btn btn-tertiary-style" href="<?php the_permalink(); ?>">Read More</a>
</div>
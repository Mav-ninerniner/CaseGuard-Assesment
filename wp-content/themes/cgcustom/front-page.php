<?php get_header();?>

<!-- Section 1 - Heading -->
<section id="heading-section">
  <div class="container">
    <!-- Heading and Text -->
    <div class="heading-text">
      <h1>Heading 1</h1>
      <p class="heading-para">Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit
        aliquam sit nullam neque
        ultrices.</p>
    </div>

    <!-- Buttons -->
    <div class="buttons">
      <button type="button" class="btn btn-primary-style">Primary Button</button>
      <button type="button" class="btn btn-secondary-style">Secondary Button</button>
    </div>
  </div>
</section>

<!-- Section 2 - Images -->
<!-- <?php get_template_part('template-parts/section', '2'); ?> -->
<section id="image-section">
  <div class="container">
    <div class="image-show">
      <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/pic1.jpg" alt="Pic1">
      <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/pic2.jpg" alt="Pic2">
    </div>
  </div>
</section>

<!-- Section 3 - Articles -->
<section id="articles-section">
  <div class="container clearfix">
    <!-- Heading -->
    <div class="article-heading">
      <h2>Articles Area</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
    </div>
    <!-- Filtering Options -->
    <!-- <div class="clearfix"> -->
    <!-- Search Bar -->
    <div class="search-bar">
      <input type="text" id="article-search" placeholder="Search articles...">
    </div>
    <div class="filtering-options">
      <!-- Colors Filter -->
      <div class="filter colors-filter">
        <p>Colors:</p>
        <?php
                $colors = get_terms(array('taxonomy' => 'color', 'hide_empty' => false));
                foreach ($colors as $color) {
                    echo '<input type="checkbox" name="color" value="' . $color->term_id . '"> ' . $color->name . '<br>';
                }
                ?>
      </div>

      <!-- Seasons Filter -->
      <div class="filter seasons-filter">
        <p>Seasons:</p>
        <?php
                $seasons = get_terms(array('taxonomy' => 'season', 'hide_empty' => false));
                foreach ($seasons as $season) {
                    echo '<input type="checkbox" name="season" value="' . $season->term_id . '"> ' . $season->name . '<br>';
                }
                ?>
      </div>
      <!-- Reset Button -->
      <button id="reset-filters">Reset</button>

    </div>

    <div class="separator">a</div>


    <!-- Articles Display -->
    <div id="articles-grid" class="row">
      <!-- Articles will be loaded here via AJAX -->
    </div>
    <!-- </div> End of clearfix -->

  </div>
</section>



<?php get_footer();?>
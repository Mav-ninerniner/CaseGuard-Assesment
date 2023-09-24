<?php get_header();?>

<!-- Section 1 - Heading -->
<section id="heading-section">
  <div class="container">
    <!-- Heading and Text -->
    <div class="heading-text">
      <h1>Heading 1</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque
        ultrices.</p>
    </div>

    <!-- Buttons -->
    <div class="buttons">
      <button type="button" class="btn btn-primary">Primary Button</button>
      <button type="button" class="btn btn-outline-primary">Secondary Button</button>
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
  <div class="container">
    <!-- Your Articles Content Here -->
    <p>Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque
      ultrices.</p>
  </div>
</section>

<?php get_footer();?>
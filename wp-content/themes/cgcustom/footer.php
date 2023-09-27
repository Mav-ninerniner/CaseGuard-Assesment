<?php wp_footer();?>
<footer>
  <div class="footer">
    <div class="row">
      <div class="col-lg-6">
        <div class="logo">
          <!-- Company Logo -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Company Logo">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="copyright-text">
          <p>Copyright © 2023 CaseGuard | All Rights Reserved</p>
        </div>
      </div>

    </div>
  </div>
</footer>


<script>
jQuery(document).ready(function($) {
  // Smooth scrolling when clicking on a link
  $('a[href*="#"]').on('click', function(e) {
    e.preventDefault();

    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 60, 'linear');
  });
});
</script>

</body>

</html>
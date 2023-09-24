<?php wp_footer();?>
<!-- <div style="width: 100%; height: 100%; background: #EFEFEF">
  <p> This is footer </p>
</div> -->
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
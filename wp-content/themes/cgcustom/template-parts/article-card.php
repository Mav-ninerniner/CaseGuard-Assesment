<div class="article-card">
  <div class="article-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <h3><?php the_title(); ?></h3>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Read More</a>
</div>
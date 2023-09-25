<?php get_header(); ?>

<section id="single-article">
  <div class="container">

    <!-- Check if there are any articles -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Article Header: title and featured image -->
    <header class="article-header">
      <h1><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="featured-image">
        <?php the_post_thumbnail('full'); ?>
      </div>
      <?php endif; ?>
    </header>

    <!-- Article Content -->
    <div class="article-content">
      <?php the_content(); ?>
    </div>

    <!-- Article Meta: Categories (based on your custom taxonomy) -->
    <footer class="article-footer">
      <span>Categories: <?php echo get_the_term_list( $post->ID, 'article_category', '', ', ', '' ); ?></span>
    </footer>

    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no articles found.' ); ?></p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
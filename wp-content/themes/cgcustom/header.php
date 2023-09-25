<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caseguard Assesment</title>


  <?php wp_head();?>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="logo">
            <!-- Company Logo -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Company Logo">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="articles-link">
            <!-- Articles Link -->
            <a class="general" href="#articles-section">Articles</a>
          </div>
        </div>

      </div>
    </div>
  </header>
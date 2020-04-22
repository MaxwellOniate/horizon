<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <h1><?php the_title(); ?></h1>
    <small><?php esc_html_e('Author: ');
            the_author(); ?></small>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <?php

  if (comments_open()) {
    comments_template();
  }

  ?>

</article>
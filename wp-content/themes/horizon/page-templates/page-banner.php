<?php
if (!$args['subtitle']) {
  $args['subtitle'] = get_field('page_banner_subtitle');
}
?>

<header class="page-banner">
  <div class="container">
    <h1 class="page-title">
      <?php

      if (!$args['title']) {
        single_post_title();
      } else {
        echo $args['title'];
      }

      ?>
    </h1>
    <span class="page-subtitle">
      <?php echo $args['subtitle']; ?>
    </span>
  </div>
</header>
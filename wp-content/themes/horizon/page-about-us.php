<?php

get_header();

$container = get_theme_mod('understrap_container_type');

pageBanner();

?>

<!-- CONTENT -->

<div class="wrapper" id="page-wrapper">

  <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

    <div class="row">

      <div class="col-lg-6">
        <main class="site-main" id="main">

          <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('loop-templates/content', 'page'); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>

          <?php endwhile; // end of the loop. 
          ?>

        </main><!-- #main -->
      </div>

      <div class="col-lg-6">
        <div class="gallery">
          <div class="gallery-top">
            <img src="<?php echo get_theme_file_uri('/img/gallery/1.jpg'); ?>" alt="Construction" class="img-fluid gallery-top-img">
          </div>

          <ul class="gallery-bottom">
            <div class="row">
              <div class="col-12">
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/1.jpg'); ?>" alt="Construction" class="img-fluid gallery-active-img" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/2.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/3.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/4.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/5.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/6.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
              </div>
              <div class="col-12">
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/7.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/8.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/9.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/10.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/11.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
                <li>
                  <img src="<?php echo get_theme_file_uri('/img/gallery/12.jpg'); ?>" alt="Construction" class="img-fluid" draggable="false">
                </li>
              </div>
            </div>
          </ul>

        </div>
      </div>


    </div>

  </div><!-- #content -->

</div><!-- #page-wrapper -->

<!-- ABOUT PAGE: BENEFITS -->

<section class="benefits">
  <div class="row no-gutters">
    <div class="d-none d-lg-block col-lg-4">
      <img src="<?php echo get_theme_file_uri('/img/services/parallax.jpg'); ?>" alt="Construction workers lifting a piece of wooden foundation." class="img-fluid benefits-side-img">
    </div>
    <div class="col-lg-8">
      <?php get_template_part('template-parts/content', 'benefits-2col'); ?>
    </div>
  </div>
</section>

<?php

// CALL TO ACTION 2

get_template_part('template-parts/content', 'c2a2');

// TRUST POINTS

get_template_part('template-parts/content', 'trust-points');

get_footer();

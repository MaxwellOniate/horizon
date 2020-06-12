<?php

get_header();

pageBanner();

?>

<!-- MAIN CONTENT -->

<section class="main-content py-5">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 mb-5 mb-lg-0">
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
  </div>
</section>

<!-- ABOUT PAGE: BENEFITS -->

<section class="benefits">
  <div class="row no-gutters">
    <div class="d-none d-lg-block col-lg-4">
      <img src="<?php echo get_theme_file_uri('/img/services/parallax.jpg'); ?>" alt="Construction workers lifting a piece of wooden foundation." class="img-fluid benefits-side-img">
    </div>
    <div class="col-lg-8">
      <?php get_template_part('page-templates/benefits2'); ?>
    </div>
  </div>
</section>

<!-- ABOUT PAGE: INFO -->

<section id="about-info" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <h3 class="mb-5">Our Leaders</h3>

        <div class="row">

          <div class="col-md-4">
            <div class="card card-min">
              <img src="<?php echo get_theme_file_uri('/img/team/2.jpg') ?>" alt="Team Member" class="img-fluid card-img-top">
              <div class="card-body">
                <h3 class="card-title">John Treehouse</h3>
                <h4 class="card-subtitle">President and CEO</h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-min">
              <img src="<?php echo get_theme_file_uri('/img/team/3.jpg') ?>" alt="Team Member" class="img-fluid card-img-top">
              <div class="card-body">
                <h3 class="card-title">Bob Driver</h3>
                <h4 class="card-subtitle">Vice President, Operations</h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-min">
              <img src="<?php echo get_theme_file_uri('/img/team/4.jpg') ?>" alt="Team Member" class="img-fluid card-img-top">
              <div class="card-body">
                <h3 class="card-title">Andy Phillips</h3>
                <h4 class="card-subtitle">Vice President, Finance</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="col-lg-5">
        <h3 class="mb-5">Clients Overview</h3>
        <p>We prize our clients more than everything else. We strive to provide quality services to all our clients on a priority basis. You are invited to join our clients list and enjoy our services.</p>

        <ul class="clients-overview">

          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/1.png'); ?>" alt="Client" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/2.png'); ?>" alt="Client" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/3.png'); ?>" alt="Client" class="img-fluid">
          </li>

          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/4.png'); ?>" alt="Client" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/5.png'); ?>" alt="Client" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/clients/6.png'); ?>" alt="Client" class="img-fluid">
          </li>

        </ul>

      </div>
    </div>
  </div>
</section>

<?php

// CALL TO ACTION 

get_template_part('page-templates/c2a');

// TRUST POINTS

get_template_part('page-templates/trust-points');


get_footer();

<?php

get_header();

pageBanner();

?>

<!-- MAIN CONTENT -->

<section id="investors" class="py-5">
  <div class="container">
    <div class="row">

      <div class="col-lg-5 mb-5 mb-lg-0">
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

      <div class="col-lg-7">

        <ul class="investor-logos">
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/1.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/2.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/3.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/4.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/5.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/6.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/7.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/8.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/9.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/10.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/11.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
          <li>
            <img src=" <?php echo get_theme_file_uri('/img/investors/12.jpg'); ?>" alt="Investor" class="img-fluid">
          </li>
        </ul>

      </div>

    </div>
  </div>
</section>



<?php

// CALL TO ACTION 2

get_template_part('template-parts/content', 'c2a2');

get_footer();

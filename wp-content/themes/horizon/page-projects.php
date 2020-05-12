<?php

get_header();

pageBanner();

?>

<!-- PROJECTS -->

<section class="projects">

  <div class="projects-container">
    <div class="row no-gutters">

      <?php get_template_part('template-parts/content', 'projects'); ?>

    </div>
  </div>

</section>


<?php

// CALL TO ACTION 2

get_template_part('template-parts/content', 'c2a2');

get_footer();

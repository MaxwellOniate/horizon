<?php

get_header();

pageBanner([
  'title' =>   'Projects',
  'subtitle' => "Take a look at what we've made."
]);

?>

<!-- PROJECTS -->

<section class="projects">
  <div class="projects-container">
    <div class="row no-gutters">

      <?php

      while (have_posts()) {
        the_post();
        get_template_part('loop-templates/content', 'project');
      }

      ?>

    </div>
  </div>


</section>

<div class="bg-f5f5f5">
  <div class="container">
    <?php understrap_pagination(); ?>
  </div>
</div>


<?php

// CALL TO ACTION

get_template_part('page-templates/c2a');

get_footer();

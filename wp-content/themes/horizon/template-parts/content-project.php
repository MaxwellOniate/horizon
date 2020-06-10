<div class="col-sm-6 col-md-4 col-lg-3">
  <div class="project">
    <div class="card card-min">

      <a href="<?php the_permalink(); ?>">
        <div class="project-img">
          <?php the_post_thumbnail(); ?>
          <div class="project-img-overlay">
            <i class="fa fa-search"></i>
          </div>
        </div>
      </a>

      <div class="card-body">
        <h3 class="card-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
        <span class="project-location"><?php the_field('location'); ?></span>
      </div>

    </div>
  </div>
</div>
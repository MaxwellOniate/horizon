<div class="entry-meta">

  <span><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?></span>

  <span>
    <i class="fa fa-user"></i>
    <?php the_author_posts_link(); ?>
  </span>

  <span><i class="fa fa-folder-open"></i> <?php the_category(", "); ?></span>

  <span>
    <a href="<?php echo esc_url(get_comments_link()); ?>">
      <i class="fa fa-comment"></i>
      <?php echo get_comments_number(); ?>
    </a>
  </span>

</div>
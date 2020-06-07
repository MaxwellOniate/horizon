<?php get_header(); ?>

<!-- SHOWCASE -->

<section id="showcase" style="background-image:url('<?php echo get_theme_file_uri('/img/slider/2.jpg'); ?>')">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h1>Welcome to Horizon</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum repellendus dolorum maxime nisi soluta iusto dicta laudantium nostrum voluptas alias.</p>
      </div>
    </div>

  </div>
</section>

<!-- CALL TO ACTION -->

<?php get_template_part('template-parts/content', 'c2a'); ?>

<!-- SERVICES -->

<section id="services" class="py-5">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="card card-min">
          <img src="<?php echo get_theme_file_uri('/img/services/1.jpg'); ?>" alt="Construction" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Skilled Professionals</h3>
            <h4 class="card-subtitle">
              Your Property in Good Hands.
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-min">
          <img src="<?php echo get_theme_file_uri('/img/services/2.jpg'); ?>" alt="Construction" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Effective Planning</h3>
            <h4 class="card-subtitle">
              Organized Construction.
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-min">
          <img src="<?php echo get_theme_file_uri('/img/services/3.jpg'); ?>" alt="Construction" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Risk Management</h3>
            <h4 class="card-subtitle">
              We have got you Covered.
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIALS -->

<section id="testimonials" style="background-image:url('<?php echo get_theme_file_uri('/img/slider/1.jpg'); ?>')">
  <div class="overlay">
    <div class="container center testimonial">
      <img src="<?php echo get_theme_file_uri('/img/testimonials/6.jpg') ?>" alt="John Doe" class="img-fluid rounded-circle testimonial-img">
      <p class="testimonial-body">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, blanditiis!"</p>
      <p class="testimonial-author">John Doe</p>
    </div>
  </div>
</section>

<!-- BENEFITS -->

<?php get_template_part('template-parts/content', 'benefits'); ?>

<!-- PROJECTS -->

<section class="projects">

  <h2 class="projects-heading">Featured Projects</h2>

  <div class="projects-container">
    <div class="row no-gutters">

      <?php get_template_part('template-parts/content', 'projects'); ?>

    </div>
  </div>

</section>

<!-- CALL TO ACTION 2 -->

<?php get_template_part('template-parts/content', 'c2a2'); ?>

<!-- INFO -->

<section class="info py-5">
  <div class="container">
    <div class="row">

      <div class="col-md-8">

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#why-us" data-toggle="tab" class="nav-link active">
              Why Us?
            </a>
          </li>
          <li class="nav-item">
            <a href="#work-ethic" data-toggle="tab" class="nav-link">
              Work Ethic
            </a>
          </li>
          <li class="nav-item">
            <a href="#team" data-toggle="tab" class="nav-link">
              Team
            </a>
          </li>

        </ul>

        <div class="tab-content">

          <div class="tab-pane fade" id="why-us" role="tabpanel">
            <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
          </div>

          <div class="tab-pane fade show active" id="work-ethic" role="tabpanel">
            <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
          </div>

          <div class="tab-pane fade" id="team" role="tabpanel">
            <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
          </div>

        </div>

      </div>

      <div class="col-md-4">
        <form class="info-form custom-form">
          <h3>Quick Quote Form</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message"></textarea>
          </div>
          <button class="main-btn">Send Message</button>
        </form>
      </div>

    </div>

  </div>
</section>

<!-- DIVIDER -->
<div class="container">
  <hr>
</div>

<!-- RECENT BLOGS -->

<section id="recent-blogs" class="py-5">
  <div class="container">
    <h2 class="mb-5">Recent Blogs</h2>
    <div class="row">

      <div class="col-md-4">
        <div class="card card-min">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/img/blog/5.jpg'); ?>" alt="Construction" class="card-img-top">
          </a>
          <div class="card-body">
            <h3 class="card-title">
              <a href="#">
                Upcoming Projects in Australia
              </a>
            </h3>
            <p class="card-meta">
              February 13th 2012
            </p>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-min">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/img/blog/4.jpg'); ?>" alt="Construction" class="card-img-top">
          </a>
          <div class="card-body">
            <h3 class="card-title">
              <a href="#">
                Global Excellence Construction Award
              </a>
            </h3>
            <p class="card-meta">
              February 24th 2014
            </p>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-min">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/img/blog/3.jpg'); ?>" alt="Construction" class="card-img-top">
          </a>
          <div class="card-body">
            <h3 class="card-title">
              <a href="#">
                Expensive Real Estate
              </a>
            </h3>
            <p class="card-meta">
              May 5th 2014
            </p>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sapiente pariatur recusandae fugit perferendis itaque impedit a quis eius at.</p>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<!-- DIVIDER -->
<div class="container">
  <hr>
</div>

<!-- TRUST POINTS -->

<?php get_template_part('template-parts/content', 'trust-points'); ?>


<?php get_footer(); ?>
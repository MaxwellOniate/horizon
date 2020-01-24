<?php

$page = 'Home';

?>

<?php require('inc/header.php'); ?>

<section id="home" class="center mb-3">
  <div class="overlay"></div>
  <div class="container">

    <div class="search-form">

      <h3 class="search-tab">Search Properties</h3>

      <form method="POST" action="">
        <div class="row">


          <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" name="location">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="form-group">
              <label for="property-type">Property Type</label>
              <input type="text" class="form-control" name="property-type">
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-6 mb-4">
            <div class="form-group">
              <label for="beds">Beds</label>
              <input type="text" class="form-control" name="beds">
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-6 mb-4">
            <div class="form-group">
              <label for="baths">Baths</label>
              <input type="text" class="form-control" name="baths">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
              <label for="price-range">Price Range</label>
              <input type="range" class="form-control-range" name="price-range">
            </div>
          </div>

          <div class="col-lg-4 offset-lg-1 col-md-6 col-12">
            <div class="form-group">
              <label for="property-area">Property Area</label>
              <input type="range" class="form-control-range" name="property-area">
            </div>
          </div>

          <div class="offset-lg-1 col-lg-2 col-md-12">
            <div class="form-group">
              <label for="search"></label>
              <input type="submit" class="form-control btn btn-success" name="search" value="Search">
            </div>
          </div>

        </div>
      </form>

    </div>

  </div>
</section>

<section id="features" class="py-3">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-my-house"></i>
          <div class="media-body">
            <h3>Hassel Free</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-my-house"></i>
          <div class="media-body">
            <h3>Fine Construction</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-garage"></i>
          <div class="media-body">
            <h3>Free Utilities</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-rent"></i>
          <div class="media-body">
            <h3>Flexible Rentals</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-credit"></i>
          <div class="media-body">
            <h3>Easy Financing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="media">
          <i class="icon-realestate-doc"></i>
          <div class="media-body">
            <h3>Solid Paperwork</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid ea expedita reprehenderit vel corrupti.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="divider my-5"></div>

    <div class="featured-properties">
      <h2>Featured Properties</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/1.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/2.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/3.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/4.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/5.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <div class="card">
            <img src="assets/img/Properties/6.jpg" alt="3 Bedroom Villa" class="card-img-top">
            <div class="card-body">

              <a href="" class="card-title">3 Bedroom Villa</a>
              <p>Seminyak Area</p>

              <ul class="list-group list-group-horizontal">
                <li class="list-group-item">2 Bed</li>
                <li class="list-group-item">2 Bath</li>
                <li class="list-group-item">150 sqm</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="promo py-3">
  <div class="container">
    <div class="promo-content">
      <p>Special Offers on Villa Long Term Rentals & Lease Agreements</p>
      <a href="contact.php" class="btn">Contact Now</a>
    </div>
  </div>
</div>

<section id="locations" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 my-3">
        <a href="">
          <div class="location-img california">
            <div class="overlay center">
              <p>California <span class="d-block">23 Properties</span></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-5 my-3">
        <a href="">
          <div class="location-img new-york">
            <div class="overlay center">
              <p>New York <span class="d-block">12 Properties</span></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 my-3">
        <a href="">
          <div class="location-img san-francisco">
            <div class="overlay center">
              <p>San Francisco <span class="d-block">8 Properties</span></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 my-3">
        <a href="">
          <div class="location-img texas">
            <div class="overlay center">
              <p>Texas <span class="d-block">31 Properties</span></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 my-3">
        <a href="">
          <div class="location-img new-orleans">
            <div class="overlay center">
              <p>New Orleans <span class="d-block">19 Properties</span></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="get-quote" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="home-headquarters">

        </div>
      </div>
      <div class="col-md-6">
        <form action="">
          <div class="form-group">
            <input type="text" name="full-name" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number (+1-555-2221)">
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" placeholder="What are you Looking for? (Ex: Villa on the Beach)"></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
      </div>

    </div>

  </div>
</section>


<?php require('inc/footer.php'); ?>
<?php include "includes/header.php" ?>
<!-- Navigation-->
<?php include "includes/nav.php" ?>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/biz.jpeg" class="d-block w-100" alt="...">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Business Consultant</h1>
          <p>Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/mast.jpeg" class="d-block w-100" alt="...">

      <div class="container">
        <div class="carousel-caption">
          <h1>Mast Installation</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/mast.jpeg" class="d-block w-100" alt="...">

      <div class="container">
        <div class="carousel-caption">
          <h1>General Mechandize</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/int.jpeg" class="d-block w-100" alt="...">

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Internet Facility and Installations</h1>
          <p>We are in the business of internet</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 class="">Our Services</h1>

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/img/3.jpg');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Business Development and Planning</h2>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#geo-fill" />
            </svg>
            <small>Earth</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#calendar3" />
            </svg>
            <small>3d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/img/2.jpg');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Mast Installation</h2>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#geo-fill" />
            </svg>
            <small>Pakistan</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#calendar3" />
            </svg>
            <small>4d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/img/1.jpg');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
          </li>
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#geo-fill" />
            </svg>
            <small>California</small>
          </li>
          <li class="d-flex align-items-center">
            <svg class="bi me-2" width="1em" height="1em">
              <use xlink:href="#calendar3" />
            </svg>
            <small>5d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<?php include "includes/footer.php" ?>
@extends('frontend.layouts.app')

@section('content')
<main class="content-wrapper">

  <!-- Place details section -->
  <section class="container pt-4 pb-5 mb-xxl-3">

    <!-- Breadcrumb -->
    <nav class="pb-2" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home-city-guide.html">Home</a></li>
        <li class="breadcrumb-item"><a href="listings-side-filters-city-guide.html">Restaurants</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sbarro Restaurant</li>
      </ol>
    </nav>

    <!-- Title + Share button -->
    <div class="d-flex align-items-center justify-content-between gap-3 position-relative z-2 mb-3 mb-lg-4">
      <div class="d-flex align-items-center w-100 gap-3">
        <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 56px">
          <img src={{asset("assets/img/listings/city-guide/single/logo-light.png")}} class="d-none-dark" alt="Logo">
          <img src={{asset("assets/img/listings/city-guide/single/logo-dark.png")}} class="d-none d-block-dark" alt="Logo">
        </div>
        <h1 class="mb-0">Sbarro Restaurant</h1>
      </div>
      <div class="d-flex gap-2">
        <div class="dropdown" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Share">
          <button type="button" class="btn btn-icon btn-ghost btn-secondary animate-scale rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Share">
            <i class="fi-share-2 animate-target fs-base"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 9.5rem">
            <li>
              <a class="dropdown-item rounded-pill" href="#!">
                <i class="fi-facebook fs-base me-2"></i>
                Facebook
              </a>
            </li>
            <li>
              <a class="dropdown-item rounded-pill" href="#!">
                <i class="fi-instagram fs-base me-2"></i>
                Instagram
              </a>
            </li>
            <li>
              <a class="dropdown-item rounded-pill" href="#">
                <i class="fi-linkedin fs-base me-2"></i>
                LinkedIn
              </a>
            </li>
          </ul>
        </div>
        <button type="button" class="btn btn-icon btn-secondary animate-pulse rounded-circle" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist" aria-label="Wishlist">
          <i class="fi-heart animate-target fs-base"></i>
        </button>
      </div>
    </div>

    <!-- Place meta -->
    <div class="d-flex flex-wrap align-items-center gap-2 ms-n2 pb-1 mb-3">
      <div class="d-flex align-items-center gap-1 fs-sm ms-2">
        <i class="fi-star-filled text-warning"></i>
        <span class="fs-sm text-secondary-emphasis">4.8</span>
        <span class="fs-xs text-body-secondary align-self-end">(127)</span>
      </div>
      <div class="d-flex align-items-center gap-1 fs-sm ms-2">
        <i class="fi-credit-card"></i>
        $$
      </div>
      <span class="badge text-bg-success d-inline-flex align-items-center ms-2">
        Vegan Options
        <i class="fi-leaf ms-1"></i>
      </span>
      <span class="badge text-bg-info d-inline-flex align-items-center">
        Verified Hires
        <i class="fi-shield ms-1"></i>
      </span>
    </div>

    <!-- Place contacts -->
    <ul class="nav gap-2 mb-4">
      <li class="nav-item">
        <a class="nav-link position-relative text-body fw-normal p-0" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6497646883918!2d2.162960877113986!3d41.3816934713005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f5699e318d%3A0xbcc7ea0e7c2eca52!2sCarrer%20de%20la%20Lluna%2C%2028%2C%20Ciutat%20Vella%2C%2008001%20Barcelona%2C%20Spain!5e0!3m2!1sen!2suk!4v1726777347955!5m2!1sen!2suk" data-glightbox="width: 100vw; height: 100vh" data-gallery="map1">
          <i class="fi-map-pin fs-base me-1"></i>
          <span class="hover-effect-underline stretched-link">Carrer de la Lluna 28, Barcelona, Spain</span>
        </a>
      </li>
      <li class="d-flex align-items-center mx-1"><i class="fi-bullet"></i></li>
      <li class="nav-item">
        <a class="nav-link position-relative text-body fw-normal p-0" href="tel:+34931234567">
          <i class="fi-phone fs-base me-1"></i>
          <span class="hover-effect-underline stretched-link">+34&nbsp;931&nbsp;234&nbsp;567</span>
        </a>
      </li>
      <li class="d-flex align-items-center mx-1"><i class="fi-bullet"></i></li>
      <li class="nav-item">
        <a class="nav-link position-relative text-body fw-normal p-0" href="#!">
          <i class="fi-globe fs-base me-1"></i>
          <span class="hover-effect-underline stretched-link">Website</span>
        </a>
      </li>
      <li class="d-flex align-items-center mx-1"><i class="fi-bullet"></i></li>
      <li class="nav-item">
        <span class="nav-link position-relative text-body fw-normal pe-none p-0">
          <i class="fi-clock fs-base me-1"></i>
          <span><span class="fw-semibold">Open now</span> 07:00 AM - 10:30 AM, 12:00 PM - 11:00 PM</span>
        </span>
      </li>
    </ul>

    <!-- Image gallery -->
    <div class="row row-cols-1 row-cols-md-2 g-3 g-lg-4 pb-sm-2 mb-5">
      <div class="col">
        <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/listings/city-guide/single/01.jpg" data-glightbox="" data-gallery="image-gallery">
          <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(455 / 636 * 100%)">
            <img src={{asset("assets/img/listings/city-guide/single/01.jpg")}} alt="Image">
          </div>
          <div class="btn btn-sm btn-light pe-none position-absolute start-0 bottom-0 z-2 mb-3 ms-3">
            <i class="fi-camera fs-sm me-1 ms-n1"></i>
            20
          </div>
        </a>
      </div>
      <div class="col">
        <div class="row row-cols-2 g-3 g-lg-4">
          <div class="col">
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/listings/city-guide/single/02.jpg" data-glightbox="" data-gallery="image-gallery">
              <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(448 / 636 * 100%)">
                <img src={{asset("assets/img/listings/city-guide/single/th02.jpg")}} alt="Image">
              </div>
            </a>
          </div>
          <div class="col">
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/listings/city-guide/single/03.jpg" data-glightbox="" data-gallery="image-gallery">
              <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(448 / 636 * 100%)">
                <img src={{asset("assets/img/listings/city-guide/single/th03.jpg")}} alt="Image">
              </div>
            </a>
          </div>
          <div class="col">
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/listings/city-guide/single/04.jpg" data-glightbox="" data-gallery="image-gallery">
              <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(448 / 636 * 100%)">
                <img src={{asset("assets/img/listings/city-guide/single/th04.jpg")}} alt="Image">
              </div>
            </a>
          </div>
          <div class="col">
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/listings/city-guide/single/05.jpg" data-glightbox="" data-gallery="image-gallery">
              <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(448 / 636 * 100%)">
                <img src={{asset("assets/img/listings/city-guide/single/th05.jpg")}} alt="Image">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Overall info + Map -->
    <div class="row">
      <div class="col-md-7 pb-2 pb-md-0 mb-4 mb-md-0">
        <h2 class="h4">Overall info</h2>
        <ul class="list-inline flex-wrap gap-2 fs-sm ms-n3 mb-3">
          <li class="d-flex align-items-center ms-3">
            <i class="fi-parking fs-base me-1"></i>
            Free parking
          </li>
          <li class="d-flex align-items-center ms-3">
            <i class="fi-no-smoking fs-base me-1"></i>
            Non-smoking rooms
          </li>
          <li class="d-flex align-items-center ms-3">
            <i class="fi-paw fs-base me-1"></i>
            Pet-friendly
          </li>
          <li class="d-flex align-items-center ms-3">
            <i class="fi-wine fs-base me-1"></i>
            Bar
          </li>
        </ul>
        <p class="fs-sm">Sbarro Restaurant offers a delectable fusion of flavors for both meat lovers and vegans alike. Our diverse menu features succulent meat dishes and tantalizing vegan creations, ensuring a delightful dining experience for every palate. Savor the best of both worlds in a welcoming ambiance that celebrates the joy of shared meals and culinary diversity.</p>
        <p class="fs-sm">At Sbarro, we pride ourselves on using only the freshest ingredients, sourced locally whenever possible, to craft our mouth-watering dishes. From hearty pasta and pizza options to vibrant salads and creative vegan bowls, there's something for everyone to enjoy. Each meal is thoughtfully prepared by our talented chefs, bringing bold flavors and authentic tastes to your table.</p>
        <p class="fs-sm mb-0">Whether you're stopping in for a quick lunch or enjoying a leisurely dinner with friends and family, Sbarro offers an inviting atmosphere perfect for any occasion. Our friendly staff is dedicated to providing exceptional service, ensuring that every visit is a memorable one. Come experience the perfect blend of tradition and innovation at Sbarro Restaurant, where every bite is a celebration of good food and great company.</p>
      </div>
      <div class="col-md-5 col-xl-4 offset-xl-1">
        <div class="ps-md-4 ps-lg-5 ps-xl-0">
          <div class="position-relative rounded overflow-hidden" style="max-width: 416px">
            <svg class="position-absolute top-50 start-50 translate-middle z-1 text-primary mt-n4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M37.572 12.725a15 15 0 0 0-11.867-8.139c-1.132-.114-2.272-.114-3.404 0-2.502.253-4.9 1.131-6.973 2.553s-3.757 3.342-4.895 5.585a16.21 16.21 0 0 0 2.222 17.84l10.189 12.388a1.5 1.5 0 0 0 1.159.547 1.5 1.5 0 0 0 1.159-.547L35.35 30.565a16.21 16.21 0 0 0 2.221-17.84zM24.002 25.5a6 6 0 0 1-5.543-3.704 6 6 0 0 1 1.301-6.539 6 6 0 0 1 6.539-1.301 6 6 0 0 1 3.704 5.543 6.01 6.01 0 0 1-1.759 4.241c-1.125 1.125-2.65 1.758-4.241 1.759z"></path></svg>
            <div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-end w-100 h-100 z-1 p-4">
              <a class="btn btn-primary stretched-link rounded-pill" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6497646883918!2d2.162960877113986!3d41.3816934713005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f5699e318d%3A0xbcc7ea0e7c2eca52!2sCarrer%20de%20la%20Lluna%2C%2028%2C%20Ciutat%20Vella%2C%2008001%20Barcelona%2C%20Spain!5e0!3m2!1sen!2suk!4v1726777347955!5m2!1sen!2suk" data-glightbox="width: 100vw; height: 100vh" data-gallery="map2">Get directions</a>
            </div>
            <div class="ratio bg-body-tertiary" style="--fn-aspect-ratio: calc(369 / 416 * 100%)">
              <img src={{asset("assets/img/listings/city-guide/single/map-light.jpg")}} class="d-none-dark" alt="Map">
              <img src={{asset("assets/img/listings/city-guide/single/map-dark.jpg")}} class="d-none d-block-dark" alt="Map">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Reviews + Places nearby -->
  <section class="container py-2 py-sm-3 py-md-4 py-lg-5 my-xxl-3">
    <div class="row pb-5">

      <!-- Reviews -->
      <div class="col-md-7 mb-5 mb-md-0">
        <div class="d-flex align-items-center justify-content-between gap-4 mb-4">
          <h2 class="h4 mb-0">Reviews</h2>
          <div class="d-flex align-items-center gap-1">
            <i class="fi-star-filled fs-xl text-warning"></i>
            <div class="h6 mb-0">4.8</div>
            <div class="fs-sm text-body-secondary">(127)</div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-4 mb-3">
          <div class="overflow-x-auto pb-3">
            <ul class="nav nav-pills flex-nowrap gap-2">
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap active" aria-current="page" href="#">All</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#">Only positive (123)</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#">Only negative (4)</a>
              </li>
            </ul>
          </div>
          <button type="button" class="btn btn-outline-primary rounded-pill mb-3" data-bs-toggle="modal" data-bs-target="#reviewForm">
            <i class="fi-edit-3 fs-base ms-n1 me-2"></i>
            Add review
          </button>
        </div>
        <div class="vstack gap-4">

          <!-- Rreview -->
          <div class="vstack gap-2 mb-sm-2">
            <div class="d-flex align-items-center gap-3 mb-1">
              <h6 class="mb-0">Randy W.</h6>
              <span class="fs-xs text-body-secondary">November 19, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm mb-1">
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
            </div>
            <p class="fs-sm mb-1">Sbarro is my go-to spot for incredible pizza! The crust is always perfectly crispy, and the toppings are fresh and flavorful. I love that they have options for both meat lovers and vegans, so there's something for everyone in our group. Highly recommend!</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                6
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                0
              </button>
            </div>
          </div>

          <!-- Rreview -->
          <div class="vstack gap-2 mb-sm-2">
            <div class="d-flex align-items-center gap-3 mb-1">
              <h6 class="mb-0">Lora Palmer</h6>
              <span class="fs-xs text-body-secondary">November 10, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm mb-1">
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
            </div>
            <p class="fs-sm mb-1">Absolutely fantastic experience at Sbarro! The vegan dishes were a pleasant surprise - so creative and delicious. The staff was welcoming, and the ambiance made for a perfect night out. Can't wait to return!</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                13
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                2
              </button>
            </div>
          </div>

          <!-- Rreview -->
          <div class="vstack gap-2 mb-sm-2">
            <div class="d-flex align-items-center gap-3 mb-1">
              <h6 class="mb-0">Melissa Smith</h6>
              <span class="fs-xs text-body-secondary">November 5, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm mb-1">
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
            </div>
            <p class="fs-sm mb-1">Sbarro never disappoints! Their pasta is rich and flavorful, and the pizza is out of this world. The service is fast and friendly, making it a great spot for both casual lunches and special dinners. Five stars all the way!</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                8
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                0
              </button>
            </div>
          </div>

          <!-- Rreview -->
          <div class="vstack gap-2 mb-sm-2">
            <div class="d-flex align-items-center gap-3 mb-1">
              <h6 class="mb-0">Alice Cooper</h6>
              <span class="fs-xs text-body-secondary">October 23, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm mb-1">
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
            </div>
            <p class="fs-sm mb-1">Had an amazing dinner at Sbarro! The portions are generous, and the quality is top-notch. The variety on the menu is great, and I loved trying something new. Their vegan options are some of the best I've had in town.</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                27
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                3
              </button>
            </div>
          </div>

          <!-- Rreview -->
          <div class="vstack gap-2 mb-sm-2">
            <div class="d-flex align-items-center gap-3 mb-1">
              <h6 class="mb-0">Natalia D.</h6>
              <span class="fs-xs text-body-secondary">October 7, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm mb-1">
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star-filled text-warning"></i>
              <i class="fi-star text-warning"></i>
            </div>
            <p class="fs-sm mb-1">Sbarro was a great choice for dinner. The food was delicious, especially the pizza, but the service was a bit slow. That said, the staff was friendly, and the atmosphere was nice, so it didn't ruin the experience. Overall, I'd definitely come back.</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                15
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                0
              </button>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <nav class="pt-4 mt-1 mt-sm-0" aria-label="Reviews pagination">
          <ul class="pagination">
            <li class="page-item active" aria-current="page">
              <span class="page-link rounded-pill">
                <span style="margin: 0 1px">1</span>
                <span class="visually-hidden">(current)</span>
              </span>
            </li>
            <li class="page-item">
              <a class="page-link rounded-pill" href="#!">2</a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-pill" href="#!">3</a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-pill" href="#!">4</a>
            </li>
            <li class="page-item">
              <span class="page-link pe-none">...</span>
            </li>
            <li class="page-item">
              <a class="page-link rounded-pill" href="#!">26</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Sticky sidebar with places nearby -->
      <aside class="col-md-5 col-xl-4 offset-xl-1">
        <div class="d-none d-md-block" style="margin-top: -110px"></div>
        <div class="position-sticky top-0">
          <div class="d-none d-md-block d-lg-none" style="height: 100px"></div>
          <div class="d-none d-lg-block" style="height: 110px"></div>
          <div class="ps-md-4 ps-lg-5 ps-xl-0">
            <h3 class="h5 mb-sm-4">Top places nearby</h3>
            <div class="vstack gap-4">

              <!-- Listing -->
              <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                  <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                  <img src={{asset("assets/img/home/city-guide/places/01.jpg")}} class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                </div>
                <div class="min-w-0 pt-1 ps-3">
                  <h3 class="h6 mb-1">
                    <a class="hover-effect-underline stretched-link" href="#!">Sagrada Familia</a>
                  </h3>
                  <div class="d-flex align-items-center gap-1 mb-2">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.8</span>
                    <span class="fs-xs text-body-secondary align-self-end">(12694)</span>
                  </div>
                  <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                    <li class="d-flex align-items-center gap-1 me-2">
                      <i class="fi-credit-card"></i>
                      $30
                    </li>
                    <li class="d-flex align-items-center gap-1 min-w-0">
                      <i class="fi-map-pin"></i>
                      <span class="text-truncate">0.5 km from center</span>
                    </li>
                  </ul>
                </div>
              </article>

              <!-- Listing -->
              <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                  <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                  <img src={{asset("assets/img/home/city-guide/places/02.jpg")}} class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                </div>
                <div class="min-w-0 pt-1 ps-3">
                  <h3 class="h6 mb-1">
                    <a class="hover-effect-underline stretched-link" href="#!">Park Güell</a>
                  </h3>
                  <div class="d-flex align-items-center gap-1 mb-2">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.9</span>
                    <span class="fs-xs text-body-secondary align-self-end">(9328)</span>
                  </div>
                  <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                    <li class="d-flex align-items-center gap-1 me-2">
                      <i class="fi-credit-card"></i>
                      $15
                    </li>
                    <li class="d-flex align-items-center gap-1 min-w-0">
                      <i class="fi-map-pin"></i>
                      <span class="text-truncate">0.7 km from center</span>
                    </li>
                  </ul>
                </div>
              </article>

              <!-- Listing -->
              <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                  <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                  <img src={{asset("assets/img/home/city-guide/places/03.jpg")}} class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                </div>
                <div class="min-w-0 pt-1 ps-3">
                  <h3 class="h6 mb-1">
                    <a class="hover-effect-underline stretched-link" href="#!">Camp Nou Tour</a>
                  </h3>
                  <div class="d-flex align-items-center gap-1 mb-2">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.7</span>
                    <span class="fs-xs text-body-secondary align-self-end">(6149)</span>
                  </div>
                  <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                    <li class="d-flex align-items-center gap-1 me-2">
                      <i class="fi-credit-card"></i>
                      $40
                    </li>
                    <li class="d-flex align-items-center gap-1 min-w-0">
                      <i class="fi-map-pin"></i>
                      <span class="text-truncate">5.2 km from center</span>
                    </li>
                  </ul>
                </div>
              </article>

              <!-- Listing -->
              <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                  <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                  <img src={{asset("assets/img/home/city-guide/places/04.jpg")}} class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                </div>
                <div class="min-w-0 pt-1 ps-3">
                  <h3 class="h6 mb-1">
                    <a class="hover-effect-underline stretched-link" href="#!">Barcelona National Zoo</a>
                  </h3>
                  <div class="d-flex align-items-center gap-1 mb-2">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.6</span>
                    <span class="fs-xs text-body-secondary align-self-end">(7523)</span>
                  </div>
                  <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                    <li class="d-flex align-items-center gap-1 me-2">
                      <i class="fi-credit-card"></i>
                      $20
                    </li>
                    <li class="d-flex align-items-center gap-1 min-w-0">
                      <i class="fi-map-pin"></i>
                      <span class="text-truncate">3.2 km from center</span>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </section>
</main>
@endsection

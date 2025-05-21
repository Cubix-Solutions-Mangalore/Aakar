@extends('frontend.layouts.app')

@section('content')
<main class="content-wrapper">

    <!-- Place details section -->
    <section class="container pt-4 pb-5 mb-xxl-3">

        <!-- Breadcrumb -->
        <nav class="pb-2" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-city-guide.html">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('destination') }}">Destinations</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $place->name }}</li>
            </ol>
        </nav>

        <!-- Title + Share button -->
        <div class="d-flex align-items-center justify-content-between gap-3 position-relative z-2 mb-3 mb-lg-4">
            <div class="d-flex align-items-center w-100 gap-3">
                <h1 class="mb-0">{{ $place->name }}</h1>
            </div>
            <div class="d-flex gap-2">
                <div class="dropdown" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Share">
                    <button type="button" class="btn btn-icon btn-ghost btn-secondary animate-scale rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Share">
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
                <button type="button" class="btn btn-icon btn-secondary animate-pulse rounded-circle"
                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist" aria-label="Wishlist">
                    <i class="fi-heart animate-target fs-base"></i>
                </button>
            </div>
        </div>

        <!-- Place meta -->
        <div class="d-flex flex-wrap align-items-center gap-2 ms-n2 pb-1 mb-3">
            <div class="d-flex align-items-center gap-1 fs-sm ms-2">

                <span class="fs-sm text-secondary-emphasis"> <b>Country:</b> {{ $place->country }}</span>

            </div>
            <div class="d-flex align-items-center gap-1 fs-sm ms-2">
                <b>City:</b> {{ $place->city }}
            </div>
        </div>

        <!-- Place contacts -->
        <ul class="nav gap-2 mb-4">
            <li class="nav-item">
                <a class="nav-link position-relative text-body fw-normal p-0" href="{{ $place->gmap }}"
                    data-glightbox="width: 100vw; height: 100vh" data-gallery="map1">
                    <i class="fi-map-pin fs-base me-1"></i>
                    <span class="hover-effect-underline stretched-link">{{ $place->location }}</span>
                </a>
            </li>
        </ul>

        <!-- Image gallery -->
        <div class="row row-cols-1 row-cols-md-2 g-3 g-lg-4 pb-sm-2 mb-5">
            <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                    href="assets/img/listings/city-guide/single/01.jpg" data-glightbox="" data-gallery="image-gallery">
                    <i
                        class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <span
                        class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <div class="ratio hover-effect-target bg-body-tertiary rounded"
                        style="--fn-aspect-ratio: calc(455 / 636 * 100%)">
                        <img src={{ Storage::url($place->images[0])}} alt="Image">
                    </div>
                    <div class="btn btn-sm btn-light pe-none position-absolute start-0 bottom-0 z-2 mb-3 ms-3">

                    </div>
                </a>
            </div>
            <div class="col">
                <div class="row row-cols-2 g-3 g-lg-4">
                    @foreach ($place->images as $item)
                    <div class="col">
                        <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                            href="{{ asset('assets/img/listings/city-guide/single/02.jpg') }}" data-glightbox=""
                            data-gallery="image-gallery">
                            <i
                                class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                            <span
                                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                            <div class="ratio hover-effect-target bg-body-tertiary rounded"
                                style="--fn-aspect-ratio: calc(448 / 636 * 100%)">
                                <img src={{Storage::url($item)}} alt="Image">
                            </div>
                        </a>
                    </div>
                    @endforeach
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
                <p class="fs-sm">{{$place->description}}</p>
            </div>
            <div class="col-md-5 col-xl-4 offset-xl-1">
                <div class="ps-md-4 ps-lg-5 ps-xl-0">
                    <div class="position-relative rounded overflow-hidden" style="max-width: 416px">
                        <svg class="position-absolute top-50 start-50 translate-middle z-1 text-primary mt-n4"
                            xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor">
                            <path
                                d="M37.572 12.725a15 15 0 0 0-11.867-8.139c-1.132-.114-2.272-.114-3.404 0-2.502.253-4.9 1.131-6.973 2.553s-3.757 3.342-4.895 5.585a16.21 16.21 0 0 0 2.222 17.84l10.189 12.388a1.5 1.5 0 0 0 1.159.547 1.5 1.5 0 0 0 1.159-.547L35.35 30.565a16.21 16.21 0 0 0 2.221-17.84zM24.002 25.5a6 6 0 0 1-5.543-3.704 6 6 0 0 1 1.301-6.539 6 6 0 0 1 6.539-1.301 6 6 0 0 1 3.704 5.543 6.01 6.01 0 0 1-1.759 4.241c-1.125 1.125-2.65 1.758-4.241 1.759z">
                            </path>
                        </svg>
                        <div
                            class="position-absolute top-0 start-0 d-flex justify-content-center align-items-end w-100 h-100 z-1 p-4">
                            <a class="btn btn-primary stretched-link rounded-pill"
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127621.20462155985!2d103.50105197669689!3d1.6506832938242935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da78497761ac9d%3A0x5cdcaa3b4dcc03ed!2sKulai%2C%20Johor%2C%20Malaysia!5e0!3m2!1sen!2sin!4v1747827772645!5m2!1sen!2sin"
                                data-glightbox="width: 100vw; height: 100vh" data-gallery="map2">Get directions</a>
                        </div>
                        <div class="ratio bg-body-tertiary" style="--fn-aspect-ratio: calc(369 / 416 * 100%)">
                            <img src={{asset("assets/img/listings/city-guide/single/map-light.jpg")}}
                                class="d-none-dark" alt="Map">
                            <img src={{asset("assets/img/listings/city-guide/single/map-dark.jpg")}}
                                class="d-none d-block-dark" alt="Map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
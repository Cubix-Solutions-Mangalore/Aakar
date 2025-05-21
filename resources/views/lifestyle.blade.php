@extends('frontend.layouts.app')

@section('content')
    <!-- Customizer offcanvas -->
    <div class="offcanvas offcanvas-end" id="customizer" tabindex="-1">
        <div class="offcanvas-header border-bottom">
            <h4 class="h5 offcanvas-title">Customize theme</h4>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <!-- Customizer settings -->
            <div class="customizer-collapse collapse show" id="customizerSettings">

                <!-- Colors -->
                <div class="pb-4 mb-2">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fi-swatches text-body-tertiary fs-5 me-2"></i>
                        <h5 class="fs-lg mb-0">Colors</h5>
                    </div>
                    <div class="row row-cols-2 g-3" id="theme-colors">
                        <div class="col">
                            <h6 class="fs-sm mb-2">Primary</h6>
                            <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-primary"
                                data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
                                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1"
                                    value="#d85151">
                                <label for="primary"
                                    class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle"
                                    style="max-width: 38px; background-color: #d85151"></label>
                                <input type="color" class="visually-hidden" id="primary" value="#d85151">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Success</h6>
                            <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-success"
                                data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
                                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1"
                                    value="#33b36b">
                                <label for="success"
                                    class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle"
                                    style="max-width: 38px; background-color: #33b36b"></label>
                                <input type="color" class="visually-hidden" id="success" value="#33b36b">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Warning</h6>
                            <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-warning"
                                data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
                                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1"
                                    value="#fc9231">
                                <label for="warning"
                                    class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle"
                                    style="max-width: 38px; background-color: #fc9231"></label>
                                <input type="color" class="visually-hidden" id="warning" value="#fc9231">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Danger</h6>
                            <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-danger"
                                data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
                                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1"
                                    value="#f03d3d">
                                <label for="danger"
                                    class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle"
                                    style="max-width: 38px; background-color: #f03d3d"></label>
                                <input type="color" class="visually-hidden" id="danger" value="#f03d3d">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Info</h6>
                            <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-info"
                                data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
                                <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1"
                                    value="#3d7a81">
                                <label for="info"
                                    class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle"
                                    style="max-width: 38px; background-color: #3d7a81"></label>
                                <input type="color" class="visually-hidden" id="info" value="#3d7a81">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Direction -->
                <div class="pb-4 mb-2">
                    <div class="d-flex align-items-center pb-1 mb-2">
                        <i class="fi-sort text-body-tertiary fs-lg me-2" style="transform: rotate(90deg)"></i>
                        <h5 class="fs-lg mb-0">Direction</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border rounded p-3">
                        <div class="me-3">
                            <h6 class="mb-1">RTL</h6>
                            <p class="fs-sm mb-0">Change text direction</p>
                        </div>
                        <div class="form-check form-switch m-0">
                            <input type="checkbox" class="form-check-input" role="switch" id="rtl-switch">
                        </div>
                    </div>
                    <div class="alert alert-info p-2 mt-2 mb-0">
                        <div class="d-flex text-body-emphasis fs-xs py-1 pe-1">
                            <i class="fi-info text-info fs-lg mb-2 mb-sm-0" style="margin-top: .125rem"></i>
                            <div class="ps-2">To switch the text direction of your webpage from LTR to RTL, please
                                consult the detailed instructions provided in the relevant section of our documentation.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Border width -->
                <div class="pb-4 mb-2">
                    <div class="d-flex align-items-center pb-1 mb-2">
                        <i class="fi-menu text-body-tertiary fs-lg me-2"></i>
                        <h5 class="fs-lg mb-0">Border width, px</h5>
                    </div>
                    <div class="slider-input d-flex align-items-center gap-3 border rounded p-3" id="border-input">
                        <input type="range" class="form-range" min="0" max="10" step="1"
                            value="1">
                        <input type="number" class="form-control" id="border-width" min="0" max="10"
                            value="1" style="max-width: 5.5rem">
                    </div>
                </div>

                <!-- Rounding -->
                <div class="d-flex align-items-center pb-1 mb-2">
                    <i class="fi-maximize text-body-tertiary fs-lg me-2"></i>
                    <h5 class="fs-lg mb-0">Rounding, rem</h5>
                </div>
                <div class="slider-input d-flex align-items-center gap-3 border rounded p-3">
                    <input type="range" class="form-range" min="0" max="5" step=".05"
                        value="0.5">
                    <input type="number" class="form-control" id="border-radius" min="0" max="5"
                        step=".05" value="0.5" style="max-width: 5.5rem">
                </div>
            </div>

            <!-- Customizer code -->
            <div class="customizer-collapse collapse" id="customizerCode">
                <div class="nav mb-3">
                    <a class="nav-link position-relative fs-base p-0" href=".html" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="customizerSettings customizerCode">
                        <i class="fi-chevron-left fs-lg ms-n1 me-1"></i>
                        <span class="hover-effect-underline stretched-link">Back to settings</span>
                    </a>
                </div>
                <p class="fs-sm pb-1">To apply the provided styles to your webpage, enclose them within a
                    <code>&lt;style&gt;</code> tag and insert this tag into the <code>&lt;head&gt;</code> section of your
                    HTML document after the following link to the main stylesheet:<br><code>&lt;link
                        href="assets/css/theme.min.css"&gt;</code>
                </p>
                <div class="position-relative bg-body-tertiary rounded overflow-hidden pt-3">
                    <div class="position-absolute top-0 start-0 w-100 p-3">
                        <button type="button" class="btn btn-sm btn-outline-dark w-100"
                            data-copy-text-from="#generated-styles" data-done-label="Code copied">
                            <i class="fi-copy fs-sm me-1"></i>
                            Copy code
                        </button>
                    </div>
                    <pre class="text-wrap bg-transparent border-0 fs-xs text-body-emphasis p-4 pt-5" id="generated-styles"></pre>
                </div>
            </div>
        </div>

        <!-- Offcanvas footer (Action buttons) -->
        <div class="offcanvas-header border-top gap-3 d-none" id="customizer-btns">
            <button type="button" class="btn btn-lg btn-secondary w-100 fs-sm" id="customizer-reset">
                <i class="fi-trash fs-lg me-2 ms-n1"></i>
                Reset
            </button>
            <button class="btn btn-lg btn-primary hiding-collapse-toggle w-100 fs-sm collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target=".customizer-collapse" aria-expanded="false"
                aria-controls="customizerSettings customizerCode">
                <i class="fi-code fs-lg me-2 ms-n1"></i>
                Show code
            </button>
        </div>
    </div>


    <!-- Map offcanvas -->
    <div class="offcanvas offcanvas-top h-100" id="map" tabindex="-1">
        <div class="offcanvas-header justify-content-between border-bottom py-3">
            <h5 class="offcanvas-title py-1">View on the map</h5>
            <div class="d-flex align-items-center py-1">
                <span class="fs-xs ms-auto me-2">[ESC]</span>
                <button class="btn-close ms-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container pt-4 pb-5 mb-xxl-3">

            <!-- Breadcrumb -->
            <nav class="pb-2 pb-md-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Entertainment</li>
                </ol>
            </nav>


            <!-- Filter sidebar + Listings grid view -->
            <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

                <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                {{-- <aside class="col-lg-3">
                    <div class="offcanvas-lg offcanvas-start pe-lg-2 pe-xl-3 pe-xxl-4" id="filterSidebar">
                        <div class="offcanvas-header border-bottom py-3">
                            <h3 class="h5 offcanvas-title">Filters</h3>
                            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                                data-bs-target="#filterSidebar" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-block">

                            <!-- Active filters + Search -->
                            <div class="pb-4 mb-2 mb-xl-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h4 class="h6 mb-0">Filter</h4>
                                    <div class="nav">
                                        <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0"
                                            href="#!">Clear all</a>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                                        <i class="fi-close fs-sm me-1 ms-n1"></i>
                                        Barcelona
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                                        <i class="fi-close fs-sm me-1 ms-n1"></i>
                                        Entertainment
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                                        <i class="fi-close fs-sm me-1 ms-n1"></i>
                                        $5 - $150
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                                        <i class="fi-close fs-sm me-1 ms-n1"></i>
                                        5
                                        <i class="fi-star-filled text-warning ms-1"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                                        <i class="fi-close fs-sm me-1 ms-n1"></i>
                                        4
                                        <i class="fi-star-filled text-warning ms-1"></i>
                                    </button>
                                </div>
                                <div class="position-relative">
                                    <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input type="search" class="form-control form-icon-start rounded-pill"
                                        placeholder="Search by keywords">
                                </div>
                            </div>

                            <!-- Location and date -->
                            <div class="pb-4 mb-2 mb-xl-3">
                                <h4 class="h6">Location</h4>
                                <div class="vstack gap-3">
                                    <div class="position-relative">
                                        <i
                                            class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                                        <select class="form-select form-icon-start rounded-pill"
                                            data-select="{
                        &quot;classNames&quot;: {
                          &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
                        },
                        &quot;searchEnabled&quot;: true
                      }"
                                            aria-label="Location select">
                                            <option value="">Any location</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Rome">Rome</option>
                                            <option value="Barcelona" selected="">Barcelona</option>
                                            <option value="London">London</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Prague">Prague</option>
                                            <option value="Venice">Venice</option>
                                            <option value="Vienna">Vienna</option>
                                            <option value="Florence">Florence</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Category -->
                            <div class="pb-4 mb-2 mb-xl-3">
                                <h4 class="h6">Category</h4>
                                <ul class="nav flex-column gap-2 m-0">
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            Accommodation
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">532</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            Shopping
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">108</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            Food &amp; Drink
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">260</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-semibold py-1 px-0 active" href="#!">
                                            Entertainment
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">347</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            Health
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">54</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Price -->
                            <div class="pb-4 mb-2 mb-xl-3">
                                <h4 class="h6 pb-2" id="headingPrice">Price Range</h4>
                                <div class="range-slider" aria-labelledby="headingPrice">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative w-50">
                                            <i
                                                class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="number" class="form-control form-icon-start rounded-pill"
                                                min="0" max="250" step="5" data-range-slider-min="">
                                        </div>
                                        <i class="fi-minus text-body-emphasis mx-2"></i>
                                        <div class="position-relative w-50">
                                            <i
                                                class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="number" class="form-control form-icon-start rounded-pill"
                                                min="5" max="300" step="5" data-range-slider-max="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Average rating -->
                            <div class="pb-2 pb-lg-0">
                                <h4 class="h6">Average rating</h4>
                                <div class="d-flex flex-column gap-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="star-5" checked="">
                                        <label class="form-check-label d-flex align-items-center fs-sm" for="star-5">
                                            5 <i class="fi-star-filled text-warning ms-1"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="star-4" checked="">
                                        <label class="form-check-label d-flex align-items-center fs-sm" for="star-4">
                                            4 <i class="fi-star-filled text-warning ms-1"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="star-3">
                                        <label class="form-check-label d-flex align-items-center fs-sm" for="star-3">
                                            3 <i class="fi-star-filled text-warning ms-1"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="star-2">
                                        <label class="form-check-label d-flex align-items-center fs-sm" for="star-2">
                                            2-1 <i class="fi-star-filled text-warning ms-1"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark rounded-pill px-4 py-2 mt-4">Apply Filter</button>
                        </div>
                    </div>
                </aside> --}}
                <aside class="col-lg-3">
                    <div class="offcanvas-lg offcanvas-start pe-lg-2 pe-xl-3 pe-xxl-4" id="filterSidebar">
                        <div class="offcanvas-header border-bottom py-3">
                            <h3 class="h5 offcanvas-title">Filters</h3>
                            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                                data-bs-target="#filterSidebar" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-block">
                            <!-- Form wrapper for filter data submission -->
                            <form id="filterForm" action="/{{ request()->path() }}" method="GET">
                                <!-- Active filters + Search -->
                                <div class="pb-4 mb-2 mb-xl-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h4 class="h6 mb-0">Filter</h4>
                                        <div class="nav">
                                            <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0"
                                                href="#!" id="clearAllFilters">Clear all</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mb-4" id="activeFilters">
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-filter="location" data-value="Barcelona">
                                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                                            Barcelona
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-filter="category" data-value="Entertainment">
                                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                                            Entertainment
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-filter="price-range">
                                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                                            $5 - $150
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-filter="rating" data-value="5">
                                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                                            5
                                            <i class="fi-star-filled text-warning ms-1"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-filter="rating" data-value="4">
                                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                                            4
                                            <i class="fi-star-filled text-warning ms-1"></i>
                                        </button>
                                    </div>
                                    <div class="position-relative">
                                        <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input type="search" name="search"
                                            class="form-control form-icon-start rounded-pill"
                                            placeholder="Search by keywords">
                                    </div>
                                </div>

                                <!-- Location and date -->
                                <div class="pb-4 mb-2 mb-xl-3">
                                    <h4 class="h6">Location</h4>
                                    <div class="vstack gap-3">
                                        <div class="position-relative">
                                            <i
                                                class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                                            <select name="location" class="form-select form-icon-start rounded-pill"
                                                data-select="{
                                  &quot;classNames&quot;: {
                                    &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
                                  },
                                  &quot;searchEnabled&quot;: true
                                }"
                                                aria-label="Location select">
                                                <option value="">Any location</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Rome">Rome</option>
                                                <option value="Barcelona" selected="">Barcelona</option>
                                                <option value="London">London</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Prague">Prague</option>
                                                <option value="Venice">Venice</option>
                                                <option value="Vienna">Vienna</option>
                                                <option value="Florence">Florence</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="pb-4 mb-2 mb-xl-3">
                                    <h4 class="h6">Category</h4>
                                    <ul class="nav flex-column gap-2 m-0">
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category"
                                                    id="category-accommodation" value="Accommodation">
                                                <label
                                                    class="form-check-label d-flex nav-link text-body fw-normal py-1 px-0"
                                                    for="category-accommodation">
                                                    Accommodation
                                                    <span class="text-body-tertiary fw-normal ps-2 ms-auto">532</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category"
                                                    id="category-shopping" value="Shopping">
                                                <label
                                                    class="form-check-label d-flex nav-link text-body fw-normal py-1 px-0"
                                                    for="category-shopping">
                                                    Shopping
                                                    <span class="text-body-tertiary fw-normal ps-2 ms-auto">108</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category"
                                                    id="category-food" value="Food & Drink">
                                                <label
                                                    class="form-check-label d-flex nav-link text-body fw-normal py-1 px-0"
                                                    for="category-food">
                                                    Food &amp; Drink
                                                    <span class="text-body-tertiary fw-normal ps-2 ms-auto">260</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category"
                                                    id="category-entertainment" value="Entertainment" checked>
                                                <label
                                                    class="form-check-label d-flex nav-link text-body fw-semibold py-1 px-0 active"
                                                    for="category-entertainment">
                                                    Entertainment
                                                    <span class="text-body-tertiary fw-normal ps-2 ms-auto">347</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category"
                                                    id="category-health" value="Health">
                                                <label
                                                    class="form-check-label d-flex nav-link text-body fw-normal py-1 px-0"
                                                    for="category-health">
                                                    Health
                                                    <span class="text-body-tertiary fw-normal ps-2 ms-auto">54</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Price -->
                                <div class="pb-4 mb-2 mb-xl-3">
                                    <h4 class="h6 pb-2" id="headingPrice">Price Range</h4>
                                    <div class="range-slider" aria-labelledby="headingPrice">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative w-50">
                                                <i
                                                    class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                                <input type="number" name="price_min"
                                                    class="form-control form-icon-start rounded-pill" min="0"
                                                    max="250" step="5" data-range-slider-min=""
                                                    value="5">
                                            </div>
                                            <i class="fi-minus text-body-emphasis mx-2"></i>
                                            <div class="position-relative w-50">
                                                <i
                                                    class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                                <input type="number" name="price_max"
                                                    class="form-control form-icon-start rounded-pill" min="5"
                                                    max="300" step="5" data-range-slider-max=""
                                                    value="150">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Average rating -->
                                <div class="pb-2 pb-lg-0">
                                    <h4 class="h6">Average rating</h4>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="ratings[]" value="5"
                                                class="form-check-input" id="star-5" checked>
                                            <label class="form-check-label d-flex align-items-center fs-sm"
                                                for="star-5">
                                                5 <i class="fi-star-filled text-warning ms-1"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="ratings[]" value="4"
                                                class="form-check-input" id="star-4" checked>
                                            <label class="form-check-label d-flex align-items-center fs-sm"
                                                for="star-4">
                                                4 <i class="fi-star-filled text-warning ms-1"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="ratings[]" value="3"
                                                class="form-check-input" id="star-3">
                                            <label class="form-check-label d-flex align-items-center fs-sm"
                                                for="star-3">
                                                3 <i class="fi-star-filled text-warning ms-1"></i>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="ratings[]" value="1-2"
                                                class="form-check-input" id="star-2">
                                            <label class="form-check-label d-flex align-items-center fs-sm"
                                                for="star-2">
                                                2-1 <i class="fi-star-filled text-warning ms-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark rounded-pill px-4 py-2 mt-4">Apply
                                    Filter</button>
                            </form>
                        </div>
                    </div>
                </aside>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Clear all filters
                        document.getElementById('clearAllFilters').addEventListener('click', function(e) {
                            e.preventDefault();
                            const form = document.getElementById('filterForm');

                            // Reset all form fields
                            form.reset();

                            // Clear active filter buttons
                            document.getElementById('activeFilters').innerHTML = '';
                        });

                        // Filter button removal
                        document.querySelectorAll('#activeFilters button').forEach(button => {
                            button.addEventListener('click', function() {
                                const filterType = this.getAttribute('data-filter');
                                const filterValue = this.getAttribute('data-value');

                                // Remove the filter based on type and value
                                if (filterType === 'location') {
                                    document.querySelector('select[name="location"]').value = '';
                                } else if (filterType === 'category') {
                                    document.querySelector(`input[name="category"][value="${filterValue}"]`)
                                        .checked = false;
                                } else if (filterType === 'price-range') {
                                    document.querySelector('input[name="price_min"]').value = 0;
                                    document.querySelector('input[name="price_max"]').value = 300;
                                } else if (filterType === 'rating') {
                                    document.querySelector(`input[name="ratings[]"][value="${filterValue}"]`)
                                        .checked = false;
                                }

                                // Remove the button
                                this.remove();
                            });
                        });
                    });
                </script>

                <!-- Listings grid -->
                <div class="col-lg-9">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-4 g-sm-3 g-lg-4">

                        <!-- Listing -->
                        <div class="col">
                            <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                                    <div class="ratio hover-effect-target"
                                        style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                                        <img src={{ asset('assets/img/listings/city-guide/v1/01.jpg') }} alt="Image">
                                    </div>
                                    <div
                                        class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                                            aria-label="Add to wishlist">
                                            <i class="fi-heart animate-target fs-sm"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body pt-3 pb-2 px-3">
                                    <span
                                        class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                                    <h3 class="h5 pt-1 mb-2">
                                        <a class="hover-effect-underline stretched-link"
                                            href="single-entry-city-guide.html">Barcelona National Zoo</a>
                                    </h3>
                                    <p class="fs-sm mb-0">Discover fascinating animals and a fun-filled adventure for the
                                        whole family.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fi-star-filled text-warning"></i>
                                            <span class="fs-sm text-secondary-emphasis">4.6</span>
                                            <span class="fs-xs text-body-secondary align-self-end">(7523)</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                                            <i class="fi-map-pin"></i>
                                            <span class="text-truncate">3.2 km from center</span>
                                        </div>
                                    </div>
                                    <div class="h6 pt-3 mb-0">$20</div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="pt-3 mt-3" aria-label="Listings pagination">
                        <ul class="pagination pagination-lg">
                            <li class="page-item disabled me-auto">
                                <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2"
                                    href="#!" aria-label="Previous page">
                                    <i class="fi-chevron-left mx-1"></i>
                                </a>
                            </li>
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
                                <span class="page-link px-2 pe-none">...</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#!">10</a>
                            </li>
                            <li class="page-item ms-auto">
                                <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2"
                                    href="#" aria-label="Next page">
                                    <i class="fi-chevron-right mx-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>


    <!-- Filter sidebar offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button"
        class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
        <i class="fi-sidebar fs-base me-2"></i>
        Filters
    </button>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
        <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
            Top
            <i class="fi-arrow-right fs-base ms-1 me-n1 animate-target"></i>
            <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
            <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10"></rect>
            </svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5"
            href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas"
            role="button" aria-controls="customizer">
            Customize<i class="fi-settings fs-base ms-1 me-n2 animate-target"></i>
        </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/choices.js/choices.min.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/leaflet/leaflet.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
@endsection

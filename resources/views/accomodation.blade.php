@extends('frontend.layouts.app')

@section('content')
    <!-- Filters offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="filtersOffcanvas" tabindex="-1" aria-labelledby="filtersLabel">
        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="filtersLabel">Filters</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0">

            <!-- Location -->
            <div class="position-relative d-sm-none">
                <i class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1"></i>
                <select class="form-select form-select-lg form-select-flush text-dark-emphasis fw-medium py-3 ps-4 pe-0"
                    data-select="{
            &quot;classNames&quot;: {
              &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-select-lg&quot;, &quot;form-select-flush&quot;, &quot;text-dark-emphasis&quot;, &quot;fw-medium&quot;, &quot;py-3&quot;, &quot;ps-4&quot;, &quot;pe-0&quot;]
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

            <!-- Date -->
            <div class="position-relative d-md-none">
                <i class="fi-calendar position-absolute top-50 start-0 translate-middle-y"></i>
                <input type="text"
                    class="form-control form-control-lg form-select-flush text-dark-emphasis fw-medium py-3 ps-4 pe-0"
                    data-datepicker="{&quot;dateFormat&quot;: &quot;M j, Y&quot;}" placeholder="Choose date">
            </div>

            <div class="accordion" id="filters">

                <!-- Price -->
                <div class="accordion-item d-lg-none">
                    <h6 class="accordion-header" id="headingPrice">
                        <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse"
                            data-bs-target="#priceFilter" aria-expanded="false" aria-controls="priceFilter">
                            <span class="d-flex align-items-end">
                                Price
                                <span class="text-body fs-sm fw-normal ms-1" id="priceCountOffcanvas"></span>
                            </span>
                        </button>
                    </h6>
                    <div class="accordion-collapse collapse" id="priceFilter" aria-labelledby="headingPrice"
                        data-bs-parent="#filters">
                        <div class="accordion-body d-flex flex-column gap-2 px-1">
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-1"
                                    onclick="updateFilterCount('priceCountOffcanvas')" data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-1" class="form-check-label d-flex align-items-end">
                                    $0.00 - 99.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">241</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-2"
                                    onclick="updateFilterCount('priceCountOffcanvas')" data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-2" class="form-check-label d-flex align-items-end">
                                    $100.00 - 199.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">398</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-3"
                                    onclick="updateFilterCount('priceCountOffcanvas')" data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-3" class="form-check-label d-flex align-items-end">
                                    $200.00 - 299.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">253</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-4"
                                    onclick="updateFilterCount('priceCountOffcanvas')" data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-4" class="form-check-label d-flex align-items-end">
                                    $300.00 - 399.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">197</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-5"
                                    onclick="updateFilterCount('priceCountOffcanvas')" data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-5" class="form-check-label d-flex align-items-end">
                                    $400.00 - 499.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">152</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-6"
                                    onclick="updateFilterCount('priceCountOffcanvas')"
                                    data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-6" class="form-check-label d-flex align-items-end">
                                    $500.00 - 599.99
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">138</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="priceOffcanvas-7"
                                    onclick="updateFilterCount('priceCountOffcanvas')"
                                    data-count-id="priceCountOffcanvas">
                                <label for="priceOffcanvas-7" class="form-check-label d-flex align-items-end">
                                    $600.00+
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">27</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Number of rooms -->
                <div class="position-relative">
                    <i class="fi-bed-single position-absolute top-50 start-0 translate-middle-y"></i>
                    <input type="number"
                        class="form-control form-control-lg form-select-flush text-dark-emphasis fw-medium py-3 ps-4 pe-0"
                        min="1" placeholder="Number of rooms">
                </div>

                <!-- Room facilities -->
                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingFacilities">
                        <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse"
                            data-bs-target="#facilitiesFilter" aria-expanded="false" aria-controls="facilitiesFilter">
                            <span class="d-flex align-items-end">
                                Room facilities
                                <span class="text-body fs-sm fw-normal ms-1" id="facilitiesCount"></span>
                            </span>
                        </button>
                    </h6>
                    <div class="accordion-collapse collapse" id="facilitiesFilter" aria-labelledby="headingFacilities"
                        data-bs-parent="#filters">
                        <div class="accordion-body d-flex flex-column gap-2 px-1">
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="kitchen"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="kitchen" class="form-check-label d-flex align-items-end">
                                    Kitchen
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">27</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="terrace"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="terrace" class="form-check-label d-flex align-items-end">
                                    Terrace
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">89</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="ac"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="ac" class="form-check-label d-flex align-items-end">
                                    Air Conditioning
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">145</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="heating"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="heating" class="form-check-label d-flex align-items-end">
                                    Heating
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">106</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="desk"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="desk" class="form-check-label d-flex align-items-end">
                                    Desk
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">73</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="washing-machine"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="washing-machine" class="form-check-label d-flex align-items-end">
                                    Washing Machine
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">67</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="private-bathroom"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="private-bathroom" class="form-check-label d-flex align-items-end">
                                    Private Bathroom
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">210</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="laundry"
                                    onclick="updateFilterCount('facilitiesCount')" data-count-id="facilitiesCount">
                                <label for="laundry" class="form-check-label d-flex align-items-end">
                                    Laundry Service
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">132</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amenities -->
                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingAmenities">
                        <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse"
                            data-bs-target="#amenitiesFilter" aria-expanded="false" aria-controls="amenitiesFilter">
                            <span class="d-flex align-items-end">
                                Amenities
                                <span class="text-body fs-sm fw-normal ms-1" id="amenitiesCount"></span>
                            </span>
                        </button>
                    </h6>
                    <div class="accordion-collapse collapse" id="amenitiesFilter" aria-labelledby="headingAmenities"
                        data-bs-parent="#filters">
                        <div class="accordion-body d-flex flex-column gap-2 px-1">
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="room-service"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="room-service" class="form-check-label d-flex align-items-end">
                                    Room Service
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">482</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="wifi"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="wifi" class="form-check-label d-flex align-items-end">
                                    Free WiFi
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">537</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="restaurant"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="restaurant" class="form-check-label d-flex align-items-end">
                                    Restaurant
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">209</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="bar"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="bar" class="form-check-label d-flex align-items-end">
                                    Bar
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">182</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="fitness"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="fitness" class="form-check-label d-flex align-items-end">
                                    Fitness Center
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">156</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="swimming"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="swimming" class="form-check-label d-flex align-items-end">
                                    Swimming Pool
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">75</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="parking"
                                    onclick="updateFilterCount('amenitiesCount')" data-count-id="amenitiesCount">
                                <label for="parking" class="form-check-label d-flex align-items-end">
                                    Parking
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">279</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Average rating -->
                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingRating">
                        <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse"
                            data-bs-target="#ratingFilter" aria-expanded="false" aria-controls="ratingFilter">
                            <span class="d-flex align-items-end">
                                Average rating
                                <span class="text-body fs-sm fw-normal ms-1" id="ratingCount"></span>
                            </span>
                        </button>
                    </h6>
                    <div class="accordion-collapse collapse" id="ratingFilter" aria-labelledby="headingRating"
                        data-bs-parent="#filters">
                        <div class="accordion-body d-flex flex-column gap-2 px-1">
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="rating-5"
                                    onclick="updateFilterCount('ratingCount')" data-count-id="ratingCount"
                                    checked="">
                                <label for="rating-5" class="form-check-label d-flex align-items-end">
                                    <span class="d-flex align-items-center gap-1">
                                        5
                                        <i class="fi-star-filled text-warning"></i>
                                    </span>
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">282</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="rating-4"
                                    onclick="updateFilterCount('ratingCount')" data-count-id="ratingCount"
                                    checked="">
                                <label for="rating-4" class="form-check-label d-flex align-items-end">
                                    <span class="d-flex align-items-center gap-1">
                                        4
                                        <i class="fi-star-filled text-warning"></i>
                                    </span>
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">437</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="rating-3"
                                    onclick="updateFilterCount('ratingCount')" data-count-id="ratingCount">
                                <label for="rating-3" class="form-check-label d-flex align-items-end">
                                    <span class="d-flex align-items-center gap-1">
                                        3
                                        <i class="fi-star-filled text-warning"></i>
                                    </span>
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">319</span>
                                </label>
                            </div>
                            <div class="form-check m-0">
                                <input type="checkbox" class="form-check-input fs-base" id="rating-2-1"
                                    onclick="updateFilterCount('ratingCount')" data-count-id="ratingCount">
                                <label for="rating-2-1" class="form-check-label d-flex align-items-end">
                                    <span class="d-flex align-items-center gap-1">
                                        2-1
                                        <i class="fi-star-filled text-warning"></i>
                                    </span>
                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">82</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container pt-4 pb-5 mb-xxl-3">

            <!-- Breadcrumb -->
            <nav class="position-relative" aria-label="breadcrumb" style="z-index: 1021">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
                </ol>
            </nav>


            <!-- Filters -->
            <div class="sticky-top bg-body mb-3 mb-sm-2" style="margin-top: -76px">
                <div class="d-md-none" style="height: 64px"></div>
                <div class="d-none d-md-block d-lg-none" style="height: 72px"></div>
                <div class="d-none d-lg-block" style="height: 76px"></div>
                <div class="row align-items-center py-2 py-sm-3">

                    <div class="col-7 col-sm-9 col-lg-10">
                        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 g-xl-4">

                            <!-- Type -->
                            <div class="col">
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fi-home fs-base me-2"></i>
                                        Type <span class="ms-1 me-auto" id="typeCount"></span>
                                    </button>
                                    <div class="dropdown-menu w-100 p-3">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="apartments"
                                                    checked="" onclick="updateFilterCount('typeCount')"
                                                    data-count-id="typeCount">
                                                <label for="apartments" class="form-check-label d-flex align-items-end">
                                                    Apartments
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">621</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="hotels"
                                                    checked="" onclick="updateFilterCount('typeCount')"
                                                    data-count-id="typeCount">
                                                <label for="hotels" class="form-check-label d-flex align-items-end">
                                                    Hotels
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">57</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="hostels"
                                                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                                                <label for="hostels" class="form-check-label d-flex align-items-end">
                                                    Hostels
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">83</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="bb"
                                                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                                                <label for="bb" class="form-check-label d-flex align-items-end">
                                                    Bed and Breakfasts
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">46</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="resorts"
                                                    checked="" onclick="updateFilterCount('typeCount')"
                                                    data-count-id="typeCount">
                                                <label for="resorts" class="form-check-label d-flex align-items-end">
                                                    Resorts
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">19</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="motels"
                                                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                                                <label for="motels" class="form-check-label d-flex align-items-end">
                                                    Motels
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">10</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="cabins"
                                                    checked="" onclick="updateFilterCount('typeCount')"
                                                    data-count-id="typeCount">
                                                <label for="cabins" class="form-check-label d-flex align-items-end">
                                                    Cabins or Cottages
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">24</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="villas"
                                                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                                                <label for="villas" class="form-check-label d-flex align-items-end">
                                                    Villas
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">98</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col d-none d-sm-block">
                                <div class="position-relative">
                                    <i class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                                    <select class="form-select filter-select form-icon-start rounded-pill"
                                        data-select="{
                      &quot;classNames&quot;: {
                        &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;filter-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
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

                            <!-- Date -->
                            <div class="col d-none d-md-block">
                                <div class="position-relative">
                                    <i class="fi-calendar position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input type="text" class="form-control filter-select form-icon-start rounded-pill"
                                        data-datepicker="{&quot;dateFormat&quot;: &quot;M j, Y&quot;}"
                                        placeholder="Choose date">
                                </div>
                            </div>

                            <!-- Price range -->
                            <div class="col d-none d-lg-block">
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fi-dollar-sign fs-base me-2"></i>
                                        Price range <span class="ms-1 me-auto" id="priceCount"></span>
                                    </button>
                                    <div class="dropdown-menu w-100 p-3">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-1"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-1" class="form-check-label d-flex align-items-end">
                                                    $0.00 - 99.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">241</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-2"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-2" class="form-check-label d-flex align-items-end">
                                                    $100.00 - 199.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">398</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-3"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-3" class="form-check-label d-flex align-items-end">
                                                    $200.00 - 299.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">253</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-4"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-4" class="form-check-label d-flex align-items-end">
                                                    $300.00 - 399.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">197</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-5"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-5" class="form-check-label d-flex align-items-end">
                                                    $400.00 - 499.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">152</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-6"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-6" class="form-check-label d-flex align-items-end">
                                                    $500.00 - 599.99
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">138</span>
                                                </label>
                                            </div>
                                            <div class="form-check m-0">
                                                <input type="checkbox" class="form-check-input fs-base" id="price-7"
                                                    onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                                                <label for="price-7" class="form-check-label d-flex align-items-end">
                                                    $600.00+
                                                    <span class="fs-xs text-body-secondary ps-2 ms-auto">27</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More / All filters offcanvas toggle button -->
                    <div class="col-5 col-sm-3 col-lg-2">
                        <div class="nav">
                            <a class="nav-link position-relative text-nowrap p-0" href="#filtersOffcanvas"
                                data-bs-toggle="offcanvas" aria-controls="filtersOffcanvas">
                                <i class="fi-plus fs-lg me-2"></i>
                                <span class="hover-effect-underline stretched-link">More filters</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Active filters -->
            <div class="d-flex align-items-center gap-3 pb-sm-1 mb-2">
                <div class="pb-3 overflow-x-auto">
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                            Apartments
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                            Hotels
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                            Resorts
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                            Cottages
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                            <i class="fi-close fs-sm me-1 ms-n1"></i>
                            Barcelona
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
                </div>
                <div class="nav pb-3">
                    <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0" href="#!">Clear all</a>
                </div>
            </div>


            <!-- Sort selector + Map view toggle -->
            <div class="d-flex align-items-center gap-4 pb-3 mb-2 mb-xl-3">
                <div class="fs-sm text-nowrap d-none d-md-inline">Showing 95 results</div>
                <div class="position-relative ms-md-auto" style="width: 170px">
                    <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                    <select class="form-select form-icon-start rounded-pill"
                        data-select="{
              &quot;removeItemButton&quot;: false,
              &quot;classNames&quot;: {
                &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
              }
            }">
                        <option value="Popular">Popular</option>
                        <option value="Rating">Rating</option>
                        <option value="Price asc">Price asc</option>
                        <option value="Price desc">Price desc</option>
                    </select>
                </div>
                <div class="nav ms-auto ms-md-0">
                    <a class="nav-link position-relative p-0" href="#map" data-bs-toggle="offcanvas">
                        <i class="fi-map fs-base me-2"></i>
                        <span class="hover-effect-underline stretched-link">View on <span
                                class="d-none d-sm-inline">the</span> map</span>
                    </a>
                </div>
            </div>


            <!-- Listings grid -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-n2">

                <!-- Listing -->
                @foreach ($acc as $item)    
                <div class="col pb-2">
                    <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent border-0">
                        <div class="bg-body-tertiary rounded overflow-hidden">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(280 / 416 * 100%)">
                                <img src="{{ Storage::url($item->image[0]) }}" alt="Image">
                            </div>
                        </div>
                        {{-- <div
                            class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                            <button type="button"
                                class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                                aria-label="Add to wishlist">
                                <i class="fi-heart animate-target fs-sm"></i>
                            </button>
                        </div> --}}
                        <div class="card-body pt-3 pb-2 px-0">
                            <h3 class="h5 mb-0">
                                <a class="hover-effect-underline stretched-link"
                                    href="{{ route('details', 'accomdation') }}">{{ $item->name }}</a>
                            </h3>
                        </div>
                        <div class="card-footer d-flex align-items-center gap-3 bg-transparent border-0 p-0">
                            <div class="d-flex align-items-center gap-1">
                               
                                <span class="fs-sm text-secondary-emphasis">Category: {{ $item->category->name }}</span>
                               
                            </div>
                            <div class="d-flex align-items-center gap-1 fs-sm">
                                {{ $item->place->name }}
                            </div>
                            <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                              <span class="fs-sm text-secondary-emphasis">Room Type: {{ $item->room_type }}</span>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>

            <!-- Pagination -->
            
        </div>
    </main>
@endsection

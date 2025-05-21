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
                <aside class="col-lg-3">
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
                                            <svg class="flex-shrin-0 text-light-emphasis me-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M23.863 9.137l-.613-.613V3.582C23.25 1.607 21.643 0 19.669 0a3.56 3.56 0 0 0-2.164.73C14.853-.572 11.552-.122 9.35 2.08c-2.359 2.359-2.707 5.977-1.047 8.709l-2.686 2.686H4.483a.47.47 0 0 0-.469.469v.86h-.86a.47.47 0 0 0-.469.469v.86h-.86a.47.47 0 0 0-.469.469v.86h-.86a.47.47 0 0 0-.331.137l-.028.028a.47.47 0 0 0-.137.331V21a.47.47 0 0 0 .469.469h3.098a.47.47 0 0 0 .331-.137l5.171-5.171a.47.47 0 0 0 0-.663.47.47 0 0 0-.663 0l-5.033 5.033H.937v-2.132h.888a.47.47 0 0 0 .469-.469v-.86h.86a.47.47 0 0 0 .469-.469v-.86h.86a.47.47 0 0 0 .469-.469v-.86h.86a.47.47 0 0 0 .331-.137l2.708-2.708a7.19 7.19 0 0 0 .499.554 7.05 7.05 0 0 0 4.713 2.073v7.837A1.97 1.97 0 0 0 16.032 24h6A1.97 1.97 0 0 0 24 22.031V9.469a.47.47 0 0 0-.137-.331zm-4.194-8.2a2.65 2.65 0 0 1 2.644 2.644v4.005l-.843-.843c-.1-1.705-.789-3.373-2.079-4.663-.308-.308-.638-.582-.985-.821a2.63 2.63 0 0 1 1.263-.321zm-2.644 3.975V3.878a1.13 1.13 0 0 1 .67 1.035 1.13 1.13 0 0 1-.333.804 1.14 1.14 0 0 1-1.607 0 1.14 1.14 0 0 1 0-1.607 1.13 1.13 0 0 1 .332-.229v1.033a.47.47 0 0 0 .469.469.47.47 0 0 0 .469-.469zm-2.655 8.347c-1.578 0-3.156-.601-4.357-1.802a6.17 6.17 0 0 1 0-8.715A6.12 6.12 0 0 1 14.37.939a6.15 6.15 0 0 1 2.433.497 3.56 3.56 0 0 0-.646 1.443 2.06 2.06 0 0 0-1.065.567c-.809.809-.809 2.124 0 2.933.404.404.935.606 1.466.606s1.062-.202 1.466-.606a2.06 2.06 0 0 0 .607-1.466 2.06 2.06 0 0 0-.607-1.466 2.06 2.06 0 0 0-.915-.532 2.65 2.65 0 0 1 .537-1.035 6.21 6.21 0 0 1 1.08.864 6.12 6.12 0 0 1 1.805 4.357 6.12 6.12 0 0 1-1.805 4.357 6.14 6.14 0 0 1-4.357 1.802zm8.693 8.77c0 .569-.463 1.031-1.031 1.031h-6c-.569 0-1.031-.463-1.031-1.031v-7.858a7.04 7.04 0 0 0 4.39-2.052c1.153-1.153 1.826-2.608 2.018-4.113l1.654 1.654v12.368zM11.983 4.715a.47.47 0 0 0 0-.663.47.47 0 0 0-.663 0 4.32 4.32 0 0 0 0 6.099.47.47 0 0 0 .332.137c.12 0 .24-.046.331-.137a.47.47 0 0 0 0-.663 3.38 3.38 0 0 1 0-4.773zm1.491 5.645a.47.47 0 0 0-.583.325.47.47 0 0 0 .327.577c.043.012.086.018.128.018a.47.47 0 0 0 .45-.34.47.47 0 0 0-.322-.58zm7.549 10.171h-3.984a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469h3.984a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm-10.752-6.236a.47.47 0 0 0-.663 0 .47.47 0 0 0 .331.8.47.47 0 0 0 .332-.8z">
                                                </path>
                                            </svg>
                                            Accommodation
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">532</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            <svg class="flex-shrin-0 text-light-emphasis me-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M20.907 22.579l-.469-15c-.024-.78-.642-1.392-1.406-1.392h-2.109 0V4.922A4.93 4.93 0 0 0 12.001 0a4.93 4.93 0 0 0-4.922 4.922v1.266h-2.11c-.764 0-1.382.611-1.406 1.392l-.469 15a1.35 1.35 0 0 0 .387.988c.266.275.638.432 1.019.432h15c.381 0 .753-.158 1.019-.433a1.35 1.35 0 0 0 .387-.988zM8.016 4.922A3.99 3.99 0 0 1 12.001.937a3.99 3.99 0 0 1 3.984 3.984V8.53a.47.47 0 0 1-.469.469.47.47 0 0 1-.469-.469V4.922A3.05 3.05 0 0 0 12 1.875a3.05 3.05 0 0 0-3.047 3.047v3.609A.47.47 0 0 1 8.485 9a.47.47 0 0 1-.469-.469V4.922zm6.094 1.266H9.891h0V4.922A2.11 2.11 0 0 1 12 2.813a2.11 2.11 0 0 1 2.109 2.109v1.266zm5.736 16.727c-.091.094-.217.148-.346.148h-15a.49.49 0 0 1-.346-.147.42.42 0 0 1-.123-.307l.015-.483h2.469a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469h-2.44L4.5 7.608c.008-.271.214-.483.469-.483h2.109v1.406a1.41 1.41 0 0 0 1.406 1.406A1.41 1.41 0 0 0 9.89 8.531V7.125h4.219v1.406a1.41 1.41 0 0 0 1.406 1.406 1.41 1.41 0 0 0 1.406-1.406V7.125h0 2.109c.255 0 .46.212.469.483l.469 15a.42.42 0 0 1-.123.307zm-7.551-10.076c-.193.192-.442.146-.588 0-1.113-1.109-2.924-1.109-4.037 0-.779.776-1.029 1.791-.723 2.934.647 2.418 3.628 4.854 4.933 5.203a.47.47 0 0 0 .242 0c1.305-.349 4.286-2.785 4.933-5.203.306-1.143.056-2.157-.723-2.934-1.113-1.109-2.924-1.11-4.037 0zm3.854 2.691c-.544 2.034-3.081 4.111-4.148 4.501-1.067-.39-3.604-2.467-4.148-4.501-.22-.823-.064-1.486.479-2.027.374-.373.865-.559 1.357-.559s.983.186 1.357.559a1.34 1.34 0 0 0 1.912 0c.748-.746 1.965-.746 2.713 0 .543.541.699 1.204.479 2.027zm-7.524 5.658a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469h0a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469z">
                                                </path>
                                            </svg>
                                            Shopping
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">108</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            <svg class="flex-shrin-0 text-light-emphasis me-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M16.609 13.116a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469zm4.663-.469a.47.47 0 0 0-.47-.47h-2.076a.47.47 0 1 0 0 .94h1.593c-.244 4.377-3.882 7.863-8.319 7.863s-8.075-3.486-8.319-7.863h10.812a.47.47 0 1 0 0-.94h-1.671c.039-.273.141-.438.272-.649.192-.309.43-.694.43-1.408s-.239-1.099-.43-1.408c-.168-.271-.289-.466-.289-.913s.121-.642.289-.913c.192-.309.43-.694.43-1.408s-.239-1.099-.43-1.408a2.44 2.44 0 0 1-.189-.343l7.464 1.178a.47.47 0 0 0 .073-.934L12.866 2.77l.116-.784L20.476.935a.47.47 0 0 0 .4-.53.47.47 0 0 0-.53-.4L7.038 1.871c-.235.033-.413.246-.404.483.003.733.213 1.132.399 1.484.163.309.291.552.291 1.064 0 .503-.131.733-.298 1.023a2.67 2.67 0 0 0-.422 1.49 2.67 2.67 0 0 0 .422 1.49c.166.29.298.52.298 1.023s-.131.733-.298 1.023-.365.637-.412 1.226H3.198a.47.47 0 0 0-.47.47c0 3.526 1.979 6.599 4.884 8.166v2.717a.47.47 0 0 0 .47.47h7.836a.47.47 0 0 0 .47-.47v-2.717c2.905-1.567 4.884-4.64 4.884-8.166zm-9.407-9.49c0 .714.239 1.099.43 1.408.168.271.289.467.289.913s-.121.642-.289.913c-.192.309-.43.694-.43 1.408s.239 1.099.43 1.408c.168.271.289.466.289.913s-.121.642-.289.913-.368.595-.419 1.144h-1.745c.039-.297.147-.476.276-.691.19-.317.427-.71.427-1.439s-.237-1.123-.427-1.439c-.164-.272-.293-.487-.293-.955s.129-.683.293-.956c.19-.317.427-.71.427-1.44s-.237-1.123-.427-1.44c-.164-.272-.293-.487-.293-.956v-.473l1.897-.266-.147 1.036zM7.842 8.439c-.166-.29-.298-.52-.298-1.023s.131-.733.298-1.023a2.67 2.67 0 0 0 .422-1.49c0-.745-.212-1.147-.4-1.502-.113-.214-.209-.397-.258-.661l1.569-.22v.342c0 .729.237 1.123.427 1.44.164.272.293.487.293.956s-.129.683-.293.956c-.19.317-.427.71-.427 1.44s.237 1.123.427 1.439c.164.272.293.487.293.955s-.129.683-.293.956-.367.611-.416 1.175H7.559c.038-.33.149-.525.284-.759a2.67 2.67 0 0 0 .422-1.49 2.67 2.67 0 0 0-.422-1.49zm7.606 14.622H8.552v-1.807c1.066.429 2.23.665 3.448.665s2.382-.237 3.448-.665v1.807zm-7.49-8.684a.47.47 0 1 0 0 .94h8.084a.47.47 0 1 0 0-.94H7.958z">
                                                </path>
                                            </svg>
                                            Food &amp; Drink
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">260</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-semibold py-1 px-0 active" href="#!">
                                            <svg class="flex-shrin-0 text-light-emphasis me-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M18.618 5.247a4.84 4.84 0 0 0-1.553-.164C16.923 2.255 14.693 0 11.974 0 9.634 0 7.657 1.668 7.06 3.935a4.84 4.84 0 0 0-1.582.162c-.157.043-.314.094-.469.154a.47.47 0 0 0 .168.907.47.47 0 0 0 .168-.031l.379-.124c.386-.105.779-.15 1.173-.136l-.023.505c0 2.468 1.557 5.36 3.694 6.285l-.217 1.136c-.511 1.032-1.244 1.724-2.069 1.949a2.5 2.5 0 0 1-.731.085c-.672-.021-1.279-.281-1.718-.535-1.393-.804-2.6-2.374-3.003-3.907a4.6 4.6 0 0 1 .152-2.854.47.47 0 0 0-.267-.607.47.47 0 0 0-.607.267 5.53 5.53 0 0 0-.185 3.433c.463 1.759 1.846 3.56 3.441 4.48.578.334 1.16.542 1.727.623l.133 1.942a.47.47 0 0 0 .591.42l.901-.245c.384.816.476 1.617.564 2.394.095.836.185 1.626.612 2.377a.47.47 0 0 0 .639.177.47.47 0 0 0 .176-.639c-.332-.584-.407-1.249-.495-2.02s-.187-1.637-.579-2.538l.715-.195a.47.47 0 0 0 .299-.655l-.843-1.756c.299-.237.577-.526.827-.86l.031.002h.935c.165.891.049 1.69-.063 2.466-.121.833-.235 1.619-.014 2.456a.47.47 0 0 0 .453.349.45.45 0 0 0 .12-.016.47.47 0 0 0 .334-.573c-.172-.652-.076-1.315.036-2.082s.236-1.629.087-2.601h.372c.247.813.733 1.519 1.367 2.017l-.838 1.747a.47.47 0 0 0 .299.655l.715.195c-.393.901-.491 1.763-.579 2.538-.088.77-.164 1.435-.495 2.02a.47.47 0 0 0 .407.7.47.47 0 0 0 .408-.237c.426-.751.516-1.54.612-2.376.089-.777.18-1.578.564-2.394l.901.245a.47.47 0 0 0 .591-.42l.133-1.942c.305-.044.615-.125.929-.243 1.904-.718 3.687-2.763 4.24-4.861.753-2.858-.842-5.786-3.555-6.525zm-9.06 11.394l-1.438.392-.089-1.293c.168-.02.334-.051.497-.096A3.32 3.32 0 0 0 9 15.476l.559 1.165zm1.671-3.45l.244-1.273c.165.025.332.038.5.038s.334-.013.5-.038l.243 1.273H11.23zm3.308 4.6l.558-1.163a3.52 3.52 0 0 0 .472.166 3.49 3.49 0 0 0 .497.096l-.089 1.292-1.438-.392zm6.729-6.258c-.474 1.798-2.049 3.613-3.664 4.223-.356.135-.703.208-1.036.219h-.026c-.25.006-.493-.022-.727-.086-1.025-.279-1.838-1.191-2.07-2.324l-.365-1.909.359-.176a.47.47 0 0 0 .185-.636.47.47 0 0 0-.637-.185 3.03 3.03 0 0 1-.575.246c-.248.076-.494.113-.738.113-1.012 0-2.066-.672-2.891-1.844C8.285 8.043 7.81 6.621 7.81 5.37c0-2.444 1.867-4.433 4.161-4.433s4.161 1.989 4.161 4.433c0 .833-.219 1.776-.616 2.653a.47.47 0 0 0 .233.62.47.47 0 0 0 .62-.233 7.9 7.9 0 0 0 .663-2.386c.449-.035.897.007 1.336.127 2.219.605 3.517 3.019 2.895 5.382zM3.58 6.211c.113 0 .225-.04.315-.122h0a.47.47 0 0 0 .031-.662.47.47 0 0 0-.662-.031.47.47 0 0 0-.032.662c.092.102.22.153.347.153zM15.254 9.47a.47.47 0 0 0-.66.06h0a.47.47 0 0 0 .36.769.47.47 0 0 0 .301-.829z">
                                                </path>
                                                <path
                                                    d="M7.43 20.713h0a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm11.812-2.063h0a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm-2.296 2.485h0a.47.47 0 0 0-.468.469.47.47 0 0 0 .469.469.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm2.203-17.813a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469h0a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469z">
                                                </path>
                                            </svg>
                                            Entertainment
                                            <span class="text-body-tertiary fw-normal ps-2 ms-auto">347</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-body fw-normal py-1 px-0" href="#!">
                                            <svg class="flex-shrin-0 text-light-emphasis me-3"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M13.109 7.163h-2.662a.47.47 0 0 0-.469.469v1.612H8.363a.47.47 0 0 0-.469.469v2.659a.47.47 0 0 0 .469.469h1.614v1.612a.47.47 0 0 0 .469.469h2.662a.47.47 0 0 0 .469-.469V12.84h1.613a.47.47 0 0 0 .469-.469V9.712a.47.47 0 0 0-.469-.469h-1.613V7.631a.47.47 0 0 0-.469-.469zm1.613 3.018v1.722h-1.613a.47.47 0 0 0-.469.469v1.612h-1.725v-1.612a.47.47 0 0 0-.469-.469H8.832v-1.722h1.614a.47.47 0 0 0 .469-.469V8.1h1.725v1.612a.47.47 0 0 0 .469.469h1.613zm6.427 3.605l.324-.312c2.768-2.864 2.768-7.505.012-10.358-1.159-1.199-2.751-1.821-4.481-1.75-1.655.068-3.255.748-4.504 1.915l-.089.083c-.259.242-.527.492-.635.539-.109-.047-.376-.297-.635-.539l-.088-.083c-1.25-1.167-2.849-1.847-4.504-1.915-1.731-.071-3.322.551-4.48 1.75-2.758 2.852-2.758 7.494 0 10.346l2.313 2.23c.091.088.208.131.325.131a.47.47 0 0 0 .325-.806l-2.295-2.213C.332 10.311.334 6.259 2.742 3.768c1.95-2.019 5.391-1.93 7.67.199l.088.082c.549.513.851.796 1.275.796s.726-.283 1.275-.796l.088-.082c2.279-2.129 5.72-2.218 7.672-.199 2.407 2.491 2.409 6.544.006 9.037l-.715.688a4.63 4.63 0 0 0-.708-.054 4.61 4.61 0 0 0-4.604 4.599 4.63 4.63 0 0 0 .032.544l-3.046 2.937-3.717-3.582a.47.47 0 0 0-.663.012.47.47 0 0 0 .012.663l4.043 3.896c.091.088.208.131.325.131a.47.47 0 0 0 .325-.131l2.975-2.869c.652 1.75 2.341 3.001 4.317 3.001A4.61 4.61 0 0 0 24 18.038c0-1.916-1.179-3.562-2.851-4.252zm-1.755 7.916a3.67 3.67 0 0 1-3.667-3.663 3.67 3.67 0 0 1 3.667-3.662 3.67 3.67 0 0 1 3.668 3.662 3.67 3.67 0 0 1-3.668 3.663zm.001-6.101a.47.47 0 0 0-.469.469v1.971a.47.47 0 0 0 .469.469.47.47 0 0 0 .469-.469V16.07a.47.47 0 0 0-.469-.469zm0 3.935a.47.47 0 0 0-.469.469v.003c0 .259.21.467.469.467a.47.47 0 0 0 .469-.47.47.47 0 0 0-.469-.469zM5.889 16.484a.47.47 0 0 0 0 .663l.001.001c.091.091.211.137.33.137a.47.47 0 1 0-.332-.801z">
                                                </path>
                                            </svg>
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
                        </div>
                    </div>
                </aside>


                <!-- Listings grid -->
                <div class="col-lg-9">

                    <!-- Sort selector + Map view toggle -->
                    <div class="d-flex align-items-center gap-4 pb-3 mb-2 mb-xl-3">
                        <div class="fs-sm text-nowrap d-none d-md-inline">Showing 116 results</div>
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

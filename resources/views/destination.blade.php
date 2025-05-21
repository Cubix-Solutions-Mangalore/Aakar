@extends('frontend.layouts.app')

@section('content')



    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container pt-4 pb-5 mb-xxl-3">

            <!-- Breadcrumb -->
            <nav class="position-relative" aria-label="breadcrumb" style="z-index: 1021">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Destination</li>
                </ol>
            </nav>

            <!-- Listings grid -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-n2">

                @foreach ($place as $item)    
                <!-- Listing -->
                <div class="col pb-2">
                    <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent border-0">
                        <div class="bg-body-tertiary rounded overflow-hidden">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(280 / 416 * 100%)">
                                <img src="assets/img/listings/city-guide/v2/01.jpg" alt="Image">
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
                                    href="{{ route('deti.details', $item->id) }}">{{ $item->name }}</a>
                            </h3>
                        </div>
                        <div class="card-footer d-flex align-items-center gap-3 bg-transparent border-0 p-0">
                            <div class="d-flex align-items-center gap-1 fs-sm">
                              <b>Country</b>: {{ $item->country }}
                            </div>
                            <div class="d-flex align-items-center gap-1 fs-sm">
                               <b>City</b>: {{ $item->city }}
                            </div>
                            <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                                <i class="fi-map-pin"></i>
                                <span class="text-truncate">{{ $item->location }}</span>
                            </div>
                            <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                                <a href="{{ $item->gmap }}">Get on Map</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>

            {{-- <!-- Pagination -->
            <nav class="pt-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5 mt-4" aria-label="Listings pagination">
                <ul class="pagination pagination-lg">
                    <li class="page-item disabled me-auto">
                        <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#!"
                            aria-label="Previous page">
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
                        <a class="page-link rounded-pill" href="#!">8</a>
                    </li>
                    <li class="page-item ms-auto">
                        <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#"
                            aria-label="Next page">
                            <i class="fi-chevron-right mx-1"></i>
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </main>
@endsection

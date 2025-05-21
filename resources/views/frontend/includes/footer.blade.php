<!-- Page footer -->
<footer class="footer bg-body border-top pt-5" data-bs-theme="dark">
    <div class="container pt-sm-2 pt-md-3 pt-lg-4">
        <div class="accordion row pb-5 mb-sm-2 mb-md-3 mb-lg-4" id="footerLinks">

            <!-- Logo + Contacts -->
            <div class="col-sm-5 col-md-4 col-lg-3">
                <a class="d-inline-flex align-items-center text-dark-emphasis text-decoration-none mb-4"
                    href="index.html">
                    <span class="flex-shrink-0 text-primary rtl-flip me-2">
                      <img src="{{ asset('assets/img/travelTechLogo.png') }}" alt="Image" class="image"
                      style="width: 60px; height: auto;">
                    </span>
                    <span class="fs-4 fw-semibold">Travel Tech</span>
                </a>
                <ul class="list-unstyled gap-3">
                    <li>
                        <div class="position-relative d-flex align-items-center">
                            <i class="fi-mail fs-lg text-body me-2"></i>
                            <a class="text-dark-emphasis text-decoration-none hover-effect-underline stretched-link"
                                href="mailto:contact@example.com">travel.tech@gmail.com</a>
                        </div>
                    </li>
                    <li>
                        <div class="position-relative d-flex align-items-center">
                            <i class="fi-phone-call fs-lg text-body me-2"></i>
                            <a class="text-dark-emphasis text-decoration-none hover-effect-underline stretched-link"
                                href="tel:+15053753082">+91 6363348212</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="accordion-item col-sm-4 col-lg-3 border-0">
                <h6 class="accordion-header" id="quickLinksHeading">
                    <span class="h5 d-none d-sm-block">Quick links</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse"
                        data-bs-target="#quickLinks" aria-expanded="false" aria-controls="quickLinks">Quick
                        links</button>
                </h6>
                <div class="accordion-collapse collapse d-sm-block" id="quickLinks" aria-labelledby="quickLinksHeading"
                    data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-1 pt-lg-2 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="/destination">Destination</a>
                        </li>
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="/accomodation">Accommodation</a>
                        </li>
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="popular-vacation">Popular Vacation Spots</a>
                        </li>
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="/popular-activities">Popular Activities</a>
                        </li>
                    </ul>
                </div>
                <hr class="d-sm-none my-0">
            </div>
            <div class="accordion-item col-sm-3 col-lg-2 col-xxl-3 border-0">
                <h6 class="accordion-header" id="profileLinksHeading">
                    <span class="h5 d-none d-sm-block">Profile</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse"
                        data-bs-target="#profileLinks" aria-expanded="false"
                        aria-controls="profileLinks">Profile</button>
                </h6>
                <div class="accordion-collapse collapse d-sm-block" id="profileLinks"
                    aria-labelledby="profileLinksHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-1 pt-lg-2 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="#!">My account</a>
                        </li>
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="#!">Help center</a>
                        </li>
                        <li class="pt-1">
                            <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                href="#!">Privacy policy</a>
                        </li>
                    </ul>
                </div>
                <hr class="d-sm-none my-0">
            </div>

            <!-- Subscription form -->
            <div class="col-lg-4 col-xxl-3 pt-4 pt-md-5 pt-lg-0 mt-3 mt-md-0">
                <h6 class="pb-1 pb-lg-0 mb-lg-4">
                    <span class="h5 d-none d-sm-block mb-0">Subscribe for updates</span>
                    <span class="d-sm-none">Subscribe for updates</span>
                </h6>
                <form class="d-flex flex-column flex-sm-row flex-lg-column gap-3 needs-validation" novalidate="">
                    <div class="position-relative w-100">
                        <i class="fi-mail position-absolute top-50 start-0 translate-middle-y text-body ms-3"></i>
                        <input type="email" class="form-control form-icon-start text-start rounded-pill"
                            placeholder="Your email" aria-label="Email input" required="">
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill px-4">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Contact link + Social links + Copyright -->
        <div class="border-top pt-2 pb-md-2">
            <div class="row align-items-center py-4">
                <div class="col-lg-4 text-center text-lg-start mb-3 mb-lg-0">
                    <div class="h5 d-none d-sm-block mb-0">
                        <span class="text-body-secondary fw-normal me-3">Need help?</span>
                        <a class="text-white text-decoration-none hover-effect-underline" href="#!">Contact
                            us</a>
                    </div>
                    <div class="h6 d-sm-none mb-0">
                        <span class="text-body-secondary fw-normal me-2">Need help?</span>
                        <a class="text-white text-decoration-none hover-effect-underline" href="#!">Contact
                            us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-4 d-flex justify-content-center mb-3 mb-lg-0">
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                        data-bs-toggle="tooltip"
                        data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-white opacity-75 p-0&quot;></div></div>"
                        title="Instagram" aria-label="Follow us on Instagram">
                        <i class="fi-instagram"></i>
                    </a>
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                        data-bs-toggle="tooltip"
                        data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-white opacity-75 p-0&quot;></div></div>"
                        title="Facebook" aria-label="Follow us on Facebook">
                        <i class="fi-facebook"></i>
                    </a>
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                        data-bs-toggle="tooltip"
                        data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-white opacity-75 p-0&quot;></div></div>"
                        title="X (Twitter)" aria-label="Follow us on X (Twitter)">
                        <i class="fi-x"></i>
                    </a>
                </div>
                <div class="col-lg-5 col-xl-4 d-lg-flex justify-content-end">
                    <p class="text-body-secondary fs-sm text-center text-lg-start mb-0">© All rights reserved. Made by
                        <a class="text-body fw-medium text-decoration-none hover-effect-underline"
                            href="https://createx.studio/" target="_blank" rel="noreferrer">Aakar Develpors
                            Delemma</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

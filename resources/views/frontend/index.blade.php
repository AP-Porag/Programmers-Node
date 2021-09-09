@extends('layouts.website')

@section('content')
    <!-- Main content -->
    <section class="slice py-7" id="home">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-3.svg')}}" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        It's time to amplify your <strong class="text-primary">online business</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="https://webpixels.io/themes/quick-free-bootstrap-theme" class="btn btn-primary btn-icon" target="_blank">
                            <span class="btn-inner--text">Get started</span>
                            <span class="btn-inner--icon"><i data-feather="chevron-right"></i></span>
                        </a>
                        <a href="{{route('about-us')}}" class="btn btn-neutral btn-icon d-none d-lg-inline-block" target="_blank">Learn more about us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    section service start--}}
        <section class="slice slice-lg pt-10 bg-primary" id="about">
            <!-- SVG separator -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
            </div>
            <!-- Container -->
            <div class="container">
                <div class="col-lg-8 text-center text-lg-left">
                    <!-- Heading -->
                    <h1 class="text-white mb-4">
                        We built incredible web products for designers &amp; developers
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white opacity-8">
                        For over 5 years, we pride ourselves on our commitment to excellence, as well as our ability to deliver for our customers.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5">
                        <a href="#" class="btn btn-warning btn-lg btn-icon">
                            <span class="btn-inner--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            </span>
                            <span class="btn-inner--text">Contact us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
{{--    section service end--}}
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary" id="service">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <span class="badge badge-soft-success badge-pill badge-lg">
                        Get started
                    </span>
                    <h2 class=" mt-4">Carefuly crafted components ready to use in your project</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Use Atomic Design to build components, sections and, then, pages.</p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Unleash you creativity</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('frontend/assets/img/svg/illustrations/illustration-6.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Get more results</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('frontend/assets/img/svg/illustrations/illustration-7.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Increase your audience</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="py-6">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <h5 class="h3">Need a quick admin panel for your website?</h5>
                        <p class="lead my-4">
                            With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for modern startups</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Ready to be customized</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="card mb-0 mr-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img//theme/light/screen-1-1000x800.jpg')}}" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h5 class="h3">A modern project management dashboard</h5>
                        <p class="lead my-4">
                            With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for modern startups</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Ready to be customized</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Designed for every devices</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-0 ml-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img//theme/light/screen-2-1000x800.jpg')}}" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                Are you ready to grow faster?
                            </h2>
                            <h4 class="text-white mt-3">Create your own experience</h4>
                            <!-- Play button -->
                            <a href="#" class="btn btn-primary btn-icon mt-4">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0" id="portfolio">
        <div class="container position-relative zindex-100">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6 mt-2">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-2">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-2">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-4">
                                <img alt="Image placeholder" src="{{asset('frontend/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Modular</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-white" data-toggle="modal" data-target=".docs-example-modal-xl">project Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn btn-primary btn-icon mt-4">Load more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-secondary" id="contact">
        <div class="container text-center">
            <div class="row row-grid align-items-center">
                <div class="col-lg-6">
                    <!-- Heading -->
                    <h1 class="h1 text-dark text-center text-lg-left my-4">
                        Have a project <strong>in mind?</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-dark text-center text-lg-left opacity-8">
                        Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5 text-center text-lg-left">
                        <a href="{{route('contact')}}" data-scroll-to="" class="btn btn-dark btn-lg btn-icon">
                            <span class="btn-inner--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </span>
                            <span class="btn-inner--text">Write a message</span>
                        </a>
                    </div>
                    <!-- Clients -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                        <div class="col-auto text-sm text-dark pl-0 pr-4">Trusted by:</div>
                        <div class="client-group col">
                            <div class="row">
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="{{asset('frontend/assets/img/clients/svg/google-gray.svg')}}">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="{{asset('frontend/assets/img/clients/svg/spotify-gray.svg')}}">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="{{asset('frontend/assets/img/clients/svg/airbnb-gray.svg')}}">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="{{asset('frontend/assets/img/clients/svg/paypal-gray.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <h3>150 Southeast Pidgeon Meadow<br>Claflin Terrace, 305458</h3>
                    <p class="lead my-4">
                        E: <a href="#">support@webpixels.io</a><br>
                        T: (555) 257-393
                    </p>
                    <p>
                        Want to share any feedback with us, report a technical issue or just ask us a question? Fill free to contact us and we will get back to you shortly.
                    </p>
                </div>
            </div>
            <!-- Pricing -->
            <div class="row ">
                <div class="col-lg-6">
                    <div class="container position-relative zindex-100">
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-6 text-center">
                                <h3>Contact us</h3>
                                <p class="lh-190">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- Form -->
                                <form>
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="text" placeholder="Your name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="email" placeholder="email@example.com" required="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="text" placeholder="+40-745-234-567" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-lg" placeholder="Tell us a few words ..." rows="3" required=""></textarea>
                                    </div>
                                    <div class="text-center">
                                        <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                                        <button type="reset" class="btn-reset d-none"></button>
                                        <button type="submit" class="btn btn-block btn-lg btn-primary mt-4">Send your message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830872278!2d-74.1197639579598!3d40.69766374873451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sro!4v1580299124407!5m2!1sen!2sro" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" class="rounded"></iframe>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p class="mb-2">
                    Both pricings contains all 6 months free support. Need more?
                </p>
                <a href="{{route('contact')}}" class="text-primary text-underline--dashed">Contact us<i data-feather="arrow-right" class="ml-2"></i></a>
            </div>
        </div>
    </section>
    <div class="modal fade docs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title h6" id="myExtraLargeModalLabel">Extra large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-6">
                            <img src="http://127.0.0.1:8000/frontend/assets/img/theme/light/img-v-4.jpg" alt="Image" class="rounded-lg img-fluid">
                            <div class="text-right mt-4">
                                <img src="http://127.0.0.1:8000/frontend/assets/img/theme/light/img-1-1000x1000.jpg" alt="Image" class="rounded-lg img-fluid w-50">
                            </div>
                        </div>
                        <div class="col-lg-7 col-6">
                            <img src="http://127.0.0.1:8000/frontend/assets/img/theme/light/img-1-1000x800.jpg" alt="Image" class="rounded-lg img-fluid w-75">
                            <div class="text-right mt-4">
                                <img src="http://127.0.0.1:8000/frontend/assets/img/theme/light/img-2-1000x800.jpg" alt="Image" class="rounded-lg img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Live Demo</div>
                        <div class="col-md-6">Source Code</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            The standard Lorem Ipsum passage, used since the 1500s
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

                            1914 translation by H. Rackham
                            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

                            Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

                            1914 translation by H. Rackham
                            "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection

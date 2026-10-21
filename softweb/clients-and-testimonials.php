<!DOCTYPE html>
<html lang="en">

<?php
include 'components/meta_config.php';
include 'components/head.php';
?>

<body class="custom-cursor">

    <?php include 'components/preloader.php'; ?>

    <!-- /.preloader -->
    <div class="page-wrapper">

        <?php include 'components/header.php'; ?>

        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/main-slider-bg-4-4.jpg);">
            </div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Clients & Testimonials</h2>
                    <ul class="insuba-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>Clients & Testimonials</span></li>
                    </ul><!-- /.insuba-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/images/resources/page-header-1-1.png" alt="image" class="page-header__image">
            <img src="assets/images/shapes/page-header-shape-1-1.png" alt="shape" class="page-header__shape-one">
            <div class="page-header__shape-two"></div><!-- /.page-header__shape-two -->
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-three -->
        </section><!-- /.page-header -->

        <style>
        /* Custom Client Grid Styles */
        .client-carousel .row {
            --bs-gutter-y: 1.5rem;
            /* Standardizes row spacing */
        }

        .client-carousel .client-carousel__item {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            /* Gives an implicit background card design if needed */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
            /* Soft premium shadow aesthetic */
            transition: all 0.3s ease-in-out;
            height: 110px;
            /* Forces uniform height across the dynamic grid layout */
            position: relative;
            overflow: hidden;
        }

        .client-carousel .client-carousel__item:hover {
            transform: translateY(-5px);
            /* Soft lift interaction on hover */
            box-shadow: 0px 15px 40px 0px rgba(0, 0, 0, 0.08);
        }

        .client-carousel .client-carousel__image,
        .client-carousel .client-carousel__hover__image {
            max-height: 100%;
            max-width: 100%;
            width: auto !important;
            /* Prevents unwanted stretching distortion */
            object-fit: contain;
        }

        .client-carousel .client-carousel__hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            /* Keeps color overlay card container background consistent */
        }
        </style>

        <div class="client-carousel @@extraClassName">
            <div class="container">
                <!-- Replaced carousel wrapper with a responsive grid layout -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">

                    <!-- Card 1 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-1.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-1.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-2.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-2.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-3.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-3.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-4.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-4.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-5.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-5.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-6.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-6.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-7.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-7.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-8.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-8.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-9.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-9.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-10.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-10.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 11 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-11.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-11.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 12 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-12.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-12.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 13 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-13.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-13.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 14 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-14.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-14.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 15 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-15.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-15.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 16 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-16.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-16.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 17 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-17.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-17.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 18 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-18.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-18.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 19 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-19.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-19.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 20 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-20.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-20.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 21 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-21.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-21.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 22 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-22.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-22.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 23 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-23.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-23.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 24 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-24.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-24.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 25 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-25.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-25.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 26 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-26.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-26.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 27 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-27.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-27.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 28 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-28.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-28.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 29 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-29.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-29.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                    <!-- Card 30 -->
                    <div class="col">
                        <div class="client-carousel__item w-100 m-0">
                            <img src="assets/images/resources/brand-1-30.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                class="client-carousel__image">
                            <div class="client-carousel__hover">
                                <img src="assets/images/resources/brand-1-30.png" alt="Best Digital Marketing Agency in Vapi India | Softweb"
                                    class="client-carousel__hover__image">
                            </div>
                        </div>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <div class="testimonials-three section-space" id="testimonials">
            <div class="container">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <div class="sec-title__box">
                            <div class="sec-title__box__inner"></div>
                        </div><!-- /.sec-title__box -->
                        <h6 class="sec-title__tagline">Testimonials</h6><!-- /.sec-title__tagline -->
                    </div><!-- /.sec-title__top -->
                    <h3 class="sec-title__title">Providing The Best Customer <br> Insurance Client</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->

                <div class="testimonials-three__carousel insuba-owl__carousel insuba-owl__carousel--basic-nav owl-carousel owl-theme"
                    data-owl-options='{
                "items": 1,
                "margin": 10,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": true,
                "navText": ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1,
                        "nav": true,
                        "dots": false,
                        "margin": 10
                    },
                    "992": {
                        "items": 2,
                        "margin": 30
                    }
                }
            }'>

                    <!-- Testimonial 1 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-1.png" alt="Sunil Jadli">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Our new company website was delivered quickly and looks professional. It is simple
                                    to use on both mobile and desktop, and our customers now find information much
                                    faster. This has improved our business reach a lot."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Mr. Sunil Jadli</h3>
                                    <p class="testimonial-card-two__designation">Hubergroup, VAPI</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-2.png" alt="Anand Dubey">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "We got our old website redesigned and it now has a modern, attractive look. The
                                    speed is faster, and navigation is very simple. Our clients immediately noticed the
                                    change, and it added great value to our brand image."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Anand Dubey</h3>
                                    <p class="testimonial-card-two__designation">CEO, AP ENGINEERS</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-3.png" alt="Bhaskar Dhar">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Their graphic design team created creative brochures, banners, and social media
                                    posts for us. The designs were modern, professional, and helped us stand out in the
                                    market. Our branding feels much stronger now."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Bhaskar Dhar</h3>
                                    <p class="testimonial-card-two__designation">Director, MAXWORTH MARKETING</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-4.png" alt="Bhasker Purohit">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Our Facebook and Instagram ads were handled very well. The creatives were engaging,
                                    and targeting was perfect. We started receiving genuine leads within days, and our
                                    sales inquiries went up significantly."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Bhasker Purohit</h3>
                                    <p class="testimonial-card-two__designation">Director, MY RANGOLI</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-5.png" alt="Mahesh Patel">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Google 360 virtual tour gave our customers a real view of our office without them
                                    being here physically. It built instant trust, especially with clients outside the
                                    city, and added a professional edge to our profile."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Mahesh Patel</h3>
                                    <p class="testimonial-card-two__designation">Director, LIBRA ELECTRONICS</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-6.png" alt="Hiral Thakor">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Thank You Softweb, During an industrial exhibition, their team managed our stall
                                    design, graphics, and
                                    promotion. Visitors appreciated the professional setup, and we generated strong
                                    business leads from the event."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Hiral Thakor</h3>
                                    <p class="testimonial-card-two__designation">CEO, MARKETING</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 7 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-7.png" alt="Tamim Sultan">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "Their complete package of website development and digital marketing has helped us
                                    reach more people. We now get regular inquiries from our website and social
                                    platforms. The support team is always available for help."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Tamim Sultan</h3>
                                    <p class="testimonial-card-two__designation">BNI Grandeur, VAPI</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Testimonial 8 -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="700ms">
                        <div class="testimonial-card-two">
                            <div class="testimonial-card-two__shape">
                                <div class="testimonial-card-two__shape__bg"
                                    style="background-image:url(assets/images/shapes/testimonial-card-shape-3-1.png);">
                                </div>
                            </div>
                            <div class="testimonial-card-two__image">
                                <img src="assets/images/testimonials/testimonial-8.png" alt="Aakash Shah">
                                <span class="testimonial-card-two__image__quote">
                                    <i class="icon-quote"></i>
                                </span>
                            </div>
                            <div class="testimonial-card-two__content">
                                <div class="testimonial-card-two__ratings">
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                    <span class="testimonial-card-two__ratings__icon"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="testimonial-card-two__quote">
                                    "From logos to posters, their graphic designs gave our brand a professional and
                                    stylish identity. Every design was simple, attractive, and effective. Our customers
                                    now recognize and remember our brand easily."
                                </p>
                                <div class="testimonial-card-two__identity">
                                    <h3 class="testimonial-card-two__name">Aakash Shah</h3>
                                    <p class="testimonial-card-two__designation">BNI Grandeur, VAPI</p>
                                </div>
                            </div>
                            <span class="testimonial-card-two__quote-icon">
                                <i class="icon-quote-2"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div><!-- /.container -->
            <img src="assets/images/shapes/testimonials-shape-3-1.png" alt="Best Digital Marketing Agency in Vapi India | Softweb" class="testimonials-three__shape-one">
            <img src="assets/images/shapes/testimonials-shape-3-2.png" alt="Best Digital Marketing Agency in Vapi India | Softweb" class="testimonials-three__shape-two">
        </div><!-- /.testimonials-three section-space -->

        <?php include "components/service-cta.php";?>

        <section class="section-space-top"></section>

        <?php include 'components/footer.php'; ?>

    </div><!-- /.page-wrapper -->

    <?php include 'components/mob-nav.php'; ?>
</body>

</html>
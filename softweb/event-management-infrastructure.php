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
                    <h2 class="page-header__title">Event Management & <br> Infrastructure</h2>
                    <ul class="insuba-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>Event Management & Infrastructure</span></li>
                    </ul><!-- /.insuba-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/images/resources/page-header-1-1.png" alt="image" class="page-header__image">
            <img src="assets/images/shapes/page-header-shape-1-1.png" alt="shape" class="page-header__shape-one">
            <div class="page-header__shape-two"></div><!-- /.page-header__shape-two -->
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-three -->
        </section><!-- /.page-header -->

        <section class="blog-details-page section-space">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-details">

                            <style>

                            /* Main Container Wrapper */
                            .blog-details-box {
                                font-family: 'Poppins', 'Helvetica Neue', Arial, sans-serif;
                                color: #333333;
                                line-height: 1.6;
                            }

                            /* --- Section Typography & Headers --- */
                            .blog-details-box h2 {
                                font-size: 1.8rem;
                                font-weight: 800;
                                color: #111111;
                                letter-spacing: 0.5px;
                                margin-bottom: 12px;
                                text-transform: uppercase;
                            }

                            .blog-details-box h3 {
                                font-size: 1.3rem;
                                font-weight: 600;
                                color: #007bff;
                                /* Primary regional highlight color */
                                margin-bottom: 15px;
                            }

                            /* Main Section Titles Styling Rule */
                            .section-title.text-left {
                                border-bottom: 2px solid #f0f0f0;
                                padding-bottom: 20px;
                            }

                            .section-title.text-left h3 {
                                margin-bottom: 0;
                                color: #6c757d;
                                font-weight: 500;
                                letter-spacing: 1px;
                            }

                            /* --- Content Paragraphs --- */
                            .blog-details-box p {
                                font-size: 1rem;
                                color: #555555;
                                margin-bottom: 20px;
                            }

                            .blog-details-box p strong {
                                color: #111111;
                                font-weight: 600;
                            }

                            /* --- Service Modular Items Card Grid --- */
                            .service-item {
                                background: #f8f9fa;
                                padding: 25px 30px;
                                border-radius: 12px;
                                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                            }

                            .service-item:hover {
                                transform: translateY(-3px);
                                background: #ffffff;
                                box-shadow: 0 10px 25px rgba(0, 123, 255, 0.08);
                            }

                            .service-item h3 {
                                display: flex;
                                align-items: center;
                                color: #1a1a1a;
                                font-size: 1.25rem;
                                font-weight: 700;
                                margin-bottom: 15px;
                            }

                            /* Header Angular Right Icon Fix */
                            .service-item h3 i.fa-angle-right {
                                color: #007bff;
                                margin-right: 10px;
                                font-size: 1.1rem;
                                transition: transform 0.2s ease;
                            }

                            .service-item:hover h3 i.fa-angle-right {
                                transform: translateX(4px);
                            }

                            /* --- Lists Layout Systems (Icon Lists) --- */
                            ul.fa-lists {
                                list-style: none;
                                padding-left: 0;
                                margin-top: 10px;
                                margin-bottom: 20px;
                            }

                            ul.fa-lists li {
                                position: relative;
                                padding-left: 28px;
                                margin-bottom: 10px;
                                font-size: 0.95rem;
                                color: #495057;
                                display: flex;
                                align-items: flex-start;
                            }

                            /* Checkmark Icon Design Alignment */
                            ul.fa-lists li>i.fa-check-circle {
                                position: absolute;
                                left: 0;
                                top: 3px;
                                color: #28a745;
                                /* Success Green for inclusions */
                                font-size: 1.05rem;
                            }

                            /* Nested List Configuration Rules (e.g. Flower Selections) */
                            ul.fa-lists ul.fa-lists {
                                margin-top: 8px;
                                margin-bottom: 5px;
                            }

                            ul.fa-lists ul.fa-lists li {
                                font-size: 0.9rem;
                                color: #6c757d;
                                padding-left: 20px;
                            }

                            ul.fa-lists ul.fa-lists li>i.fa-angle-right {
                                position: absolute;
                                left: 0;
                                top: 4px;
                                color: #6c757d;
                            }

                            /* --- Why Choose Us Section --- */
                            .why-choose-us {
                                background: #e9f3ff;
                                /* Subdued blue focus container background */
                                padding: 35px;
                                border-radius: 14px;
                                border: 1px solid #dee2e6;
                            }

                            .why-choose-us h2 {
                                color: #0056b3;
                                font-size: 1.5rem;
                                margin-bottom: 20px;
                            }

                            .why-choose-us ul.fa-lists li {
                                color: #212529;
                                font-weight: 500;
                                margin-bottom: 12px;
                            }

                            .why-choose-us ul.fa-lists li:last-child {
                                margin-bottom: 0;
                            }

                            .why-choose-us ul.fa-lists li>i.fa-check-circle {
                                color: #007bff;
                                /* Accent color matching your theme */
                            }

                            /* --- Utilities Margin Layout Closures --- */
                            .mb-10 {
                                margin-bottom: 10px;
                            }

                            .mb-30 {
                                margin-bottom: 30px;
                            }

                            .mb-40 {
                                margin-bottom: 40px;
                            }

                            .mb-50 {
                                margin-bottom: 50px;
                            }

                            .ms-3 {
                                margin-left: 1rem !important;
                            }

                            /* --- Responsive Media Viewport Breaks --- */
                            @media (max-width: 768px) {
                                .blog-details-box {
                                    padding: 25px 20px;
                                }

                                .blog-details-box h2 {
                                    font-size: 1.4rem;
                                }

                                .blog-details-box h3 {
                                    font-size: 1.15rem;
                                }

                                .service-item {
                                    padding: 20px;
                                }

                                .why-choose-us {
                                    padding: 20px;
                                }
                            }
                            </style>

                            <div class="blog-details-box">

                                <!-- Section Header -->
                                <div class="section-title text-left mb-40">
                                    <h2>EVENT MANAGEMENT &amp; EVENT INFRASTRUCTURE PROVIDER</h2>
                                    <h3>Vapi • Daman • Silvassa</h3>
                                </div>

                                <!-- Intro -->
                                <div class="content mb-50">
                                    <p>
                                        We provide <strong>end-to-end event management and complete event infrastructure
                                            solutions</strong>
                                        for exhibitions, corporate events, industrial expos, conferences, product
                                        launches, and public
                                        events
                                        across <strong>Vapi, Daman, and Silvassa</strong>.
                                    </p>
                                    <p>
                                        With strong local execution, reliable manpower, and quality infrastructure, we
                                        ensure your event
                                        runs
                                        smoothly from setup to closing.
                                    </p>
                                </div>

                                <!-- Services -->
                                <h2 class="mb-30">Our Services</h2>

                                <!-- Octanorm -->
                                <div class="service-item mb-40">
                                    <h3><i class="fa fa-angle-right"></i> Octanorm Exhibition Stalls</h3>
                                    <p>
                                        We design and supply <strong>standard and customized Octanorm stalls</strong>
                                        suitable for
                                        industrial exhibitions and trade fairs.
                                    </p>
                                    <p><strong>Stall Inclusions:</strong></p>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> Table &amp; Chairs</li>
                                        <li><i class="fa fa-check-circle"></i> Carpet Flooring</li>
                                        <li><i class="fa fa-check-circle"></i> Plug Point (Power Socket)</li>
                                        <li><i class="fa fa-check-circle"></i> Spotlight Lighting</li>
                                        <li><i class="fa fa-check-circle"></i> Name Fascia (Company Name Display)</li>
                                    </ul>
                                    <p><strong>Power Backup:</strong></p>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> DG (Diesel Generator) available on
                                            <strong>rental
                                                basis</strong>
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Diesel generator support for
                                            uninterrupted power during the
                                            event</li>
                                    </ul>


                                    <p>
                                        Ideal for exhibitors who want a <strong>professional, clean, and ready-to-use
                                            stall
                                            solution</strong>.
                                    </p>
                                </div>

                                <!-- Stage -->
                                <div class="service-item mb-40">
                                    <h3><i class="fa fa-angle-right"></i> Stage &amp; Podium Decoration</h3>
                                    <p>
                                        We offer complete <strong>stage and podium setup</strong> for inaugurations,
                                        conferences,
                                        seminars, and award ceremonies.
                                    </p>
                                    <p><strong>Decoration Options:</strong></p>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> Elegant flower decoration</li>
                                        <li><i class="fa fa-check-circle"></i> Podium &amp; stage backdrop setup</li>
                                        <li><i class="fa fa-check-circle"></i> Separate pricing for:
                                            <ul class="fa-lists ms-3">
                                                <li><i class="fa fa-angle-right"></i> Artificial flowers</li>
                                                <li><i class="fa fa-angle-right"></i> Fresh flowers</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p>
                                        Designed to enhance the <strong>visual appeal and brand presence</strong> of
                                        your event.
                                    </p>
                                </div>

                                <!-- AV -->
                                <div class="service-item mb-40">
                                    <h3><i class="fa fa-angle-right"></i> Audio-Visual (AV) Services</h3>
                                    <p>
                                        Professional <strong>audio-visual solutions</strong> for smooth communication
                                        and impactful
                                        presentations.
                                    </p>
                                    <p><strong>AV Facilities Include:</strong></p>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> Live demonstration setup</li>
                                        <li><i class="fa fa-check-circle"></i> Sound system with microphones</li>
                                        <li><i class="fa fa-check-circle"></i> LED / Projector display</li>
                                        <li><i class="fa fa-check-circle"></i> Complete AV coordination and technical
                                            support</li>
                                    </ul>

                                    <p>Perfect for product launches, presentations, and live demos.</p>
                                </div>

                                <!-- Branding -->
                                <div class="service-item mb-40">
                                    <h3><i class="fa fa-angle-right"></i> Branding &amp; Event Promotion</h3>
                                    <p>
                                        We help you create <strong>strong visual branding</strong> throughout the event
                                        venue.
                                    </p>
                                    <p><strong>Branding Services:</strong></p>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> Complete event branding planning</li>
                                        <li><i class="fa fa-check-circle"></i> Flex printing &amp; installation</li>
                                        <li><i class="fa fa-check-circle"></i> Standees</li>
                                        <li><i class="fa fa-check-circle"></i> Backdrops</li>
                                        <li><i class="fa fa-check-circle"></i> Directional &amp; promotional signage
                                        </li>
                                    </ul>

                                    <p>Our branding solutions ensure maximum visibility and professional presentation of
                                        your brand.</p>
                                </div>

                                <!-- Why Choose Us -->
                                <div class="why-choose-us mt-50">
                                    <h2 class="mb-10">Why Choose Us?</h2>
                                    <ul class="fa-lists">
                                        <li><i class="fa fa-check-circle"></i> One-stop solution for event management
                                            &amp; infrastructure
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Strong execution team in
                                            Vapi–Daman–Silvassa region</li>
                                        <li><i class="fa fa-check-circle"></i> Reliable setup, timely delivery &amp;
                                            on-site support</li>
                                        <li><i class="fa fa-check-circle"></i> Flexible rental options as per event
                                            requirement</li>
                                        <li><i class="fa fa-check-circle"></i> Experience with industrial exhibitions
                                            &amp; corporate events
                                        </li>
                                    </ul>
                                </div>


                            </div>

                        </div><!-- /.blog-details -->
                    </div><!-- /.col-xl-8 col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details-page -->

        <?php include "components/service-cta.php";?>

        <section class="section-space-top"></section>

        <?php include 'components/footer.php'; ?>

    </div><!-- /.page-wrapper -->

    <?php include 'components/mob-nav.php'; ?>
</body>

</html>
<div class="header">
    <div class="topbar topbar--three">
        <div class="container-fluid">
            <div class="topbar__inner">
                <div class="topbar__right">
                    <div class="topbar__language">
                        <!-- /.sr-only -->
                        <!-- Added 'notranslate' class to prevent Google from touching this element -->
                        <select class="selectpicker notranslate" id="language-select-header">
                            <option value="en">English (Original)</option>
                            <option value="hi">Hindi (हिंदी)</option>
                            <option value="gu">Gujarati (ગુજરાતી)</option>
                        </select>
                        <!-- Hidden container for Google Translate -->
                        <div id="google_translate_element" style="position:absolute; top:-9999px;"></div>

                        <style>
                        /* Prevent the top banner and iframe from appearing */
                        .goog-te-banner-frame,
                        .skiptranslate {
                            display: none !important;
                        }

                        body {
                            top: 0 !important;
                        }
                        </style>

                        <script>
                        // 1. Force reset to English by clearing the Google Translate cookie
                        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain=" + window.location
                            .hostname + "; path=/;";

                        // 2. Google Translate Initialization
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                includedLanguages: 'en,hi,gu',
                                autoDisplay: false
                            }, 'google_translate_element');
                        }

                        // 3. Load the Google script
                        (function() {
                            var gt = document.createElement('script');
                            gt.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                            document.getElementsByTagName('head')[0].appendChild(gt);
                        })();

                        // 4. Handle dropdown change
                        document.getElementById('language-select-header').addEventListener('change', function() {
                            var lang = this.value;
                            var selectField = document.querySelector('.goog-te-combo');

                            if (selectField) {
                                if (selectField.value !== lang) {
                                    selectField.value = lang;
                                    selectField.dispatchEvent(new Event('change'));
                                }
                            }
                        });
                        </script>
                    </div><!-- /.topbar__language -->
                    <div class="topbar__social social-links">
                        <a href="https://www.facebook.com/softwebindia/" target="blank"> <span
                                class="social-links__icon">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </span><!-- /.social-links__icon -->
                        </a>
                        <a href="https://twitter.com/softwebvapi" target="blank"> <span class="social-links__icon">
                                <i class="fab fa-x-twitter" aria-hidden="true"></i>
                            </span><!-- /.social-links__icon -->
                        </a>
                        <a href="https://www.instagram.com/softwebvapi/" target="blank"> <span
                                class="social-links__icon">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </span><!-- /.social-links__icon -->
                        </a>
                        <a href="https://www.linkedin.com/company/softwebindia/" target="blank"> <span
                                class="social-links__icon">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            </span><!-- /.social-links__icon -->
                        </a>
                        <a href="https://www.threads.com/@softwebvapi" target="blank"> <span class="social-links__icon">
                                <i class="fab fa-threads" aria-hidden="true"></i>
                            </span><!-- /.social-links__icon -->
                        </a>
                    </div><!-- /.topbar__social social-links -->
                </div><!-- /.topbar__right -->
                <ul class="list-unstyled topbar__info">
                    <li>
                        <div class="topbar__info__icon-box topbar__info__icon--email">
                            <span class="topbar__info__icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <a href="mailto:info@softwebtechnology.com">info@softwebtechnology.com</a>
                    </li>
                    <li>
                        <div class="topbar__info__icon-box">
                            <span class="topbar__info__icon">
                                <i class="fas fa-cart-shopping"></i>
                            </span>
                        </div>
                        <a href="https://softwebtechnology.supersite2.myorderbox.com/" target="_blank">Book your
                            Domain</a>
                    </li>
                </ul><!-- /.list-unstyled topbar__info -->
            </div><!-- /.topbar__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar -->

    <header class="main-header main-header--four sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo logo-retina">
                    <a href="/">
                        <img src="assets/images/softweb-logo.svg" alt="Insuba HTML">
                    </a>
                </div><!-- /.main-header__logo -->
                <div class="main-header__right">
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.mobile-nav__toggler -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <!-- About -->
                            <li class="dropdown">
                                <a href="about-us.php">About Us</a>
                                <ul>
                                    <li>
                                        <a href="company-profile.php">Company Profile</a>
                                    </li>
                                    <li>
                                        <a href="why-choose-us.php">Why Choose Us</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Services -->
                            <li class="dropdown">
                                <a href="#!">Services</a>

                                <ul>

                                    <!-- Company Profile -->
                                    <li>
                                        <a href="company_profile_design.php">
                                            Company Profile Design
                                        </a>
                                    </li>

                                    <!-- Web Development -->
                                    <li class="dropdown">
                                        <a href="web-development.php">Web Development</a>

                                        <ul>
                                            <li>
                                                <a href="website-redesign.php">
                                                    Website Redesign
                                                </a>
                                            </li>

                                            <li>
                                                <a href="ecommerce-website.php">
                                                    E-Commerce Website
                                                </a>
                                            </li>

                                            <li>
                                                <a href="web-maintenance.php">
                                                    Web Maintenance
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- Digital Marketing -->
                                    <li class="dropdown">
                                        <a href="digital-marketing.php">
                                            Digital Marketing
                                        </a>

                                        <ul>

                                            <!-- SEO -->
                                            <li class="dropdown">
                                                <a href="seo.php">SEO</a>

                                                <ul>
                                                    <li>
                                                        <a href="google-my-business.php">
                                                            Google My Business
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="on-page-seo.php">
                                                            On-Page SEO
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="off-page-seo.php">
                                                            Off-Page SEO
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!-- Social Media -->
                                            <li class="dropdown">
                                                <a href="social-media-marketing.php">
                                                    Social Media Marketing
                                                </a>

                                                <ul>
                                                    <li>
                                                        <a href="linkedin-marketing.php">
                                                            LinkedIn Marketing
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="youtube-marketing.php">
                                                            YouTube Marketing
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!-- FB Insta Ads -->
                                            <li class="dropdown">
                                                <a href="facebook-instagram-ads.php">
                                                    FB & Insta Ads
                                                </a>

                                                <ul>
                                                    <li>
                                                        <a href="fb-brand-awareness.php">
                                                            FB Brand Awareness
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="fb-lead-generation.php">
                                                            FB Lead Generation
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="fb-traffic-ads.php">
                                                            FB Traffic Ads
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="fb-page-like-ads.php">
                                                            FB Page Like Ads
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <!-- PPC -->
                                    <li class="dropdown">
                                        <a href="ppc-services.php">
                                            Pay Per Click Ads
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="google-ads-management.php">
                                                    Google Ads Management
                                                </a>
                                            </li>

                                            <li>
                                                <a href="google-search-ads.php">
                                                    Google Search Ads
                                                </a>
                                            </li>

                                            <li>
                                                <a href="video-ads-campaign.php">
                                                    Video Ads Campaign
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- Graphic Design -->
                                    <li>
                                        <a href="graphic-design.php">
                                            Graphic Designing
                                        </a>
                                    </li>

                                    <!-- Google 360 -->
                                    <li>
                                        <a href="google-360.php">
                                            Google 360
                                        </a>
                                    </li>

                                    <!-- Event Management -->
                                    <li>
                                        <a href="event-management-infrastructure.php">
                                            Event Management & Infrastructure
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-- Portfolio -->
                            <li class="dropdown">
                                <a href="#!">Portfolio</a>

                                <ul>
                                    <li>
                                        <a href="web-development.php">
                                            Web Development
                                        </a>
                                    </li>

                                    <li>
                                        <a href="graphic-design.php">
                                            Graphic Designing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="our-iconic-websites.php">
                                            Our Iconic Websites
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://techvapi.com" target="_blank" rel="noopener noreferrer">
                                            Event & Industrial Expo
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Clients -->
                            <li>
                                <a href="clients-and-testimonials.php">
                                    Clients & Testimonials
                                </a>
                            </li>

                            <!-- Blogs -->
                            <li>
                                <a href="blogs-articles.php">
                                    Blogs & Articles
                                </a>
                            </li>

                            <!-- Careers -->
                            <li>
                                <a href="careers.php">
                                    Careers
                                </a>
                            </li>

                            <!-- Contact -->
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <a href="#" class="main-header__search search-toggler">
                        <span class="main-header__search__icon">
                            <i class="icon-search" aria-hidden="true"></i>
                        </span>
                    </a><!-- /.main-header__search -->
                    <a href="contact-us.php" class="insuba-btn insuba-btn--base main-header__btn">
                        <span>Get a Quote</span>
                        <span class="insuba-btn__icon-box">
                            <span class="insuba-btn__icon"><i class="fas fa-arrow-right"></i></span>
                        </span>
                    </a><!-- /.insuba-btn main-header__btn -->
                    <div class="sidebar-btn__toggler sidebar-btn__toggler--nav">
                        <div class="sidebar-btn__toggler__bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.sidebar-btn__toggler -->
                    </div><!-- /.sidebar-btn__toggler -->
                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->
</div><!-- /.header-four -->
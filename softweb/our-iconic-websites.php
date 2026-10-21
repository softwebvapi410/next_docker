<!DOCTYPE html>
<html lang="en">

<?php
include 'components/meta_config.php';
include 'components/head.php';
// Array of your iconic websites
$websites = [
["url" => "https://globalplastics.co.in/", "name" => "Global Plastics", "thumb" => "iconic/globalplastics.png"],
["url" => "https://patelengineersindia.com/", "name" => "Patel Engineers India", "thumb" =>
"iconic/patelengineersindia.png"],
["url" => "https://omtitanates.com/", "name" => "Om Titanates", "thumb" => "iconic/omtitanates.png"],
["url" => "https://www.shahindustrial.in/", "name" => "Shah Industrial", "thumb" =>
"iconic/shahindustrial.png"],
["url" => "https://www.hygienixpro.in/", "name" => "Hygienix Pro", "thumb" => "iconic/hygienixpro.png"],
["url" => "https://ekaviraprinters.com/", "name" => "Ekavira Printers", "thumb" =>
"iconic/ekaviraprinters.png"],
["url" => "https://frontlineispat.com/", "name" => "Frontline Ispat", "thumb" => "iconic/frontlineispat.png"],
["url" => "https://www.ashapolyflex.com/", "name" => "Asha Polyflex", "thumb" => "iconic/ashapolyflex.png"],
["url" => "https://travoislogistics.com/", "name" => "Travois Logistics", "thumb" =>
"iconic/travoislogistics.png"],
["url" => "https://apgreenenviro.com/", "name" => "AP Green Enviro", "thumb" => "iconic/apgreenenviro.png"],
["url" => "https://drpanchalsclinic.com/", "name" => "Dr. Panchals Clinic", "thumb" =>
"iconic/drpanchalsclinic.png"],
["url" => "https://www.fib2fabindia.com/", "name" => "Fib2Fab India", "thumb" => "iconic/fib2fabindia.png"],
["url" => "https://techvapi.com/", "name" => "Tech Vapi", "thumb" => "iconic/techvapi.png"],
["url" => "https://www.creativetraders.in/", "name" => "Creative Traders", "thumb" =>
"iconic/creativetraders.png"],
["url" => "https://shivamechsol.com/", "name" => "Shiva Mech Solutions", "thumb" => "iconic/shivamechsol.png"],
["url" => "https://sheetalshairandbeauty.com/", "name" => "Sheetal's Hair and Beauty", "thumb" =>
"iconic/sheetalshairandbeauty.png"],
["url" => "https://rofelpharmacy.ac.in/", "name" => "Rofel Pharmacy College", "thumb" =>
"iconic/rofelpharmacy.png"],
["url" => "https://srsgnyandham.org/", "name" => "SRS Gnyandham", "thumb" => "iconic/srsgnyandham.png"],
["url" => "https://abbuildtech.com/", "name" => "AB Buildtech", "thumb" => "iconic/abbuildtech.png"],
["url" => "https://kyluxelaserclinic.co.uk/", "name" => "Kyluxe laser clinic", "thumb" =>
"iconic/kyluxelaserclinic.png"]
];
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
                    <h2 class="page-header__title">Our Iconic Websites</h2>
                    <ul class="insuba-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>Our Iconic Websites</span></li>
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
        .website-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            border: 1px solid #eee;
            position: relative;
            cursor: pointer;
            /* Indicates the card is clickable */
        }

        .preview-container {
            position: relative;
            width: 100%;
            background: #f9f9f9;
            overflow: hidden;
            border-bottom: 1px solid #f0f0f0;
        }

        .static-thumbnail {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.5s ease;
            z-index: 3;
            position: relative;
        }

        .preview-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px !important;
            height: 900px !important;
            border: none;
            transform-origin: 0 0;
            opacity: 0;
            transition: opacity 0.8s ease;
            z-index: 1;
            pointer-events: none;
            /* Keeps the card click priority */
        }

        .website-card.is-loaded iframe {
            opacity: 1;
            z-index: 4;
        }

        .website-card.is-loaded .static-thumbnail {
            opacity: 0;
        }

        .website-info {
            padding: 20px;
            text-align: center;
        }

        .website-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        .visit-btn {
            font-size: 13px;
            color: #007bff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            text-decoration: none;
        }
        </style>


        <section class="portfolio-grid section-space">
            <div class="container">
                <div class="row">
                    <?php foreach ($websites as $site): ?>
                    <div class="col-md-6">
                        <div class="website-card" onmouseenter="initiateLoad(this)"
                            onclick="window.open('<?php echo $site['url']; ?>', '_blank')">
                            <div class="preview-container">
                                <img src="<?php echo $site['thumb']; ?>" class="static-thumbnail"
                                    alt="<?php echo $site['name']; ?>">

                                <iframe data-src="<?php echo $site['url']; ?>" class="site-iframe"
                                    onload="markAsLoaded(this)">
                                </iframe>
                            </div>
                            <div class="website-info">
                                <h4><?php echo $site['name']; ?></h4>
                                <span class="visit-btn">Click Here to Explore Live Site</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php include "components/service-cta.php";?>

        <section class="section-space-top"></section>

        <?php include 'components/footer.php'; ?>

    </div><!-- /.page-wrapper -->

    <?php include 'components/mob-nav.php'; ?>
    <script>
    function initiateLoad(card) {
        if (card.classList.contains('is-loaded') || card.classList.contains('is-loading')) return;

        const iframe = card.querySelector('iframe');
        if (iframe && !iframe.src) {
            card.classList.add('is-loading');
            iframe.src = iframe.getAttribute('data-src');
        }
    }

    function markAsLoaded(iframe) {
        if (!iframe.src || iframe.src.includes('about:blank')) return;
        const card = iframe.closest('.website-card');
        card.classList.remove('is-loading');
        card.classList.add('is-loaded');
    }

    function handleScaling() {
        const DESKTOP_WIDTH = 1440;
        const DESKTOP_HEIGHT = 900;
        const containers = document.querySelectorAll('.preview-container');

        containers.forEach(container => {
            const iframe = container.querySelector('iframe');
            const img = container.querySelector('.static-thumbnail');
            const containerWidth = container.offsetWidth;
            const scale = containerWidth / DESKTOP_WIDTH;
            const scaledHeight = DESKTOP_HEIGHT * scale;

            container.style.height = scaledHeight + 'px';

            if (iframe) iframe.style.transform = `scale(${scale})`;
            if (img) {
                img.style.height = scaledHeight + 'px';
                img.style.objectFit = 'cover';
                img.style.objectPosition = 'top';
            }
        });
    }

    window.addEventListener('load', handleScaling);
    window.addEventListener('resize', handleScaling);
    document.addEventListener('DOMContentLoaded', handleScaling);
    </script>
</body>

</html>
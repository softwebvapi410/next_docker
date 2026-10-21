import type { Metadata } from "next";
import type { ReactNode } from "react";
import Script from "next/script";
import Link from "next/link";
import SiteFooter from "@/components/site-footer";
import SiteHeader from "@/components/site-header";
import ThemeRouteEffects from "@/components/theme-route-effects";

const stylesheets = [
  "/assets/vendors/bootstrap/css/bootstrap.min.css",
  "/assets/vendors/bootstrap-select/bootstrap-select.min.css",
  "/assets/vendors/animate/animate.min.css",
  "/assets/vendors/fontawesome/css/all.min.css",
  "/assets/vendors/jquery-ui/jquery-ui.css",
  "/assets/vendors/jarallax/jarallax.css",
  "/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css",
  "/assets/vendors/nouislider/nouislider.min.css",
  "/assets/vendors/nouislider/nouislider.pips.css",
  "/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css",
  "/assets/vendors/tiny-slider/tiny-slider.css",
  "/assets/vendors/insuba-icons/style.css",
  "/assets/vendors/owl-carousel/css/owl.carousel.min.css",
  "/assets/vendors/owl-carousel/css/owl.theme.default.min.css",
  "/assets/css/insuba.css",
  "/assets/css/next-interactions.css",
];

const scripts = [
  "/assets/vendors/jquery/jquery-3.7.0.min.js",
  "/assets/vendors/bootstrap/js/bootstrap.bundle.min.js",
  "/assets/vendors/bootstrap-select/bootstrap-select.min.js",
  "/assets/vendors/jarallax/jarallax.min.js",
  "/assets/vendors/jquery-ui/jquery-ui.js",
  "/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js",
  "/assets/vendors/jquery-appear/jquery.appear.min.js",
  "/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js",
  "/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js",
  "/assets/vendors/jquery-validate/jquery.validate.min.js",
  "/assets/vendors/nouislider/nouislider.min.js",
  "/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js",
  "/assets/vendors/tiny-slider/tiny-slider.js",
  "/assets/vendors/wnumb/wNumb.min.js",
  "/assets/vendors/owl-carousel/js/owl.carousel.min.js",
  "/assets/vendors/wow/wow.js",
  "/assets/vendors/imagesloaded/imagesloaded.min.js",
  "/assets/vendors/isotope/isotope.js",
  "/assets/vendors/countdown/countdown.min.js",
  "/assets/vendors/jquery-circleType/jquery.circleType.js",
  "/assets/vendors/jquery-lettering/jquery.lettering.min.js",
  "/assets/vendors/chart/chart.js",
];

export const metadata: Metadata = {
  title: {
    default: "Softweb Technology | Digital Growth & Web Development",
    template: "%s | Softweb Technology",
  },
  description:
    "Digital marketing, SEO, web development, and branding services from Softweb Technology in Vapi, Gujarat.",
  icons: {
    icon: "/assets/images/softweb-favicon.svg",
  },
};

export default function RootLayout({ children }: Readonly<{ children: ReactNode }>) {
  return (
    <html lang="en">
      <head>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        {stylesheets.map((href) => <link href={href} key={href} rel="stylesheet" />)}
      </head>
      <body className="custom-cursor">
        <div className="custom-cursor__cursor" />
        <div className="custom-cursor__cursor-two" />
        <div className="preloader"><div className="preloader__image" style={{ backgroundImage: 'url("/assets/images/softweb-favicon.svg")' }} /></div>
        <div className="page-wrapper">
          <SiteHeader />
          {children}
          <SiteFooter />
        </div>
        <div className="mobile-nav__wrapper">
          <div className="mobile-nav__overlay mobile-nav__toggler" />
          <div className="mobile-nav__content">
            <span className="mobile-nav__close mobile-nav__toggler"><i className="icon-close" /></span>
            <div className="logo-box logo-retina">
              <Link href="/"><img src="/assets/images/softweb-logo-white.svg" width="269" alt="Softweb Technology" /></Link>
            </div>
            <div className="mobile-nav__container" />
            <ul className="mobile-nav__contact list-unstyled">
              <li><a href="tel:+919825659566">+91 98256 59566</a></li>
              <li><a href="mailto:info@softwebtechnology.com">info@softwebtechnology.com</a></li>
            </ul>
          </div>
        </div>
        <ThemeRouteEffects />
        {scripts.map((src) => <Script key={src} src={src} strategy="beforeInteractive" />)}
        <Script src="/assets/js/insuba.js" strategy="afterInteractive" />
      </body>
    </html>
  );
}

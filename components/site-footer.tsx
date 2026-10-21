import Image from "next/image";
import Link from "next/link";

export default function SiteFooter() {
  return (
    <footer className="main-footer main-footer--home-2">
      <div className="main-footer__top">
        <div className="main-footer__bg" style={{ backgroundImage: 'url("/assets/images/backgrounds/footer-bg.jpg")' }} />
        <div className="container">
          <div className="row gutter-y-40">
            <div className="col-xl-12">
              <div className="footer-widget footer-widget--about cus">
                <div className="cus-no">
                  <Link href="/" className="footer-widget__logo"><Image src="/assets/images/softweb-logo-white.svg" alt="Softweb Technology" width={170} height={46} /></Link>
                  <div className="social-links">
                    <a href="https://www.linkedin.com/company/softwebindia/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-linkedin-in" /></span></a>
                    <a href="https://www.facebook.com/softwebindia/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-facebook-f" /></span></a>
                    <a href="https://twitter.com/softwebvapi" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fa-brands fa-x-twitter" /></span></a>
                    <a href="https://www.instagram.com/softwebvapi/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-instagram" /></span></a>
                  </div>
                </div>
                <div className="cus-no"><h2 className="footer-widget__title">SOFTWEB Technology</h2><p className="footer-widget__about">Digital marketing, web development, branding, and event services for businesses across India.</p></div>
              </div>
            </div>
            <div className="col-xl-2 col-lg-3 col-md-4"><div className="footer-widget footer-widget--links"><h2 className="footer-widget__title">Links</h2><ul className="list-unstyled footer-widget__links"><li><Link href="/about-us">About Us</Link></li><li><Link href="/digital-marketing">Services</Link></li><li><Link href="/careers">Careers</Link></li><li><Link href="/blogs-articles">Blog &amp; Articles</Link></li><li><Link href="/contact-us">Contact Us</Link></li></ul></div></div>
            <div className="col-xl-2 col-lg-4 col-md-6"><div className="footer-widget footer-widget--info"><h2 className="footer-widget__title">Explore</h2><ul className="list-unstyled footer-widget__info"><li><Link href="/our-iconic-websites" className="footer-widget__info__text">View Our Portfolio</Link></li><li><Link href="/why-choose-us" className="footer-widget__info__text">Why Choose Us</Link></li><li><Link href="/on-page-seo" className="footer-widget__info__text">On-Page SEO</Link></li><li><Link href="/clients-and-testimonials" className="footer-widget__info__text">Clients &amp; Testimonials</Link></li></ul></div></div>
            <div className="col-xl-4 col-lg-4 col-md-6"><div className="footer-widget footer-widget--info"><h2 className="footer-widget__title">Contact &amp; Support</h2><ul className="list-unstyled footer-widget__info"><li><span className="footer-widget__info__icon"><i className="fas fa-map-marker-alt" /></span><div className="footer-widget__info__text"><strong className="cus-str">SOFTWEB Technology</strong>, Office No. 410, 3rd Floor Tirupati Tower, GIDC Char Rasta, Vapi - 396191, Gujarat</div></li><li><span className="footer-widget__info__icon"><i className="fas fa-phone" /></span><div className="footer-widget__info__text"><a href="tel:+919825659566">+91 98256 59566</a></div></li><li><span className="footer-widget__info__icon"><i className="fas fa-envelope" /></span><div className="footer-widget__info__text"><a href="mailto:info@softwebtechnology.com">info@softwebtechnology.com</a></div></li></ul></div></div>
            <div className="col-xl-4 col-lg-4 col-md-6"><div className="footer-widget footer-widget--info"><h2 className="footer-widget__title">Technical Support</h2><ul className="list-unstyled footer-widget__info"><li><span className="footer-widget__info__icon"><i className="fas fa-headset" /></span><div className="footer-widget__info__text"><a href="mailto:webmaster@softwebtechnology.com">webmaster@softwebtechnology.com</a></div></li><li><span className="footer-widget__info__icon"><i className="fas fa-headset" /></span><div className="footer-widget__info__text"><a href="tel:+919081255511">+91 90812 55511</a> [ Technical Support ]</div></li><li><span className="footer-widget__info__icon"><i className="far fa-clock" /></span><div className="footer-widget__info__text"><strong>Support Hours:</strong><br />Monday - Saturday | 9:00 AM - 4:30 PM</div></li></ul></div></div>
          </div>
        </div>
        <Image src="/assets/images/shapes/footer-shape-1-1.png" alt="" width={140} height={140} className="main-footer__shape-one" />
        <Image src="/assets/images/shapes/footer-shape-1-2.png" alt="" width={140} height={140} className="main-footer__shape-two" />
      </div>
      <div className="main-footer__bottom"><div className="container"><div className="main-footer__bottom__inner"><p className="main-footer__copyright">© Copyright <strong className="cus-str">SOFTWEB Technology</strong>. All Rights Reserved.</p><p className="main-footer__copyright"><Link href="mailto:info@softwebtechnology.com">Contact Softweb</Link></p></div></div>
      </div>
    </footer>
  );
}
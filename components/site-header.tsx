import Image from "next/image";
import Link from "next/link";
import LanguageSelect from "@/components/language-select";
import SiteSearch from "@/components/site-search";

export default function SiteHeader() {
  return (
    <div className="header">
      <div className="topbar topbar--three">
        <div className="container-fluid">
          <div className="topbar__inner">
            <div className="topbar__right">
              <LanguageSelect />
              <div className="topbar__social social-links">
                <a href="https://www.facebook.com/softwebindia/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-facebook-f" /></span></a>
                <a href="https://twitter.com/softwebvapi" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-x-twitter" /></span></a>
                <a href="https://www.instagram.com/softwebvapi/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-instagram" /></span></a>
                <a href="https://www.linkedin.com/company/softwebindia/" target="_blank" rel="noreferrer"><span className="social-links__icon"><i className="fab fa-linkedin-in" /></span></a>
              </div>
            </div>
            <ul className="list-unstyled topbar__info">
              <li><span className="topbar__info__icon"><i className="fas fa-envelope" /></span><a href="mailto:info@softwebtechnology.com">info@softwebtechnology.com</a></li>
              <li><span className="topbar__info__icon"><i className="fas fa-cart-shopping" /></span><a href="https://softwebtechnology.supersite2.myorderbox.com/" target="_blank" rel="noreferrer">Book your Domain</a></li>
            </ul>
          </div>
        </div>
      </div>
      <header className="main-header main-header--four sticky-header sticky-header--normal">
        <div className="container-fluid">
          <div className="main-header__inner">
            <div className="main-header__logo logo-retina">
              <Link href="/"><Image src="/assets/images/softweb-logo.svg" alt="Softweb Technology" width={164} height={44} priority /></Link>
            </div>
            <div className="main-header__right">
              <button className="mobile-nav__btn mobile-nav__toggler" type="button" aria-label="Open navigation"><span /><span /><span /></button>
              <nav className="main-header__nav main-menu" aria-label="Main navigation">
                <ul className="main-menu__list">
                  <li><Link href="/about-us">About Us</Link></li>
                  <li className="dropdown">
                    <Link href="/digital-marketing">Services</Link>
                    <ul>
                      <li><Link href="/web-development">Web Development</Link></li>
                      <li className="dropdown"><Link href="/digital-marketing">Digital Marketing</Link><ul>
                        <li><Link href="/seo">SEO</Link></li>
                        <li><Link href="/google-my-business">Google My Business</Link></li>
                        <li><Link href="/on-page-seo">On-Page SEO</Link></li>
                        <li><Link href="/off-page-seo">Off-Page SEO</Link></li>
                      </ul></li>
                      <li><Link href="/ppc-services">Pay Per Click Ads</Link></li>
                      <li><Link href="/graphic-design">Graphic Designing</Link></li>
                      <li><Link href="/google-360">Google 360</Link></li>
                    </ul>
                  </li>
                  <li><Link href="/our-iconic-websites">Portfolio</Link></li>
                  <li><Link href="/clients-and-testimonials">Clients</Link></li>
                  <li><Link href="/blogs-articles">Blogs &amp; Articles</Link></li>
                  <li><Link href="/contact-us">Contact</Link></li>
                </ul>
              </nav>
              <SiteSearch />
              <Link href="/contact-us" className="insuba-btn insuba-btn--base main-header__btn">
                <span>Get a Quote</span><span className="insuba-btn__icon-box"><span className="insuba-btn__icon"><i className="fas fa-arrow-right" /></span></span>
              </Link>
              <div className="sidebar-btn__toggler sidebar-btn__toggler--nav"><div className="sidebar-btn__toggler__bar"><span /><span /><span /></div></div>
            </div>
          </div>
        </div>
      </header>
    </div>
  );
}
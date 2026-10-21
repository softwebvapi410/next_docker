export default function AboutEnding() {
  return (
    <>
      <section className="need-contact">
        <div className="need-contact__bg insuba-jarallax" data-jarallax data-speed="0.3s" style={{ backgroundImage: 'url("/assets/images/backgrounds/need-contact-bg.jpg")' }} />
        <div className="container">
          <div className="row gutter-y-30 align-items-center">
            <div className="col-lg-6">
              <div className="need-contact__left">
                <h2 className="need-contact__title">Ready to Grow Your Business With SOFTWEB?</h2>
                <ul className="need-contact__list list-unstyled">
                  <li><span className="need-contact__list__icon"><i className="icon-tick" /></span>21+ Years of Proven Digital Innovation.</li>
                  <li><span className="need-contact__list__icon"><i className="icon-tick" /></span>900+ Clients Trust Our Strategic Growth.</li>
                </ul>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="need-contact__right">
                <p className="need-contact__text">Don&apos;t let your competition capture the digital space before you do. Connect with our experts to start your transformation today.</p>
                <div className="need-contact__call"><div className="need-contact__call__inner"><span className="need-contact__call__icon"><i className="icon-phone-ringing" /></span><div className="need-contact__call__content"><h3 className="need-contact__call__title">Call Us Today!</h3><a href="tel:+919825659566" className="need-contact__call__number">+91 98256 59566</a></div></div></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section className="contact-two contact-two--home-4 contact section-space" id="contact">
        <div className="container">
          <div className="contact-two__image"><img src="/assets/images/contact/contact-4-1.png" alt="Contact Softweb" className="contact-two__image__one" /><span className="contact-two__call"><i className="icon-phone-ringing" /></span><img src="/assets/images/shapes/contact-shape-4-1.png" alt="" className="contact-two__image__sahpe" /></div>
          <div className="row"><div className="col-xl-7 col-lg-10"><div className="contact-two__content contact__content">
            <div className="sec-title sec-title--two"><div className="sec-title__top"><div className="sec-title__box"><div className="sec-title__box__inner" /></div><h6 className="sec-title__tagline">Connect With Us</h6></div><h2 className="sec-title__title">Ready to Grow Your Business Digitally?</h2></div>
            <p className="contact-two__text">Partner with Vapi&apos;s most established digital agency. From powerful websites to high-impact marketing, we deliver end-to-end solutions that fuel your business growth.</p>
            <form className="contact__form contact-form-validated" action="mailto:info@softwebtechnology.com" method="post" encType="text/plain">
              <div className="contact__form__group">
                <div className="contact__form__control contact__form__control--full"><input name="name" type="text" placeholder="Your Name *" required /></div>
                <div className="contact__form__control contact__form__control--full"><input name="email" type="email" placeholder="Your Email *" required /></div>
                <div className="contact__form__control"><input name="phone" type="tel" placeholder="Phone *" required /></div>
                <div className="contact__form__control"><select className="selectpicker" name="service" aria-label="Services" defaultValue="" required><option value="" disabled>Services *</option><option>Web Development</option><option>Digital Marketing</option><option>Branding &amp; Design</option><option>Printing Media</option><option>Event Management</option><option>Technical Services</option></select></div>
                <div className="contact__form__control contact__form__control--full"><textarea name="message" placeholder="Your Message *" required /></div>
                <div className="contact__form__control contact__form__control--full"><button type="submit" className="insuba-btn insuba-btn--base"><span>Send Request</span></button></div>
              </div>
            </form>
          </div></div></div>
        </div>
        <img src="/assets/images/shapes/contact-shape-4-2.png" alt="" className="contact-two__shape-one" />
      </section>
    </>
  );
}